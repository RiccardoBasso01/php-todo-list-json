<?php
// Dati 

$actions = [
    [
        "text" => "Pagare il bollo",
        "done" => false,
    ],
    [
        "text" => 'Pulire la casa',
        "done" => false,
    ],
    [
        "text" => 'Fare benzina',
        "done" => false,
    ],
    [
        "text" => 'Andare in palestra',
        "done" => false,
    ],
    [
        "text" => 'Fare la spesa',
        "done" => false,
    ],
    [
        "text" => 'Pagare la multa',
        "done" => false,
    ],
];


// Specifico che le informazioni sono di tipo json
header('Content-Type: appclication/json');
// Traduzione array in json
echo json_encode($actions);
