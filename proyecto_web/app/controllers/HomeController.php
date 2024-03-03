<?php
use Illuminate\Database\Capsule\Manager as Capsule;
class HomeController extends Controller
{
    public function list()
    {
        if($_SERVER["REQUEST_METHOD"]== "GET"){
        }
        if ( isset($_GET["category"]) ){
            //$news = Latest::where('categoria', '=', $_GET["category"])->get();
        }else {
            $news = Latest::all();
        }
        
        $result_set = Capsule::select('select distinct categoria from noticia');
        $categories = array_map(function($category) { return $category->categoria;} , $result_set);

        $content = ["categories" => $categories, "news" => $news];
        
        self::render("home", $content, "home");
    }

    public function home()
    {
        self::list();
    }

    public function update()
    {
        $rss_lector = new RSSLector("https://www.xataka.com.mx/feedburner.xml");
        $processed_feed = $rss_lector->process_feed();

        $feed = Feed::Create(
            ["FEED_URL" => $processed_feed["url"],"TITLE" => $processed_feed["title"]]
        );

        foreach ($processed_feed["news"] as $new) {
            $feed->news()->create([
                "TITLE" => $new["title"],
                "URL" => $new["url"],
                "DESCRIPTION" => $new["description"],
                "IMAGEN" => $new["img"],
                "CATEGORIA" => $new["categories"],
                "FECHA" => $new["date"]
            ]);
        }

        exit();
        self::list();
    }

    public function find()
    {
        $new = Latest::find($_GET["id"]);
        self::render("new", $new, "new");
    }

    public function category() {
        $news = Latest::find($_GET["category"]);
        self::render("new", $news, "new");
    }

    public function guardarFeed() {
        
    }

}
