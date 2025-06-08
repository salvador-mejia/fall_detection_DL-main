<?php
require_once '../conn/db.php';
header('Content-Type: application/json');

try {
    $stmt = $pdo->query("SELECT timestamp, message FROM alerts ORDER BY id DESC");
    $alerts = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($alerts);
} catch (PDOException $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
?>