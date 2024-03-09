<?php 

namespace Controllers;

use Model\Noticia;
use MVC\Router;

class ControladorNoticias {
    
    public static function index(Router  $router) {
        $noticias = Noticia::all();
        $router -> render('pages/Noticias', [
            'noticias' => $noticias,
        ]);
    }

    public static function noticia(Router $router) {
        $id = validarRedireccionar('/Noticia');
        $noticia = Noticia::find($id);
        $router -> render('pages/Noticia', [
            'noticia' => $noticia,
        ]);
    }

}

?>