import cv2

def test_camera(index):
    print(f"🎥 Testing camera index: {index}")
    cap = cv2.VideoCapture(index, cv2.CAP_DSHOW)

    if not cap.isOpened():
        print(f"❌ Camera index {index} not available.\n")
        return

    print(f"✅ Camera index {index} opened. Press 'q' to close window.\n")

    while True:
        ret, frame = cap.read()
        if not ret:
            print("❌ Failed to read frame.")
            break

        cv2.imshow(f"Camera {index}", frame)

        if cv2.waitKey(1) & 0xFF == ord('q'):
            break

    cap.release()
    cv2.destroyAllWindows()

if __name__ == "__main__":
    # Test indices 0, 1, and 2
    for i in range(3):
        test_camera(i)
