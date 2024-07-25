import cv2
import numpy as np
import os

recognizer = cv2.face.LBPHFaceRecognizer_create()
detector = cv2.CascadeClassifier('cascades/haarcascade_frontalface_default.xml')

def get_images_and_labels(dataset_path):
    face_samples = []
    ids = []
    user_names = {}  # Definisikan variabel user_names di sini
    current_id = 0

    for root, dirs, files in os.walk(dataset_path):
        for directory in dirs:
            user_name = directory
            if user_name not in user_names:
                user_names[user_name] = current_id
                current_id += 1
            user_id = user_names[user_name]

            for filename in os.listdir(os.path.join(root, directory)):
                if filename.endswith(".jpg") or filename.endswith(".jpeg"):
                    img_path = os.path.join(root, directory, filename)
                    gray_img = cv2.imread(img_path, cv2.IMREAD_GRAYSCALE)
                    img_numpy = np.array(gray_img, 'uint8')
                    faces = detector.detectMultiScale(img_numpy)
                    for (x, y, w, h) in faces:
                        face_samples.append(img_numpy[y:y+h, x:x+w])
                        ids.append(user_id)
    
    return face_samples, ids, user_names  # Mengembalikan user_names juga

faces, ids, user_names = get_images_and_labels('dataset')  # Menyimpan nilai user_names yang dikembalikan

recognizer.train(faces, np.array(ids))

if not os.path.exists('trainer'):
    os.makedirs('trainer')

recognizer.write('trainer/trainer.yml')

# Save the names dictionary for later use in recognition
with open('trainer/names.txt', 'w') as f:
    for name, id in user_names.items():
        f.write(f"{id}:{name}\n")
