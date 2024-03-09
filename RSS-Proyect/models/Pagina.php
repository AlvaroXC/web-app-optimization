<?php
namespace Model;

class Pagina extends ActiveRecord{
    protected static $tabla = 'paginas';
    protected static $columnasDB = ['id', 'url'];

    public $id;
    public $url;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->url = $args['url'] ?? '';
    }


}