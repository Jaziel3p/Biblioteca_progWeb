<?php 

namespace Controllers;

use Model\Usuario;
use MVC\Router;

class UsuarioController {

    public static function index(Router $router) { 

        LibroController::validarSesion();
        
        $router->render('usuario/panelUsuario', [
            'usuario' => $_SESSION,
            'usuarios' => Usuario::all()
        ]);
        
    }
    
    public static function crear(Router $router){

        LibroController::validarSesion();

        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $usuario = new Usuario($_POST);
            $usuario->rol = "cliente";
            $usuario->guardar();

            header('Location: /usuarios');
        }

        $router->render('usuario/crearUsuario', [
            'usuario' => $_SESSION
        ]);
    }
    
    public static function editar(Router $router){
        
        LibroController::validarSesion();

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $usuario = Usuario::where('id_usuario', $_POST['id_usuario']);

            $usuario->id = $usuario->id_usuario;
            $usuario->nombre_usuario = $_POST['nombre_usuario'];
            $usuario->nombre = $_POST['nombre'];
            $usuario->apellido_paterno  = $_POST['apellido_paterno'];
            $usuario->apellido_materno = $_POST['apellido_materno'];
            $usuario->correo = $_POST['correo'];

            $usuario->actualizar('id_usuario');
            header('Location: /usuarios');
            
        }
        
        $usuario = Usuario::where('id_usuario', $_GET['id_usuario']);
        $router->render('usuario/editarUsuario', [
            'usuario' => $_SESSION,
            'usuarioFound' => $usuario
        ]);
    }
    
    public static function eliminar(Router $router){
        
        LibroController::validarSesion();
        
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            
            $usuario = Usuario::where('id_usuario', $_POST['id_usuario']);
            $usuario->id = $usuario->id_usuario;
            $usuario->eliminar('id_usuario');
            header('Location: /usuarios');
        }

        $usuario = Usuario::where('id_usuario', $_GET['id_usuario']);
        $router->render('usuario/eliminarUsuario', [
            'usuario' => $_SESSION,
            'usuarioFound' => $usuario
        ]);
        
    }

    public static function validarSesion(){
        if (!$_SESSION) {
            header("Location: /");
            return;
        }

        if ($_SESSION['rol'] != 'admin') {
            header("Location: /");
            return;
        }
    }

}