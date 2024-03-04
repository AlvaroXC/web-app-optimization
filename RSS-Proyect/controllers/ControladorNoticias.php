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
        $id = validarRedireccionar('/Noticia');
        $noticia = Noticias::find($id);
        $router -> render('pages/Noticia', [
            'noticia' => $noticia,
        ]);
    }

}

?>