<!-- 
// require 'funciones.php';
// require 'config/Connection.php';
// require __DIR__ . "/../vendor/autoload.php";
// // require 'config/current_url.php';
// // require 'config/router.php';
// // require __DIR__ . '/../app/core/Controller.php';
 -->

<?php

    require 'funciones.php';
    require 'config/Connection.php';
    require __DIR__.'/../vendor/autoload.php';
    require __DIR__ . '/../utils/RSSLector.php';
    
    use Model\ActiveRecord;
    
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/../');
    $dotenv->safeLoad();

    $db = conectarDB();

    new ActiveRecord;
    ActiveRecord::setDb($db);

?>
