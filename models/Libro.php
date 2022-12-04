<?php

namespace Model;

class Libro extends ActiveRecord{

    protected static $tabla = 'libros';

    protected static $columnasDB = [
        'nombre',
        'precio',
        'cantidad_disponible'
    ];

    public $id_libro;
    public $nombre;
    public $precio;
    public $cantidad_disponible;

    public function __construct($args = []){

        $this->id_libro = $args['id_libro'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->precio = $args['precio']?? '';
        $this->cantidad_disponible = $args['cantidad_disponible'] ?? '';
    }

    public function getReservaciones(){
        return array_filter(Reservacion::all(), function(Reservacion $r){
            return $r->id_libro == $this->id_libro;
        });
    }

}