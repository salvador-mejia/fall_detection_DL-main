<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alertavital</title>
    <link rel="stylesheet" href="../CSS/cambiar_contrasena.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="../img/alerta_vital.webp" alt="Alertavital Logo">
            <span>Detectores de Caídas</span>
        </div>
        <div class="user-section">
            <span>UsuarioX</span>
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
        <section class="password-card">
            <h2>Cambiar Contraseña</h2>
            <form method="post" action="">
                <label>Nombre de Usuario</label>
                <input type="text" name="username" value="XXXX" readonly>
                <label>Contraseña Actual*</label>
                <input type="password" name="current_password" required>
                <label>Nueva Contraseña*</label>
                <input type="password" name="new_password" required>
                <label>Confirmación Nueva Contraseña*</label>
                <input type="password" name="confirm_password" required>
                <button type="submit" class="apply-btn">Aplicar</button>
                <button type="button" class="cancel-btn">Cancelar</button>
            </form>
        </section>
    </main>
    <footer>
        <p>© ALERTAVITAL 2025</p>
    </footer>
</body>
</html>