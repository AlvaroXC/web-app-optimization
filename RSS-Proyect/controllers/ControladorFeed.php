<?php

namespace Controllers;

require_once __DIR__ . '/../includes/app.php';

use Model\Pagina;
use Model\Noticia;
use Model\Categoria;
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

            /**
             * Nuevo flujo en la cual se ejecuta el guardar la pagina, noticias y categorias
             * 36: Recorre todas las noticias y crea un array de las categorias encontradas en todas las noticias
             * 37: Guarda mediante una diferencia de arrays las nuevas categorias detectadas
             * 39->44 guarda las noticias una por una
             * 42->Establece el id de la notica siendo que necesario para poder cuardar sus categorias, de igual forma 
             * verificar si se puede corregir, ya que al guardar el registro de la noticia no se asigna su ID, solo se devuelve.
             * 
             */
            if ($resultado) {
                $categoriasRss = array_unique(array_map(function ($nt) {return $nt["categorias"];}, $processed_feed["news"]));
                Categoria::guardarNuevasCategorias($categoriasRss);
                $arraysNews = $processed_feed['news'];
                foreach($arraysNews as $new){
                    $noticia = new Noticia($new);
                    $noticia->pagina_id = $resultado['id'];
                    $noticia->id = ($noticia->guardar())['id'];
                    $noticia->guardarCategorias();
                }
                header('location: /public');
            }
        }
    }

    public static function actualizar()
    {
        $resultado_pagina = Pagina::deleteAll();
        $resultado_noticias = Noticia::deleteAll();
        if ($resultado_pagina && $resultado_noticias) {
            header('location: /public');
        }
    }

    private static function createNews($arraysNews)
    {
        foreach ($arraysNews as $new) {
            $newObject = new Noticia($new);
            $newObject->guardar();
            $newObject->guardarCategorias();
        }
    }
}
