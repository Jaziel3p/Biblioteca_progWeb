<?php 

namespace Model;

class Reservacion extends ActiveRecord {

    protected static $tabla = 'reservaciones';

    protected static $columnasDB = [
        'fecha',
        'fecha_entrega',
        'cantidad',
        'id_usuario',
        'id_libro'
    ];

    public $id_reservacion;
    public $fecha;
    public $fecha_entrega;
    public $cantidad;
    public $id_usuario;
    public $id_libro;

    public function __construct ($args = []){
        $this->id_reservacion = $args['id_reservacion'] ?? null;
        $this->fecha = $args['fecha'] ?? '';
        $this->fecha_entrega = $args['fecha_entrega'] ?? '';
        $this->cantidad = $args['cantidad'] ?? '';
        $this->id_usuario = $args['id_usuario'] ?? '';
        $this->id_libro = $args['id_libro'] ?? '';
    }

    public function getNombreLibro() : String{
        return $this->getLibro()->nombre;
    }

    public function getPrecioLibro() : String{
        return $this->getLibro()->precio;
    }

    public function getTotalPrecio() : float { 
        return $this->getLibro()->precio * $this->cantidad;
    }


    public function getNombreDeUsuario() : String {
        return $this->getUsuario()->nombre_usuario;
    }

    public function getNombreCompletoUsuario() : String { 
        return 
            $this->getNombreUsuario() . ' ' .
            $this->getApellidoPaternoUsuario() . ' ' . 
            $this->getApellidoMaternoUsuario() . ' ' ;        
    }

    public function getNombreUsuario() : String {
        return $this->getUsuario()->nombre;
    }

    public function getApellidoPaternoUsuario() : String {
        return $this->getUsuario()->apellido_paterno;
    }

    public function getApellidoMaternoUsuario() : String {
        return $this->getUsuario()->apellido_materno;
    }

    public function getCoreoUsuario() : String {
        return $this->getUsuario()->correo;
    }

    public function getUsuario() : Usuario {
        return Usuario::where('id_usuario', $this->id_usuario);
    }

    public function getLibro() : Libro {
        return Libro::where('id_libro', $this->id_libro);
    }

}