# Nombre del proyecto: fall_detection_DL-main

# Deber correr lo siguiente en orden:

# Flask API Backend (puerto 5000)
cd backend
python app.py

# Flask video streamer (puerto 5001)
cd ../stream_backend
python streamer.py

# React frontend (puerto 3000)
cd ../frontend
npm start
