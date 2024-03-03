<?php 

use Illuminate\Database\Eloquent\Model as Eloquent;

class Latest extends Eloquent{
    protected $table = "NOTICIA"; //Especificar la tabla donde estará el modelo
    public $timestamps = false; //Espera que la tabla tenga una 
    protected $fillable = [
        "TITLE", "URL", "DESCRIPTION", "IMAGEN", "CATEGORIA", "FECHA"
    ];
}