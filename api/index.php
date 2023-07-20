<?php
$database_path = 'database/data.json';

$json_data = file_get_contents($database_path);

$actions = json_decode($json_data, true);

// controlliamo se abbiamo qualcosa in post
$new_action = $_POST['action'] ?? null;

if ($new_action) {
    $new_object = [
        "text" => $new_action,
        "done" => false
    ];

    $actions[] = $new_object;

    $json_actions = json_encode($actions);
    file_put_contents($database_path, $json_actions);
}

// Specifico che le informazioni sono di tipo json
header('Content-Type: appclication/json');
// Traduzione array in json
echo json_encode($actions);
