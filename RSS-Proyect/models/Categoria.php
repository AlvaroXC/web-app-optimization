<?php
namespace Model;
use Model\ActiveRecord;
class Categoria extends ActiveRecord{
    protected static $tabla = 'categorias';
    protected static $columnasDB  = ['id', 'nombre'];

    public $id;
    public $nombre;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
    }

    public static function buscarNombres(){
        $resultado = self::$db->query('SELECT NOMBRE FROM CATEGORIAS');
        $categorias = [];

        while ($registro = $resultado->fetch_assoc()){
            $categorias[] = trim($registro['NOMBRE']);
        }
        return $categorias;
    }


    public static function guardarNuevasCategorias($categorias){
        $categoriasActuales = Categoria::buscarNombres();
        $categoriasDiff = array_diff($categorias, $categoriasActuales);

        if(!empty($categoriasDiff)){
            array_walk($categoriasDiff, function ($categoria) {
                (new Categoria(["nombre" => $categoria]))->guardar();
            });
        }
        
    }
}