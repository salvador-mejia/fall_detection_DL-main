import React, { useEffect, useState } from 'react';

const AlertList = () => {
  const [alerts, setAlerts] = useState([]);

  useEffect(() => {
    fetch('http://localhost:5000/api/alerts')
      .then(res => res.json())
      .then(data => {
        console.log("Raw response from /api/alerts:", data);

        // Try both cases: direct array or wrapped object
        if (Array.isArray(data)) {
          setAlerts(data);
        } else if (Array.isArray(data.alerts)) {
          setAlerts(data.alerts);
        } else {
          console.error("Unexpected data format:", data);
          setAlerts([]); // fallback to avoid .map error
        }
      })
      .catch(err => {
        console.error('Failed to fetch alerts:', err);
      });
  }, []);

  return (
    <div>
      <h2>Fall Detection Alerts</h2>
      <ul>
        {alerts.map(alert => (
          <li key={alert.id}>
            {alert.timestamp} - {alert.evento}
          </li>
        ))}
      </ul>
    </div>
  );
};

export default AlertList;
