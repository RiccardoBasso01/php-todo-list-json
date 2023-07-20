<?php
$database_path = 'database/data.json';

$json_data = file_get_contents($database_path);

$actions = json_decode($json_data, true);

// Specifico che le informazioni sono di tipo json
header('Content-Type: appclication/json');
// Traduzione array in json
echo json_encode($actions);
