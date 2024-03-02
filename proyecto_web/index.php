<?php
/**
 * Este script inicializa el Router, objeto necesario para saber los valores que tiene la url, la cual define el 
 * controlador y metodo a utilizar. 
 */
require_once(__DIR__ . "/includes/app_autoload.php");
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
require_once(__DIR__. "/includes/config/boostrap.php");
require_once(__DIR__ . "/app/core/migrations/News.php");
$router = new Router();
$router->run();
