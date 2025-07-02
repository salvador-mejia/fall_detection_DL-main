<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

// Conexión a la base de datos fall_detection (commented out as before)
// $host = 'localhost';
// $db = 'fall_detection';
// $user = 'root';
// $pass = 'Hola1234';

// try {
//     $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch (PDOException $e) {
//     die("Error de conexión: " . $e->getMessage());
// }

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['email'])) {
    $email = $_POST['email'] ?? '';
    // Add email subscription logic here (e.g., save to database)
    // Example: $stmt = $pdo->prepare("INSERT INTO subscriptions (email) VALUES (:email)");
    // $stmt->execute(['email' => $email]);
    echo "<p style='color: green;'>Gracias por suscribirse!</p>";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Alertavital - Inicio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/paginaprincipal.css">
</head>
<body>
    <!-- Encabezado -->
    <header>
        <div style="display: flex; align-items: center;">
            <img src="../img/alerta_vital.webp" alt="Logo" width="250">
        </div>
        <nav>
            <a href="#">Información sobre el Sistema</a>
            <a href="#">Soluciones y productos</a>
            <a href="#">Videos y multimedia</a>
            <a href="#">Sobre nosotros</a>
            <a href="#">Contáctenos</a>
            <a href="#">FAQs</a>
            <div style="flex-grow: 1;"></div>
            <form style="display: inline;">
                <input type="text" placeholder="Busque en AlertaVital" style="padding: 5px;">
                <button type="submit" style="background-color: #e68d1d; border: none; color: white; padding: 5px 10px;">BUSCAR</button>
            </form>
        </nav>
    </header>
 <div class="login-section" style="text-align: ; margin: 10px 20px;">
    <a href="login.php" style="background-color: #0973b9; color: white;
    padding: 5px 10px; text-decoration: none; border-radius: 4px;">Iniciar Sesión</a>
</div>


    <!-- Contenido principal -->
    <main>
        <div class="content-container">
            <div class="left-section">
                <div class="card">
                    <div class="icon warning">!</div>
                    <h3>Novedades del Sistema</h3>
                    <p>Entérese sobre las últimas actualizaciones y mejoras del sistema.</p>
                    <a href="#" class="card-link">Más información</a>
                </div>
                <div class="card">
                    <div class="icon lightbulb"></div>
                    <h3>Soluciones eficaces</h3>
                    <p>Descubra nuestra línea de productos de última tecnología.</p>
                    <a href="#" class="card-link">Más información</a>
                </div>
                <div class="card">
                    <div class="icon play"></div>
                    <h3>Videos y multimedia</h3>
                    <p>Acceda a instructivos y videos útiles del sistema.</p>
                    <a href="#" class="card-link">Más información</a>
                </div>
            </div>
            <div class="right-section">
                <div class="caidas-box">
                    <img src="../img/img2.png" alt="Caída ilustrativa" class="caidas-image">
                    <div class="caidas-text">
                        <h3>Las caídas son muy comunes pero pueden ser peligrosas</h3>
                        <p>Aquí como evitar caídas y protegerse mejor.</p>
                    </div>
                </div>
                <div class="stats-box">
                    <h3>Casos de éxito</h3>
                    <div class="stats-chart">
                        <div class="chart-placeholder"></div>
                    </div>
                </div>
                <div class="connect-box">
                    <h3>Conéctese con nosotros</h3>
                    <p>Regístrese para estar alerta de las caídas.</p>
                    <form method="POST" action="">
                        <input type="email" name="email" placeholder="Escriba tu email" required>
                        <button type="submit" class="submit-btn">→</button>
                    </form>
                </div>
                <div class="social-icons">
                    <a href="#"><img src="../img/logo1.webp" alt="Facebook" class="social-icon"></a>
                    <a href="#"><img src="../img/logo2.png" alt="Instagram" class="social-icon"></a>
                    <a href="#"><img src="../img/logo3.png" alt="Twitter" class="social-icon"></a>
                    <a href="#"><img src="../img/logo4.webp" alt="WhatsApp" class="social-icon"></a>
                </div>
            </div>
        </div>
    </main>

    <!-- Pie de página -->
    <footer>
        <p>© ALERTAVITAL 2025</p>
    </footer>
</body>
</html>