<?php

namespace Controllers;

use Model\Usuario;
use MVC\Router;

class LoginController{

    public static function login(Router $router){

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $auth = new Usuario($_POST);

            $usuario = Usuario::where('nombre_usuario', $auth->nombre_usuario);

            //validaciones
            if (!$usuario) {
                echo
                "<span style='color:white; background:red; display:block; text-align:center;'>
                        El usuario no existe $auth->nombre_usuario no existe
                    </span>";
            } else {


                if ($usuario->contrasenia != $auth->contrasenia) {
                    echo
                    "<span style='color:white; background:red; display:block; text-align:center;'>
                            Contraseña incorrecta
                        </span>";
                } else {

                    session_start();

                    $_SESSION['id_usuario']     = $usuario->id_usuario;
                    $_SESSION['nombre']         = $usuario->nombre;
                    $_SESSION['nombre_usuario'] = $usuario->nombre_usuario;
                    $_SESSION['correo']         = $usuario->correo;
                    $_SESSION['rol']            = $usuario->rol;

                    if ($_SESSION['rol'] == 'admin') {
                        header('Location: /panel');
                        return;
                    }

                    header('Location: /libros');
                }
            }
        }

        $router->render('login');
    }

    public static function logout()
    {
        $_SESSION = [];
        header('Location: /login');
    }
}
