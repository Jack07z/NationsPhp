<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //la tabla a conectar a este modelo
    protected $table="countries";
    //la clase primaria de esta tabla
    protected $primaryKey = "country_id";
    //omitir campos de auditoria
    public $timestamps = false;

    use HasFactory;

    //relacion M:M entre paises e idiomas
    public function idiomas()
    {
    //belongsToMany : parametros 
    //1 . Modelo a relacionar
    //2 . Tabla pibote o intermedia
    //3 . FK del modelo actual en el pivote
    return $this->belongsToMany(idioma::class ,
                                'country_languages',
                                'country_id',
                                'language_id')->withpivot('official');
    }
}
