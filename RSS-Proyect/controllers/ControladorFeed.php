<?php
namespace Controllers;
require_once __DIR__ . '/../includes/app.php';
use Model\Pagina;
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
                header('location: /');
            }
        }
    }
}
