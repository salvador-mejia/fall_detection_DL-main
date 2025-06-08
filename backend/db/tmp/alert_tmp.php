<?php
date_default_timezone_set("America/Santo_Domingo");

$file = "../data.json";
$alerts = [];

// Load existing alerts if file exists
if (file_exists($file)) {
    $json = file_get_contents($file);
    $alerts = json_decode($json, true);
}

// Add new alert
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $alerts[] = [
        'timestamp' => date("Y-m-d H:i:s"),
        'message' => 'Fall detected!'
    ];
    file_put_contents($file, json_encode($alerts, JSON_PRETTY_PRINT));
    echo "Alert saved.";
}
?>