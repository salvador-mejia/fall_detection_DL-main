<?php
date_default_timezone_set("America/Santo_Domingo");
require_once '../conn/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $timestamp = date("Y-m-d H:i:s");
    $message = "Fall detected!";
    
    $stmt = $pdo->prepare("INSERT INTO alerts (timestamp, message) VALUES (?, ?)");
    $stmt->execute([$timestamp, $message]);

    echo "Alert saved to database.";
}
?>