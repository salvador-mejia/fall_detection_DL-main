import React, { useState } from 'react';
import StreamView from './StreamView';
import AlertList from './AlertList'; // <-- import the alert list component

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
      {view === 'alerts' && <AlertList />} {/* Now it shows the alerts */}
    </div>
  );
}

export default App;
