<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\IndexController;
use Controllers\LoginController;
use Controllers\LibroController;
use Controllers\UsuarioController;
use MVC\Router;

$router = new Router();

//rutas para la pagina inicial del sitio
$router->get('/', [IndexController::class, 'index']);

//rutas para las paginas de login del sitio
$router->get('/login', [LoginController::class, 'login']);
$router->post('/login', [LoginController::class, 'login']);
$router->get('/logout', [LoginController::class, 'logout']);

$router->get('/panel', [LibroController::class, 'index']);
$router->get('/libro/crear', [LibroController::class, 'crear']);
$router->post('/libro/crear', [LibroController::class, 'crear']);
$router->get('/libro/editar', [LibroController::class, 'editar']);
$router->post('/libro/editar', [LibroController::class, 'editar']);
$router->get('/libro/eliminar', [LibroController::class, 'eliminar']);

$router->get('/usuarios', [UsuarioController::class, 'index']);
$router->get('/usuario/crear', [UsuarioController::class, 'crear']);
$router->post('/usuario/crear', [UsuarioController::class, 'crear']);
$router->get('/usuario/editar', [UsuarioController::class, 'editar']);
$router->post('/usuario/editar', [UsuarioController::class, 'editar']);
$router->get('/usuario/eliminar', [UsuarioController::class, 'eliminar']);
$router->post('/usuario/eliminar', [UsuarioController::class, 'eliminar']);


// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();