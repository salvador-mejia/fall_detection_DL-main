<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alertavital</title>
    <link rel="stylesheet" href="../CSS/styles.css">
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
        <div class="gallery">
            <div class="image-container"><img src="image1.jpg" alt="Room 1"></div>
            <div class="image-container"><img src="image2.jpg" alt="Room 2"></div>
            <div class="image-container"><img src="image3.jpg" alt="Room 3"></div>
            <div class="image-container"><img src="image4.jpg" alt="Room 4"></div>
            <div class="image-container"><img src="image5.jpg" alt="Room 5"></div>
            <div class="image-container"><img src="image6.jpg" alt="Room 6"></div>
        </div>
        <button class="add-button">Añadir</button>
    </main>
    <footer>
        <p>© ALERTAVITAL 2025</p>
    </footer>
</body>
</html>