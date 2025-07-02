<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alertavital</title>
    <link rel="stylesheet" href="../CSS/historial_filtrado.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
        <a href="#" class="active">Historial</a>
        <a href="#">Alertas y Notificaciones</a>
        <a href="#">Centro de Ayuda</a>
        <a href="#">Mi Perfil</a>
        <a href="#">FAQs</a>
    </nav>
    <main>
        <canvas id="alertChart"></canvas>
        <section class="filtered-history">
            <h2>HISTORIAL FILTRADO</h2>
            <table>
                <tr>
                    <th>Ubicación</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Evento</th>
                </tr>
                <tr>
                    <td>Espacio 1</td>
                    <td>8</td>
                    <td>04 abr 2030</td>
                    <td><span class="status completed">Completada</span></td>
                </tr>
                <tr>
                    <td>Espacio 2</td>
                    <td>8</td>
                    <td>11 abr 2030</td>
                    <td><span class="status in-progress">En progreso</span></td>
                </tr>
                <tr>
                    <td>Espacio 3</td>
                    <td>8</td>
                    <td>18 abr 2030</td>
                    <td><span class="status under-review">En revisión</span></td>
                </tr>
            </table>
        </section>
    </main>
    <footer>
        <p>© ALERTAVITAL 2025</p>
    </footer>
    <script src="historial_grafico.js"></script>
</body>
</html>