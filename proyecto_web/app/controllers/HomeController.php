<?php
use Illuminate\Database\Capsule\Manager as Capsule;
class HomeController extends Controller
{
    public function list()
    {
        $news = News::all();
        self::render("home", $news, "home");
    }

    public function home()
    {
        self::list();
    }

    public function update()
    {
        $rss_lector = new RSSLector("https://www.xataka.com.mx/feedburner.xml");
        $processed_feed = $rss_lector->process_feed();
        $news = $processed_feed["news"];

        foreach ($news as $new) {
            echo json_encode($new);
            News::Create([
                "TITLE" => $new["title"],
                "URL" => $new["url"],
                "DESCRIPTION" => $new["description"],
                "IMAGEN" => $new["img"],
                "CATEGORIA" => $new["categories"],
                "FECHA" => $new["date"]
            ]);
        }
        self::list();
    }

    public function find()
    {
        $new = News::find($_GET["id"]);
        self::render("new", $new, "new");
    }

    public function prueba() {
        $result_set = Capsule::select('select distinct categoria from noticias');
        print_r($result_set);
        $categories = array_map(fn ($category) => $category["categoria"] , $result_set);
        echo $categories;
    }

}
