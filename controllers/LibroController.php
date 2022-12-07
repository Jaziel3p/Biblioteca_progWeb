<?php

namespace Controllers;

use Model\Libro;
use Model\Reservacion;
use Model\Usuario;
use MVC\Router;

class LibroController {

    //controller para el panel de administracion
    public static function index(Router $router){

        LibroController::validarSesion('admin');
        
        $router->render('sesion/panel', [
            'libros' => Libro::all(),
            'usuario' => $_SESSION
        ]);
    }
    
    public static function libros(Router $router){
        
        LibroController::validarSesion('cliente');

        $libros = array_filter(Libro::all(), function($libro){
            return $libro->cantidad_disponible != 0;
        });

        $router->render('sesion/cliente', [
            'libros' => $libros,
            'usuario' => $_SESSION
        ]);
    }

    public static function crear(Router $router){
        
        LibroController::validarSesion('admin');

        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $libro = new Libro($_POST);
            $libro->guardar();
            header('Location: /panel');
            
        }

        $router->render('libro/crearLibro', [
            'usuario' => $_SESSION
        ]);
    }

    public static function editar(Router $router){
        LibroController::validarSesion('admin');

        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $libro = Libro::where('id_libro', $_POST['id_libro']);
            //actualizamos el id en base a la clase de active record
            $libro->id = $libro->id_libro;
            $libro->nombre  = $_POST['nombre'];
            $libro->precio  = $_POST['precio'];
            $libro->cantidad_disponible  = $_POST['cantidad_disponible'];

            $libro->actualizar('id_libro');
            header('Location: /panel');
            return;            
        }

        $router->render('libro/editarLibro', [
            'usuario' => $_SESSION
        ]);
    }

    public static function eliminar(Router  $router) {

        LibroController::validarSesion('admin');

        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $libro = Libro::where('id_libro', $_POST['id_libro']);
            $libro->id = $libro->id_libro;
            
            if(!$libro->getReservaciones()) {
                $libro->eliminar('id_libro');
                header('Location: /panel');
            }
            
            else{
                
                echo 
                    '<span style="color:white; background:red; display:block; text-align:center;">
                        El libro aun no puede ser eliminado porque tiene reservaciones pendientes
                    </span>';
            }
        }

        if( !isset($libro) ){
            $libro = Libro::where('id_libro', $_GET['id_libro']);
        }
        $router->render('libro/eliminarLibro', [
            'usuario' => $_SESSION,
            'libro' => $libro
        ]);
        
    }
    public static function validarSesion($rol){
        
        if (!$_SESSION) {
            header("Location: /");
            return;
        }

        if ($_SESSION['rol'] != $rol) {
            header("Location: /");
            return;
        }
    }

}