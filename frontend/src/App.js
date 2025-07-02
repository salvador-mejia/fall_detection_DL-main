import React, { useState } from 'react';
import StreamView from './StreamView';
import AlertDashboard from './AlertDashboard'; // ✅ now using the styled version

function App() {
  const [view, setView] = useState('streams');

  return (
    <div style={{ padding: '20px', fontFamily: 'Arial, sans-serif' }}>
      <h1>Fall Detection Dashboard</h1>
      <div style={{ marginBottom: '20px' }}>
        <button onClick={() => setView('streams')} style={{ marginRight: '10px' }}>
          View Streams
        </button>
        <button onClick={() => setView('alerts')}>
          View Alerts
        </button>
      </div>

      {view === 'streams' && <StreamView />}
      {view === 'alerts' && <AlertDashboard />} {/* ✅ shows full styled dashboard */}
    </div>
  );
}

export default App;
