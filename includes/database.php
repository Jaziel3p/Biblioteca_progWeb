<?php

$db = mysqli_connect('localhost', 'root', '', 'biblioteca');

if (!$db) {
    echo "Error: No se pudo conectar a MySQL.";
    echo "errno de depuración: " . mysqli_connect_errno();
    echo "error de depuración: " . mysqli_connect_error();
    exit;
}
// DirectoryIndex index.php
 
// RewriteEngine On
// RewriteRule ^$ biblioteca/public/index.php [L]
// RewriteRule ^((?!biblioteca/public/).*)$ biblioteca/public/$1 [L,NC]