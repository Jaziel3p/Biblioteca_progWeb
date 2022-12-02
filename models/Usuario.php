<?php

namespace Model;

class Usuario extends ActiveRecord {

    protected static $tabla = 'usuarios';
    
    protected static $columnasDB = [
        'nombre',
        'nombre_usuario',
        'apellido_paterno',
        'apellido_materno',
        'correo',
        'contrasenia',
        'rol'
    ];

    public $id_usuario;
    public $nombre_usuario;
    public $nombre;
    public $apellido_paterno;
    public $apellido_materno;
    public $correo;
    public $contrasenia;
    public $rol;

    public function __construct($args = []){

        $this->id_usuario = $args['id_usuario'] ?? null;
        $this->nombre_usuario = $args['nombre_usuario'] ?? '';
        $this->nombre = $args['nombre'] ?? '';
        $this->apellido_paterno = $args['apellido_paterno'] ?? '';
        $this->apellido_materno = $args['apellido_materno'] ?? '';
        $this->correo = $args['correo'] ?? '';
        $this->contrasenia = $args['contrasenia'] ?? '';
        $this->rol = $args['rol'] ?? '';

    }

    

}