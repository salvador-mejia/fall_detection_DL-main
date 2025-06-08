from flask import Flask
from flask_cors import CORS  # add this
from routes.alerts import alerts_bp
from routes.health import health_bp

app = Flask(__name__)
CORS(app)  # allow React to access the API

app.register_blueprint(alerts_bp)
app.register_blueprint(health_bp)

if __name__ == "__main__":
    app.run(debug=True)
