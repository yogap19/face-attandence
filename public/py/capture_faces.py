import cv2
import os

# Path ke file haarcascade
face_cascade_path = 'cascades/haarcascade_frontalface_default.xml'
face_cascade = cv2.CascadeClassifier(face_cascade_path)

# Periksa apakah file haarcascade ada
if face_cascade.empty():
    raise IOError(f"Cannot load haarcascade file from {face_cascade_path}")

cap = cv2.VideoCapture(0)

# Meminta nama pengguna
user_name = input('Enter user name: ')
sample_num = 0

# Buat folder untuk menyimpan gambar wajah per pengguna
user_folder = f"dataset/{user_name}"
if not os.path.exists(user_folder):
    os.makedirs(user_folder)

def capture_face():
    global sample_num  # Mengakses variabel global sample_num
    ret, img = cap.read()
    if not ret:
        print("Failed to capture image")
        return
    
    gray = cv2.cvtColor(img, cv2.COLOR_BGR2GRAY)
    faces = face_cascade.detectMultiScale(gray, 1.3, 5)
    
    if len(faces) == 0:
        print("No faces detected")
    
    for (x, y, w, h) in faces:
        sample_num += 1
        # Simpan gambar dalam folder pengguna
        cv2.imwrite(f"{user_folder}/User_{user_name}_{sample_num}.jpg", gray[y:y+h, x:x+w])
        cv2.rectangle(img, (x, y), (x+w, y+h), (0, 255, 0), 2)
        print(f"Captured image {sample_num} at position x:{x}, y:{y}, w:{w}, h:{h}")
    
    cv2.imshow('image', img)

print("Press 'c' to capture image, 'q' to quit")

# Menangkap wajah saat tombol 'c' ditekan
while True:
    ret, img = cap.read()
    if not ret:
        print("Failed to capture image")
        break

    gray = cv2.cvtColor(img, cv2.COLOR_BGR2GRAY)
    faces = face_cascade.detectMultiScale(gray, 1.3, 5)
    
    for (x, y, w, h) in faces:
        cv2.rectangle(img, (x, y), (x+w, y+h), (0, 255, 0), 2)
    
    cv2.imshow('image', img)
    
    key = cv2.waitKey(1) & 0xFF
    if key == ord('c'):
        capture_face()
    elif key == ord('q'):
        break

cap.release()
cv2.destroyAllWindows()
