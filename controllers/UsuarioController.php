<?php 

namespace Controllers;

use Model\Usuario;
use MVC\Router;

class UsuarioController {

    public static function index(Router $router) { 

        UsuarioController::validarSesion();

        $clientes = array_filter(Usuario::all(), function(Usuario $usuario) {
            return $usuario->rol != 'admin';
        });
        
        $router->render('usuario/panelUsuario', [
            'usuario' => $_SESSION,
            'usuarios' => $clientes
        ]);
        
    }
    
    public static function crear(Router $router){

        UsuarioController::validarSesion();

        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $_POST['rol'] = 'cliente';
            $usuario = new Usuario($_POST);
            $usuario->guardar();

            header('Location: /usuarios');
        }

        $router->render('usuario/crearUsuario', [
            'usuario' => $_SESSION
        ]);
    }
    
    public static function editar(Router $router){
        
        UsuarioController::validarSesion();

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
        
        UsuarioController::validarSesion();
        
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            
            $usuario = Usuario::where('id_usuario', $_POST['id_usuario']);
            $usuario->id = $usuario->id_usuario;
            
            if(!$usuario->getReservaciones()){
                $usuario->eliminar('id_usuario');
                header('Location: /usuarios');
            }
            else{
                echo 
                '<span style="color:white; background:red; display:block; text-align:center;">
                    El usuario aun no puede ser eliminado porque tiene reservaciones pendientes
                </span>';
            }
        }

        if( !isset($usuario) ){
            $usuario = Usuario::where('id_usuario', $_GET['id_usuario']);
        }

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