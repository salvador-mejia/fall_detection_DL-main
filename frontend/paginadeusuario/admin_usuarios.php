<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alertavital - Administración | Usuarios</title>
    <link rel="stylesheet" href="../CSS/admin_usuarios.css">
</head>
<body>
    <!-- Encabezado -->
    <header>
        <div class="logo">
            <img src="../img/alerta_vital.webp" alt="Alertavital Logo" width="250">
        </div>
        <div class="user-section">
            <span>AdminX</span>
            <button>Cerrar Sesión</button>
        </div>
    </header>
    <hr class="line">

    <!-- Navegación -->
    <nav>
        <a href="#">Panel de Cámaras</a>
        <a href="#">Historial</a>
        <a href="#">Alertas y Notificaciones</a>
        <a href="#">Usuarios</a>
        <a href="#">Mi Perfil</a>
    </nav>

    <!-- Contenido principal -->
    <main>
        <h2>Panel de administración | USUARIOS</h2>
        <div class="user-form">
            <form method="post" action="">
                <label for="username">Nombre de Usuario</label>
                <input type="text" id="username" name="username" placeholder="Seleccione un usuario" required>

                <label for="name">Nombre</label>
                <input type="text" id="name" name="name" placeholder="Nombre" required>

                <label for="lastnames">Apellidos</label>
                <input type="text" id="lastnames" name="lastnames" placeholder="Apellidos" required>

                <label for="email">Correo Electrónico</label>
                <input type="email" id="email" name="email" placeholder="Correo Electrónico" required>

                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" placeholder="Contraseña" required>

                <label for="role">Rol</label>
                <input type="text" id="role" name="role" placeholder="Rol" required>

                <div class="form-buttons">
                    <button type="submit" class="apply-btn">Aplicar</button>
                    <button type="button" class="delete-btn">Eliminar</button>
                </div>
            </form>
        </div>
    </main>

    <!-- Pie de página -->
    <footer>
        <p>© ALERTAVITAL 2025</p>
    </footer>
</body>
</html>