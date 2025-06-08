// src/App.js
import React, { useEffect, useState } from 'react';
import './App.css';

function App() {
  const [alerts, setAlerts] = useState([]);

  useEffect(() => {
    const fetchAlerts = async () => {
      try {
        const response = await fetch('http://localhost:5000/api/alerts');
        const data = await response.json();
        setAlerts(data);
      } catch (error) {
        console.error('Error fetching alerts:', error);
      }
    };

    fetchAlerts(); // initial fetch
    const interval = setInterval(fetchAlerts, 3000); // fetch every 3s
    return () => clearInterval(interval);
  }, []);

  return (
    <div className="App">
      <h1>Fall Detection Alerts</h1>
      <table>
        <thead>
          <tr>
            <th>Timestamp</th>
            <th>Message</th>
          </tr>
        </thead>
        <tbody>
          {alerts.map((alert, index) => (
            <tr key={index}>
              <td>{alert.timestamp}</td>
              <td>{alert.message}</td>
            </tr>
          ))}
        </tbody>
      </table>
    </div>
  );
}

export default App;
