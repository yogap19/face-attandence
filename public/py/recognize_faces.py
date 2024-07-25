import cv2
import datetime
import pyttsx3
import mysql.connector
import threading

# Setup MySQL connection
db = mysql.connector.connect(
    host="localhost",
    user="root",
    password="",
    database="db_face_attendance"
)

cursor = db.cursor()

recognizer = cv2.face.LBPHFaceRecognizer_create()
recognizer.read('trainer/trainer.yml')
face_cascade = cv2.CascadeClassifier('cascades/haarcascade_frontalface_default.xml')

# Load the names dictionary
names = {}
with open('trainer/names.txt', 'r') as f:
    for line in f:
        id, name = line.strip().split(':')
        names[int(id)] = name

# Set to track users who have been logged
logged_users = set()

# Function to speak the welcome notification
def speak_notification(user_name):
    engine = pyttsx3.init()
    engine.say(f"Welcome {user_name}")
    engine.runAndWait()

# Function to log attendance
def log_attendance(user_name):
    timestamp = datetime.datetime.now().strftime("%Y-%m-%d %H:%M:%S")
    if user_name not in logged_users:
        sql = "INSERT INTO attendances (name, created_at) VALUES (%s, %s)"
        val = (user_name, timestamp)
        cursor.execute(sql, val)
        db.commit()
        logged_users.add(user_name)
        # Speak welcome notification in a separate thread
        threading.Thread(target=speak_notification, args=(user_name,)).start()
    elif user_name in logged_users:
        sql = "UPDATE attendances SET updated_at = %s WHERE name = %s AND updated_at IS NULL"
        val = (timestamp, user_name)
        cursor.execute(sql, val)
        db.commit()
        # Speak welcome notification in a separate thread
        threading.Thread(target=speak_notification, args=(user_name,)).start()

cap = cv2.VideoCapture(0)

while True:
    ret, img = cap.read()
    gray = cv2.cvtColor(img, cv2.COLOR_BGR2GRAY)
    faces = face_cascade.detectMultiScale(gray, 1.3, 5)
    for (x, y, w, h) in faces:
        id, confidence = recognizer.predict(gray[y:y+h, x:x+w])
        if confidence < 100:
            user_name = names[id]
            confidence_text = f"  {round(100 - confidence)}%"
            log_attendance(user_name)
        else:
            user_name = "unknown"
            confidence_text = f"  {round(100 - confidence)}%"
        cv2.putText(img, str(user_name), (x+5, y-5), cv2.FONT_HERSHEY_SIMPLEX, 1, (255, 255, 255), 2)
        cv2.putText(img, str(confidence_text), (x+5, y+h-5), cv2.FONT_HERSHEY_SIMPLEX, 1, (255, 255, 0), 1)
        cv2.rectangle(img, (x, y), (x+w, y+h), (255, 0, 0), 2)

    cv2.imshow('camera', img)
    if cv2.waitKey(10) & 0xFF == ord('q'):
        break

cap.release()
cv2.destroyAllWindows()

# Close MySQL connection
cursor.close()
db.close()
