<?php

use SimplePie\SimplePie;

class RSSLector {
    private string $pattern = '/<img[^>]*src=["\']([^"\']+)["\']/';

    private string $url;
    public function __construct($url) { 
        $this->url = $url;
    }
    private function optain_feed() {
        $feed = new SimplePie();
        $feed->enable_cache(false);
        $feed->set_feed_url($this->url);

        try {
            $feed->init();
            return $feed;
        } //Especificar
        catch (Exception $e) {
            die("". $e->getMessage());
        }
    }
    
    public function process_feed() {
        $feed = self::optain_feed();
        $processed_feed = [
            "webpageinfo"=>[
                //"titulo" => $feed->get_title(),
                "url" => $feed->get_link()
            ],
            "news" => []
        ];

        $items = $feed->get_items();
        foreach ($items as $item) {
            $nw =[
                "titulo"=> $item->get_title(),
                "url"=> $item->get_link(),
                "descripcion" => htmlspecialchars(strip_tags($item->get_description())),
                "fecha" => $item->get_date("Y-m-d"),
            ];

            //Añado las categorias de la noticia
            $categories = $item->get_categories();

            $categories_name = $this->process_categories($categories);
            $nw["categorias"] = $categories_name ?? explode("/",$item->get_link())[3] ?? [];//$categories_name; 

            //Añadir la url de la imagen

            preg_match($this->pattern, $item->get_content() ?? $item->get_description(), $matches);

            $nw["imagen"] = $item->get_thumbnail()['url'] ?? isset($matches[1]) ? $matches[1] : null;

            //Añado una nueva notica
            array_push($processed_feed["news"], $nw);


        }

        return $processed_feed;
    }

    private function process_categories ($categories) {
        if (isset($categories)){
            $categories_name = [];
            foreach($categories as $category){
                array_push($categories_name, $category->get_term());
            }
            return $categories_name;
        }else{
            null;
        }
    }
}