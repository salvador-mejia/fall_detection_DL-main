from flask import Flask, request, jsonify
from flask_cors import CORS
import mysql.connector
from datetime import datetime
from db import get_db

app = Flask(__name__)
CORS(app)  # Allow React to access this API

@app.route('/api/alerts', methods=['POST'])
def receive_alert():
    data = request.get_json()
    message = data.get('message')
    timestamp = datetime.now().strftime('%Y-%m-%d %H:%M:%S')

    try:
        conn = get_db()
        cursor = conn.cursor()
        cursor.execute("INSERT INTO alerts (message, timestamp) VALUES (%s, %s)", (message, timestamp))
        conn.commit()
        return jsonify({'status': 'success', 'timestamp': timestamp})
    except Exception as e:
        return jsonify({'status': 'error', 'message': str(e)}), 500

@app.route('/api/alerts', methods=['GET'])
def get_alerts():
    try:
        conn = get_db()
        cursor = conn.cursor()
        cursor.execute("SELECT id, message, timestamp FROM alerts ORDER BY timestamp DESC")
        rows = cursor.fetchall()
        alerts = [{'id': row[0], 'message': row[1], 'timestamp': row[2].strftime('%Y-%m-%d %H:%M:%S')} for row in rows]
        return jsonify(alerts)
    except Exception as e:
        return jsonify({'status': 'error', 'message': str(e)}), 500

if __name__ == '__main__':
    app.run(debug=True, port=5000)
