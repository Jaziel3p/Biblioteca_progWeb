<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\IndexController;
use Controllers\LoginController;
use MVC\Router;

$router = new Router();

//rutas para la pagina inicial del sitio
$router->get('/', [IndexController::class, 'index']);

//rutas para las paginas de login del sitio
$router->get('/login', [LoginController::class, 'login']);
$router->post('/login', [LoginController::class, 'login']);
$router->get('/logout', [LoginController::class, 'logout']);

// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();