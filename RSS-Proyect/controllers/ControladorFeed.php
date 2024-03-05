<?php
namespace Controllers;
require_once __DIR__ . '/../includes/app.php';
use Model\Pagina;
use Model\Noticias;
use RSSLector;

class ControladorFeed
{

    public static function crear()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $rss_lector = new RSSLector($_POST['url']);
            $processed_feed = $rss_lector->process_feed();
            $webPageData = $processed_feed["webpageinfo"];
            $page = new Pagina($webPageData);
            $resultado = $page->guardar();
            if ($resultado) {
                self::createNews($processed_feed["news"]);
                header('location: /public');
            }
        }
    }

    public static function actualizar(){
        $resultado_pagina = Pagina::deleteAll();
        $resultado_noticias= Noticias::deleteAll();
        if($resultado_pagina && $resultado_noticias){
            header('location: /public');
        }
    }

    private static function createNews($arraysNews){
        foreach($arraysNews as $new){
            $newObject = new Noticias($new);
            $newObject->guardar();
        }
    }
}
