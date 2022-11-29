<?php

require __DIR__ . "/../../vendor/autoload.php";


function conectarDB(): mysqli{
    
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../');
    $dotenv->load();

    $db = new mysqli($_ENV['HOST'], $_ENV['USER'], $_ENV['PASSWORD'], $_ENV['DATABASE']);

    if (!$db) {
        echo "La conexión a la base de datos no se pudo establecer";
        exit;
    }

    return $db;
}
