import React, { useEffect, useState } from 'react';

const AlertList = () => {
  const [alerts, setAlerts] = useState([]);

  useEffect(() => {
    fetch('http://localhost:5000/api/alerts')
      .then(res => res.json())
      .then(data => {
        setAlerts(data);
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
            {alert.timestamp} - {alert.message}
          </li>
        ))}
      </ul>
    </div>
  );
};

export default AlertList;
