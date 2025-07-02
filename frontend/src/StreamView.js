import React from 'react';

function VideoStream({ filename }) {
  return (
    <div style={{ marginBottom: '2rem' }}>
      <h3>{filename}</h3>
      <img
        src={`http://localhost:5001/video_feed/${filename}`}
        alt={`Stream ${filename}`}
        width="640"
        style={{ border: '2px solid red' }}
      />
    </div>
  );
}

function StreamView() {
  const videoFiles = ['fall1.mp4', 'fall2.mp4']; // Replace with your actual filenames

  return (
    <div style={{ padding: '2rem' }}>
      <h1>Live Fall Detection Video Streams</h1>
      {videoFiles.map((file, index) => (
        <VideoStream key={index} filename={file} />
      ))}
    </div>
  );
}

export default StreamView;