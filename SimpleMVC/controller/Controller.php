<?php 
    session_start();
    require_once(__DIR__ . "/../model/Modelo.php");
    $noticiaModel = new NoticiaModel();
    $pages = $noticiaModel->getPages();
    
    if(!isset($_SESSION['page'])) $_SESSION['page'] = 1;

    $page = $_SESSION['page'];
    
    if($_SERVER['REQUEST_METHOD'] == "GET") {
        
       

        if(isset($_GET["next"]) && $_GET['next'] == true) {
            $_SESSION['page'] = ($page % $pages) + 1;
            exit($_SESSION['page']);
        }

        if(isset($_GET["prev"]) && $_GET['prev'] == true) {
            $_SESSION['page'] = ($page - 2 + $pages) % $pages + 1;
            exit($_SESSION['page']);
        }
    }
    

    $noticias = $noticiaModel->getPage($_SESSION['page']);    
    require_once(__DIR__ . "/../view/View.php");
    
    


    