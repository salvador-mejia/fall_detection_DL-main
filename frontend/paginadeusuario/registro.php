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

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['register'])) {
    // Handle registration logic here
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $names = $_POST['names'] ?? '';
    $lastnames = $_POST['lastnames'] ?? '';
    $email = $_POST['email'] ?? '';

    // Example registration process (to be implemented with actual DB logic)
    // $stmt = $pdo->prepare("INSERT INTO usuarios (username, password, names, lastnames, email) VALUES (:username, :password, :names, :lastnames, :email)");
    // $stmt->execute(['username' => $username, 'password' => password_hash($password, PASSWORD_DEFAULT), 'names' => $names, 'lastnames' => $lastnames, 'email' => $email]);
    // header("Location: ../../paginaprincipal.php");
    // exit;

    echo "<p style='color: green;'>Registro exitoso! (Simulado)</p>";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>REGISTRO | Fall Detection</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/login.css">
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

    <!-- Contenido principal -->
    <main>
        <div style="display: flex; gap: 40px; align-items: center; justify-content: center; padding: 40px;">
            <div>
                <img src="../img/img1.png" alt="Imagen ilustrativa" style="border-radius: 10px; max-width: 678px;">
            </div>

            <div class="tab-container">
                <div class="button-group">
                    <a href="login.php"><button class="tab-button">Login</button></a>
                    <button class="tab-button">Registro</button>
                </div>
                <h2 class="subtitulo">Registrarse</h2>

                <form method="POST" action="">
                    <label for="username">Nombre de Usuario</label>
                    <input type="text" id="username" name="username" placeholder="Elije un nombre de usuario" required>

                    <label for="password">Contraseña</label>
                    <input type="password" id="password" name="password" placeholder="Crea una contraseña" required>

                    <label for="names">Nombres</label>
                    <input type="text" id="names" name="names" placeholder="Ingresa tu nombre" required>

                    <label for="lastnames">Apellidos</label>
                    <input type="text" id="lastnames" name="lastnames" placeholder="Ingresa tu apellido" required>

                    <label for="email">Correo Electrónico</label>
                    <input type="email" id="email" name="email" placeholder="Ingresa tu correo" required>

                    <button type="submit" name="register">Registrarse</button>
                </form>
            </div>
        </div>
    </main>

    <!-- Pie de página -->
    <footer>
        <p>© ALERTAVITAL 2025</p>
    </footer>
</body>
</html>