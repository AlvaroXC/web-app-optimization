<?php 

namespace Controllers;

use Model\Noticias;
use MVC\Router;

class ControladorNoticias {
    
    public static function index(Router  $router) {
        $noticias = Noticias::all();
        $router -> render('pages/Noticias', [
            'noticias' => $noticias,
        ]);
    }

    public static function noticia(Router $router) {
        $router -> render('pages/Noticia', [
            
        ]);
    }
}

?>