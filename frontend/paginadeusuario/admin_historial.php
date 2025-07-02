<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alertavital - Administración | Historial de Registros</title>
    <link rel="stylesheet" href="../CSS/admin_historial.css">
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
        <h2>Panel de administración | HISTORIAL DE REGISTROS</h2>
        <div class="content-container">
            <div class="form-section">
                <form method="post" action="">
                    <label for="id">ID</label>
                    <input type="text" id="id" name="id" placeholder="Seleccione un ID" required>

                    <label for="ubicacion">Ubicación</label>
                    <input type="text" id="ubicacion" name="ubicacion" placeholder="Ubicación" required>

                    <label for="timestamp">TimeStamp</label>
                    <input type="datetime-local" id="timestamp" name="timestamp" required>

                    <div class="form-buttons">
                        <button type="submit" class="apply-btn">Aplicar</button>
                        <button type="button" class="delete-btn">Eliminar</button>
                    </div>
                </form>
            </div>
            <div class="table-section">
                
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Ubicación</th>
                            <th>TimeStamp</th>
                            <th>Evento</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>8</td>
                            <td>2025-07-02 04:00</td>
                            <td><span class="status-icon check">✓</span> C...</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>8</td>
                            <td>2025-07-02 11:00</td>
                            <td><span class="status-icon pencil">✏</span> E...</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>8</td>
                            <td>2025-07-02 18:00</td>
                            <td><span class="status-icon clock">🕔</span> Por...</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>8</td>
                            <td>2025-07-02 25:00</td>
                            <td><span class="status-icon hourglass">⏱</span> Por...</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>8</td>
                            <td>2025-07-02 02:00</td>
                            <td><span class="status-icon hourglass">⏱</span> Por...</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>8</td>
                            <td>2025-07-02 09:00</td>
                            <td><span class="status-icon hourglass">⏱</span> Por...</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <!-- Pie de página -->
    <footer>
        <p>© ALERTAVITAL 2025</p>
    </footer>
</body>
</html>