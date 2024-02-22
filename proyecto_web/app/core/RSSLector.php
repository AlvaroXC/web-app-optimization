<?php

class RSSLector {

    private string $url;
    public function __construct($url) { 
        $this->url = $url;
    }
    private function optain_feed() {
        $feed = new SimplePie\SimplePie();
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
        $processed_feed = [];

        $items = $feed->get_items();
        foreach ($items as $item) {
            $nw =[
                "title"=> $item->get_title(),
                "url"=> $item->get_link(),
                "description" => htmlspecialchars(strip_tags($item->get_description())),
                "date" => $item->get_date("Y-m-d"),
                "img" => $item->get_thumbnail() ??"",
            ];
            array_push($processed_feed, $nw);
        }

        return $processed_feed;
    }
}