<?php

namespace Controllers;

use MVC\Router;

class LoginController {

    public static function login(Router $router){
        $router->render('login/login');
    }

    public static function logout(){
        echo "logout";
    }

}