<?php
/**
 * Este script proporciona la URL actual con la se definiran el controlador y el metodo a utilizar por el sistema 
 */
$folderPath = dirname($_SERVER['SCRIPT_NAME']);//Solo te pase los valores que no tenga la carpeta madre
$urlPath = $_SERVER['REQUEST_URI'];//Solo te pase
$url = substr($urlPath, strlen($folderPath)); //
define('URL', $url);