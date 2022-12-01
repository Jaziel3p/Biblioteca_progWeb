<?php

namespace Model;

class Libro {

    public $id_libro;
    public $nombre;
    public $precio;
    public $cantidad_disponible;

    public function __construct($args = []){

        $this->_libro = $args['_libro'] ?? null;
        $this->nombre = ['nombre'] ?? '';
        $this->precio = ['precio']?? '';
        $this->cantidad_disponible = ['cantidad_disponible'] ?? '';
        
    }

}