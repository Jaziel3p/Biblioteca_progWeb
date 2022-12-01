<?php 

namespace Model;

class Reservacion {

    public $id_reservacion;
    public $fecha;
    public $cantidad;
    public $id_usuario;
    public $id_libro;

    public function __construct ($args = []){
        $this->id_reservacion = $args['id_reservacion'] ?? null;
        $this->fecha = $args['fecha'];
        $this->cantidad = $args['cantidad'];
    }

}