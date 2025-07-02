<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alertavital</title>
    <link rel="stylesheet" href="../CSS/tu_perfil.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="../img/alerta_vital.webp" alt="Alertavital Logo">
        </div>
        <div class="user-section">
            <span>Usuario</span>
            <button>Cerrar Sesión</button>
        </div>
    </header>
    <hr class="line">
    <nav>
            <a href="#">Panel de Cámaras</a>
            <a href="#">Historial</a>
            <a href="#">Alertas y Notificaciones</a>
            <a href="#">Centro de Ayuda</a>
            <a href="#">Mi Perfil</a>
            <a href="#">FAQs</a>
        </nav>
    <main>
        <section class="profile-card">
            <h2>Tu perfil</h2>
            <div class="profile-pic"><img src="../img/usuario.webp" alt="usuario" ></div>
            <form method="post" action="">
                <label>Nombre de Usuario</label>
                <input type="text" name="username" value="XXXX" readonly>
                <label>Correo electrónico</label>
                <input type="email" name="email" value="usuario@ejemplo.com" readonly>
                <label>Contraseña</label>
                <input type="password" name="password" value="********" readonly>
                <button type="button" class="cambiar-btn">Cambiar Contraseña</button>
            </form>
        </section>
    </main>
    <footer>
        <p>© ALERTAVITAL 2025</p>
    </footer>
</body>
</html>