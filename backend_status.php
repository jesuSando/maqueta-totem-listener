<?php
header('Content-Type: application/json');

// Simulación de datos
$totems = [];
for ($i = 1; $i <= 5; $i++) {
    $totems[] = [
        "nombre" => "Tótem $i",
        "front_ethernet" => rand(0, 1),
        "front_url" => rand(0, 1),
        "backend_ethernet" => rand(0, 1),
        "backend_app" => rand(0, 1),
        "backend_pos" => rand(0, 1),
        "pos_ethernet" => rand(0, 1)
    ];
}
echo json_encode($totems);
