<?php 

use Illuminate\Database\Eloquent\Model as Eloquent;

class News extends Eloquent{
    protected $table = "NOTICIAS"; //Especificar la tabla donde estará el modelo
    public $timestamps = false; //Espera que la tabla tenga una 
    protected $fillable = [
        "TITLE", "URL", "DESCRIPTION", "IMAGEN", "CATEGORIA", "FECHA"
    ];
}