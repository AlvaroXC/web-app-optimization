<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Feed extends Eloquent{
    protected $table = "FEED"; //Especificar la tabla donde estará el modelo
    public $timestamps = false; //Espera que la tabla tenga una 
    protected $fillable = [
        "FEED_URL","TITLE"
    ];


    public function news(){
        return $this->hasMany('Latest');
    }
}