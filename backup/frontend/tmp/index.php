<?php
include '../backend/db.php';  // Include the database connection

// Fetch all alerts from the database
$stmt = $pdo->query("SELECT * FROM alerts ORDER BY timestamp DESC");
$alerts = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Insert a new alert if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['message'])) {
    $message = $_POST['message'];
    $stmt = $pdo->prepare("INSERT INTO alerts (message) VALUES (:message)");
    $stmt->bindParam(':message', $message);
    $stmt->execute();
    header("Location: index.php"); // Redirect to refresh the page after insert
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fall Detection Alerts</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Fall Detection Alerts</h1>

    <table border="1">
        <thead>
            <tr>
                <th>Timestamp</th>
                <th>Message</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($alerts as $alert): ?>
                <tr>
                    <td><?php echo $alert['timestamp']; ?></td>
                    <td><?php echo $alert['message']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <br><br>
    <form method="POST">
        <button type="submit" name="message" value="Fall detected!">Send Fall Alert</button>
    </form>

    <script>
        // Example JavaScript to send alert via POST request (alternative to form submission)
        function sendAlert() {
            $.post('index.php', {message: 'Fall detected!'}, function(data) {
                alert('Alert sent!');
                location.reload();  // Refresh the page to show the new alert
            });
        }
    </script>
</body>
</html>
