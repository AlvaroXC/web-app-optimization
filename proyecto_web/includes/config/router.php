<?php

class Router {
    private $controller;

    private $method;

    public function __construct(){

        $this->mathRoute();
    }

    public function mathRoute(){
        
        $url = explode("/", URL);

        $this->controller = empty($url[1]) ? "Home" : $url[1];
        $this->method = empty($url[2]) ? "home": $url[2];

        //Verifica que la URL tenga metodos del tipo POST para separar los valores
        $this->method = (strpos($this->method,"?") !== false) ? explode("?", $this->method)[0] : $this->method;

        $this->controller = $this->controller . 'Controller';
        require_once(__DIR__ .'/../../app/controllers/' . $this->controller .'.php');
    }

    public function run() {
        $controller = new $this->controller();
        $method = $this->method;
        $controller->$method();
    }
}