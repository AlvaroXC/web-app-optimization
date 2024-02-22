<?php

class HomeController extends Controller{
    public function list() {
        $rss_lector = new RSSLector("https://www.xataka.com.mx/feedburner.xml");
        $news = $rss_lector->process_feed(); //Esto esta mal implementado pero sirve
        self::render("home",$news, "home");
    }

    public function home() {
        self::list();
    }

    public function update() {
        require_once(__DIR__ . "/../views/home_view.php");
    }

}