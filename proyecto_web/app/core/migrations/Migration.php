<?php
use Illuminate\Database\Capsule\Manager as Capsule;


if (!Capsule::schema()->hasTable('FEED')) {
    Capsule::schema()->create('FEED', function ($table) {
        $table->increments('ID');
        $table->string('FEED_URL');
        $table->string('TITLE');
    });
}

if (!Capsule::schema()->hasTable('NOTICIA')) {
    Capsule::schema()->create('NOTICIA', function ($table) {
        $table->increments('ID');
        $table->string('TITLE');
        $table->string('URL');
        $table->text('DESCRIPTION');
        $table->string('CATEGORIA');
        $table->string('IMAGEN');
        $table->dateTime('FECHA');
        $table->unsignedInteger('FEED_ID');
        $table->foreign('FEED_ID')->references('ID')->on('FEED')->onDelete('cascade'); 
    });
}


