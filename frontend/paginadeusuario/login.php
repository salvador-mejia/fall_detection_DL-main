<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

// Conexión a la base de datos fall_detection
//$host = 'localhost';
//$db = 'fall_detection';
//$user = 'root';
//$pass = 'Hola1234';

//try {
  //$pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    //$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//} catch (PDOException $e) {
  //  die("Error de conexión: " . $e->getMessage());
//}

$error = '';
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username_email = $_POST['username_email'] ?? '';
    $password = $_POST['password'] ?? '';

    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE username = :ue OR email = :ue");
    $stmt->execute(['ue' => $username_email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['usuario'] = $user['username'];
        header("Location: ../../paginaprincipal.php");
        exit;
    } else {
        $error = "Usuario o contraseña incorrectos.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>LOGIN | Fall Detection</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/login.css">
</head>
<body>
    <!-- Encabezado -->
    <header>
        <div style="display: flex; align-items: center;">
            <img src="../img/alerta_vital.webp" alt="Logo" width="250" >
        </div>
        <nav>
            <a href="#">Información sobre el Sistema</a>
            <a href="#">Soluciones y productos</a>
            <a href="#">Videos y multimedia</a>
            <a href="#">Sobre nosotros</a>
            <a href="#">Contáctenos</a>
            <a href="#">FAQs</a>
            <div style="flex-grow: 1;"></div> <!-- Espacio flexible para alinear a la izquierda -->
            <form style="display: inline;">
                <input type="text" placeholder="Busque en AlertaVital" style="padding: 5px;">
                <button type="submit" style="background-color: #f5a623; border: none; color: white; padding: 5px 10px;">BUSCAR</button>
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
                    <button class="tab-button">Login</button>
                    <a href="registro.php" class="tab-button">Registro</a>
                </div>
                <h2 class="subtitulo">Accede a tu cuenta</h2>

                <?php if (!empty($error)) : ?>
                    <p style="color: red;"><?php echo htmlspecialchars($error); ?></p>
                <?php endif; ?>

                <form method="POST" action="">
                    <label for="username-email">Nombre de Usuario o Correo Electrónico:</label>
                    <input type="text" id="username-email" name="username_email" placeholder="Ingresa tu usuario o correo" required>

                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña" required>

                    <button type="submit">Iniciar Sesión</button>
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