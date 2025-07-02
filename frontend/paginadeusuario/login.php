<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();



// Procesamiento del formulario
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
    <header>
        <a href="../../paginaprincipal.php">
            <img src="../../ASSETS/img/logo.svg" alt="Logo" width="200">
        </a>
    </header>

    <main>
        <h2 class="subtitulo">Accede a tu cuenta</h2>

        <?php if (!empty($error)) : ?>
            <p style="color: red; text-align:center;"><?php echo htmlspecialchars($error); ?></p>
        <?php endif; ?>

        <div class="tab-container">
            <form method="POST" action="">
                <label for="username-email">Nombre de Usuario o Correo Electrónico:</label>
                <input type="text" id="username-email" name="username_email" placeholder="Ingresa tu usuario o correo" required>

                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña" required>

                <button type="submit">Iniciar Sesión</button>
            </form>
        </div>
    </main>

    <footer>
        <p>&copy; FALL DETECTION 2025</p>
    </footer>
</body>
</html>
