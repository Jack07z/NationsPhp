<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    //la tabla a conectar a este modelo
    protected $table="regions";
    //la clase primaria de esta tabla
    protected $primaryKey = "region_id";
    //omitir campos de auditoria
    public $timestamps = false;

    use HasFactory;

    //relacion entre regiones y continente
    public function continente()
    {
        //belongsTo parametros
        //1.Modelo relacional
        //2.La Fk del modelo a relacionar en el modelo actual
        return $this->belongsTo(Continent::Class, 'continent_id');
    }

    //relacion entre regiones 1-M y paises
    public function paises()
    {
        return $this->hasMany(Country::Class, 'region_id');
    }

}
