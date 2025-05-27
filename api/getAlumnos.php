<?php
    header("Content-Type: application/json");
    header("Access-Control-Allow-Origin: ");

    $usuarios=[
        ["id" => 1, "nombre" => "Pablo Escolar", "correo" => "PabloEscoX@gmail.com"],
        ["id" => 1, "nombre" => "Arthur Morgan", "correo" => "Vaqurito@gmail.com"],
        ["id" => 1, "nombre" => "Peter Griffin", "correo" => "surfinginthebird@gmail.com"],
    ];

    echo json_encode($usuarios);

?>