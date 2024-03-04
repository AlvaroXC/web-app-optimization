<?php

namespace Model;

class Noticias extends ActiveRecord {

    protected static $tabla = 'noticias';
    protected static $columnasDB  = ['id', 'titulo', 'url', 'imagen', 'descripcion', 'fecha', 'categoria'];

    public $id;
    public $titulo;
    public $url;
    public $imagen;
    public $descripcion;
    public $fecha;
    public $categoria;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->titulo = $args['titulo'] ?? '';
        $this->url = $args['url'] ?? '';
        $this->imagen = $args['imagen'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
        $this->fecha = $args['fecha'] ?? '';
        $this->categoria = $args['categoria'] ?? '';
    }

}