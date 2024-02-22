<?php
define("TEMPLATES_URL", __DIR__ . "/templates");
define("FUNCIONES_URL", __DIR__ . "/funciones.php");
function include_template(string $nombre, bool $inicio = false){
    include TEMPLATES_URL . "/$nombre.php";
}