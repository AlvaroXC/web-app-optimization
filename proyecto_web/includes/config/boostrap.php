<?php 

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection(
    [
        "driver" => "mysql",
        "host" => $_SERVER["HOST"],
        "database" => $_SERVER["DDBB_NAME"],
        "username" => $_SERVER["DDBB_USER"],
        "password" =>  $_SERVER["DDBB_PASSWORD"]
    ]
);

$capsule->setAsGlobal();

$capsule->bootEloquent();