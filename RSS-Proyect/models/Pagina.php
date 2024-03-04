<?php
namespace Model;

class Pagina extends ActiveRecord{
    protected static $tabla = 'pagina';
    protected static $columnasDB = ['id', 'titulo', 'url'];

    public $id;
    public $titulo;
    public $url;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->titulo = $args['titulo'] ?? '';
        $this->url = $args['url'] ?? '';
    }


}