### backend/routes/alerts.py
from flask import Blueprint, request, jsonify
from db import get_db
from datetime import datetime

alerts_bp = Blueprint('alerts', __name__)

@alerts_bp.route('/api/alerts', methods=['POST'])
def create_alert():
    data = request.get_json()
    message = data.get("message", "Fall detected!")
    timestamp = datetime.now().strftime("%Y-%m-%d %H:%M:%S")

    conn = get_db()
    cursor = conn.cursor()
    cursor.execute("INSERT INTO alerts (timestamp, message) VALUES (%s, %s)", (timestamp, message))
    conn.commit()
    return jsonify({"status": "success", "timestamp": timestamp}), 201

@alerts_bp.route('/api/alerts', methods=['GET'])
def get_alerts():
    limit = int(request.args.get("limit", 50))
    conn = get_db()
    cursor = conn.cursor()
    cursor.execute("SELECT timestamp, message FROM alerts ORDER BY id DESC LIMIT %s", (limit,))
    rows = cursor.fetchall()
    alerts = [{"timestamp": row[0], "message": row[1]} for row in rows]
    return jsonify(alerts)