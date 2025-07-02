import cv2
from ultralytics import YOLO
import numpy as np
from flask import Flask, Response
import os
import requests
from collections import defaultdict

app = Flask(__name__)
model = YOLO("yolov8n-pose.pt")
VIDEO_FOLDER = "videos"

def send_alert(video_name, person_id):
    try:
        response = requests.post("http://localhost:5000/api/alerts", json={
            "message": f"[Stream: {video_name}] Fall detected for person ID {person_id}"
        })
        print(f"[API] {response.json()}")
    except Exception as e:
        print("[ERROR] Failed to send alert:", e)

def generate_frames(video_path):
    cap = cv2.VideoCapture(video_path)
    previous_heights = defaultdict(lambda: 0)
    video_name = os.path.basename(video_path)

    while cap.isOpened():
        success, frame = cap.read()
        if not success:
            break

        results = model.track(source=frame, persist=True, conf=0.5, iou=0.5)
        keypoints = results[0].keypoints
        boxes = results[0].boxes

        if keypoints is None or boxes is None:
            continue

        frame_annotated = results[0].plot()

        for i, person_kp in enumerate(keypoints.data):
            kp = person_kp.cpu().numpy()
            if len(kp) < 13:
                continue

            left_shoulder = kp[5]
            right_shoulder = kp[6]
            if left_shoulder[2] < 0.5 or right_shoulder[2] < 0.5:
                continue

            avg_y = (left_shoulder[1] + right_shoulder[1]) / 2
            person_id = int(boxes.id[i].item()) if boxes.id is not None else i
            previous_avg = previous_heights[person_id]

            if previous_avg == 0:
                previous_heights[person_id] = avg_y
                continue

            fall_threshold = previous_avg * 1.2
            if avg_y > fall_threshold:
                cv2.putText(frame_annotated, f"FALL! ID: {person_id}",
                            (int(kp[0][0]), int(avg_y)),
                            cv2.FONT_HERSHEY_SIMPLEX, 0.8, (0, 0, 255), 2)
                overlay = frame_annotated.copy()
                cv2.rectangle(overlay, (0, 0), (overlay.shape[1], overlay.shape[0]), (0, 0, 255), -1)
                cv2.addWeighted(overlay, 0.3, frame_annotated, 0.7, 0, frame_annotated)
                print(f"[!] Fall detected in {video_name} - ID {person_id}")
                send_alert(video_name, person_id)

            previous_heights[person_id] = avg_y

        ret, buffer = cv2.imencode('.jpg', frame_annotated)
        frame = buffer.tobytes()

        yield (b'--frame\r\n'
               b'Content-Type: image/jpeg\r\n\r\n' + frame + b'\r\n')
    cap.release()

@app.route('/video_feed/<filename>')
def video_feed(filename):
    path = os.path.join(VIDEO_FOLDER, filename)
    if not os.path.exists(path):
        return "Video not found", 404
    return Response(generate_frames(path), mimetype='multipart/x-mixed-replace; boundary=frame')

if __name__ == "__main__":
    app.run(debug=True, port=5001)