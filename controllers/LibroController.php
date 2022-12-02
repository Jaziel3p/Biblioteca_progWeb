<?php

namespace Controllers;

use Model\Libro;
use MVC\Router;


class LibroController {

    //controller para el panel de administracion
    public static function index(Router $router){

        LibroController::validarSesion();
        
        $router->render('sesion/panel', [
            'libros' => Libro::all(),
            'usuario' => $_SESSION
        ]);
    }

    public static function crear(Router $router){
        LibroController::validarSesion();

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
        LibroController::validarSesion();

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

        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $libro = Libro::where('id_libro', $_POST['id_libro']);
            $libro->id = $libro->id_libro;
            $libro->eliminar('id_libro');

            header('Location: /panel');
            return;
        }

        $router->render('libro/eliminarLibro', [
            'usuario' => $_SESSION
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