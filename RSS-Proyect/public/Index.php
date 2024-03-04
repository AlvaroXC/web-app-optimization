<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\ControladorFeed;
use MVC\Router;
use Controllers\ControladorNoticias;

$router = new Router();

//Para la vista de noticias principal
$router->get('/', [ControladorNoticias::class, 'index']);
//Para una noticia individual
$router->get('/noticia', [ControladorNoticias::class, 'noticia']);
//Agregar feed a la bd
$router->post('/', [ControladorFeed::class, 'crear']);


// Comprueba y valida las rutas que existan y les asigna las funciones del Controlador
$router->comprobarRutas();

?>