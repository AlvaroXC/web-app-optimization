<?php

namespace Model;

class Noticia extends ActiveRecord {

    protected static $tabla = 'noticias';
    protected static $columnasDB  = ['id', 'pagina_id', 'titulo', 'url', 'imagen', 'descripcion', 'fecha'];

    public $id;
    public $pagina_id;
    public $titulo;
    public $url;
    public $imagen;
    public $descripcion;
    public $fecha;
    public $categorias = [];


    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->pagina_id = $args['pagina_id'] ?? '';
        $this->titulo = $args['titulo'] ?? '';
        $this->url = $args['url'] ?? '';
        $this->imagen = $args['imagen'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
        $this->fecha = $args['fecha'] ?? '';
        $this->categorias[] = $args['categorias'] ?? [];
    }

    /**
     * Nueva función de la clase, recorre todas sus categorias con las cuales cuenta la noticia y guarda su relación en la tabla 
     * noticias_categorias, el error de id en la linea 38 es por que se devuelve un objeto, verificar si se puede arreglar de alguna 
     * forma el warning.
     */
    public function guardarCategorias(){
        foreach($this->categorias as $ct){
            $categoria = Categoria::where('nombre', trim($ct));
            $categoria_id = $categoria->id; //Funciona aunque el compilador diga que no 
            self::$db->query("INSERT INTO NOTICIAS_CATEGORIAS(NOTICIA_ID, CATEGORIA_ID) VALUES($this->id, $categoria_id)");
        }
    }

}