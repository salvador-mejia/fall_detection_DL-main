import React, { useEffect, useState } from 'react';

const AlertDashboard = () => {
  const [alerts, setAlerts] = useState([]);

  useEffect(() => {
    fetch('http://localhost:5000/api/alerts')
      .then(res => res.json())
      .then(data => {
        setAlerts(Array.isArray(data) ? data : []);
      })
      .catch(err => console.error('Error loading alerts:', err));
  }, []);

  const getStatusClass = (evento = '') => {
    const ev = evento.toLowerCase();
    if (ev.includes('completada')) return 'completed';
    if (ev.includes('progreso')) return 'in-progress';
    if (ev.includes('revisión')) return 'under-review';
    return '';
  };

  return (
    <section className="filtered-history">
      <h2>HISTORIAL FILTRADO</h2>
      <table>
        <thead>
          <tr>
            <th>Ubicación</th>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Evento</th>
          </tr>
        </thead>
        <tbody>
          {alerts.length === 0 ? (
            <tr><td colSpan="4">No hay alertas registradas.</td></tr>
          ) : (
            alerts.map(alert => {
              const [date, time] = alert.timestamp?.split(' ') ?? ['-', '-'];
              return (
                <tr key={alert.id}>
                  <td>{alert.ubicacion || 'Desconocida'}</td>
                  <td>{date}</td>
                  <td>{time}</td>
                  <td>
                    <span className={`status ${getStatusClass(alert.evento)}`}>
                      {alert.evento}
                    </span>
                  </td>
                </tr>
              );
            })
          )}
        </tbody>
      </table>
    </section>
  );
};

export default AlertDashboard;
