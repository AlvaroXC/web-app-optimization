<?php

namespace Model;

class News extends ActiveRecord {

    // Base DE DATOS
    protected static $table = 'News';
    protected static $datebaseColumns = ['id', 'titulo', 'url', 'imagen', 'descripcion', 'fecha', 'categoria'];


    public $id;
    public $titulo;
    public $url;
    public $imagen;
    public $descripcion;
    public $fecha;
    public $categoria;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->titulo = $args['titulo'] ?? '';
        $this->url = $args['url'] ?? '';
        $this->imagen = $args['imagen'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
        $this->fecha = $args['fecha'] ?? '';
        $this->categoria = $args['categoria'] ?? '';
    }

}