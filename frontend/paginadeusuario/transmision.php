<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alertavital</title>
    <link rel="stylesheet" href="../CSS/transmision.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="../img/alerta_vital.webp" alt="Alertavital Logo">
        </div>
        <div class="user-section">
            <span>UsuarloX</span>
            <button>Cerrar Sesión</button>
        </div>
    </header>
    <br style="background-color: gray; height: 2px;">
    <nav>
        <a href="#panel">Panel de Cámaras</a>
        <a href="#historial">Historial</a>
        <a href="#alertas">Alertas y Notificaciones</a>
        <a href="#ayuda">Centro de Ayuda</a>
        <a href="#perfil">Mi Perfil</a>
        <a href="#faqs">FAQs</a>
    </nav>
    <main>
        <div class="video-container">
             <video width="640" height="360" controls>
                  <source src="../../backend/stream_backend/videos/fall1.mp4" type="video/mp4">
                  Tu navegador no soporta la reproducción de video.
            </video>
        </div>
    </main>
    <footer>
        <p>© ALERTAVITAL 2025</p>
    </footer>
</body>
</html>