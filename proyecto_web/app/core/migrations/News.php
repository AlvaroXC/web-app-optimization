<?php

//require_once(__DIR__ . "/../../../includes/config/boostrap.php");
use Illuminate\Database\Capsule\Manager as Capsule;

if(!Capsule::schema()->hasTable('NOTICIAS')){
    Capsule::schema()->create('NOTICIAS' , function($table){
        $table->increments("ID");
        $table->string('TITLE');
        $table->string('URL');
        $table->text('DESCRIPTION');
        $table->string('CATEGORIA');
        $table->string('IMAGEN');
        $table->dateTime('FECHA');
    });
}
