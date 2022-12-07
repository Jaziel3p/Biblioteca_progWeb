<?php

namespace Controllers;

use Model\Libro;
use Model\Reservacion;
use Model\Usuario;
use MVC\Router;

class ReservacionController{

    public static function index(Router $router){

        $reservaciones = Reservacion::all();

        if($_SESSION['rol'] == 'cliente'){
            $reservaciones = array_filter($reservaciones, function(Reservacion $r){
                return $r->id_usuario == $_SESSION['id_usuario'];
            } );
        }

        $router->render('reservacion/panelReservacion', [
            'reservaciones' => $reservaciones,
            'usuario' => $_SESSION
        ]);
    }

    public static function reservar(Router $router){

        ReservacionController::validarSesion('cliente');

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            //datos de llaves foraneas
            $libro = Libro::where('id_libro', $_POST['id_libro']);
            $usuario = Usuario::where('id_usuario', $_SESSION['id_usuario']);

            //datos que necesito para hacer una reserva de libros
            $id_libro           = $libro->id_libro;
            $id_usuario         = $usuario->id_usuario;
            $cantidad_reserva   = $_POST['cantidad_resevar'];
            
            $fecha_actual   = date('Y-m-d h:i:s');
            $fecha_entrega  = date('Y-m-d h:i:s', strtotime($fecha_actual.'+ 5 days'));

            $datosReservacion = [
                'id_libro'      => $id_libro,
                'id_usuario'    => $id_usuario,
                'cantidad'      => $cantidad_reserva,
                'fecha'         => $fecha_actual,
                'fecha_entrega' => $fecha_entrega,
            ];

            $reservacion = new Reservacion($datosReservacion);
            $reservacion->guardar();

            //actualizando la informacion del libro reservado
            $libro->cantidad_disponible = $libro->cantidad_disponible - $reservacion->cantidad; 
            $libro->id = $libro->id_libro;
            $libro->actualizar('id_libro');
            header('Location: /libros');
        }

        $libro = Libro::where('id_libro', $_GET['id_libro']);

        $router->render('libro/reservarLibro', [
            'libro' => $libro,
            'usuario' => $_SESSION
        ]);
    }

    public static function eliminar(Router $router){

        ReservacionController::validarSesion('admin');

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $reservacion = Reservacion::where('id_reservacion', $_POST['id_reservacion']);
            $reservacion->id = $reservacion->id_reservacion;
            
            $libro = $reservacion-> getLibro();
            $libro->id = $libro->id_libro;
            $libro->cantidad_disponible += $reservacion->cantidad; 


            $libro->actualizar('id_libro');
            $reservacion->eliminar('id_reservacion');

            header('Location: /reservaciones');
        }

        if( !isset($reservacion) ){
            $reservacion = Reservacion::where('id_reservacion', $_GET['id_reservacion']);
        }

        $router->render('reservacion/eliminarReservacion', [
            'usuario' => $_SESSION,
            'reservacion' => $reservacion
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
