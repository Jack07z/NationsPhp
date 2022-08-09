<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    //la tabla a conectar a este modelo
    protected $table="continents";
    //la clase primaria de esta tabla
    protected $primaryKey = "continent_id";
    //omitir campos de auditoria
    public $timestamps = false;

    use HasFactory;

    //Relacion entre continente y region
    public function regiones()
    //hasmany parametros:
    //1.El modelo a relacionar
    //2.la FK del modelo actual a relacionar

    {return $this->hasmany(Region::class, 'continent_id');}

    //Relacion entre continente y sus paises
    //Abuelo: Continent
    //Papá: Region
    //Nieto: Country
    public function paises()    
    {
        //hasManyThrough Parametros
        //1 . Modelo Nieto
        //2 . Modelo Papa
        //3 . la FK del abuelo al papá
        //4 . la FK del papá al nieto
        return $this->hasManyThrough(Country::class,
                                      Region::class,
                                      'continent_id',
                                      'region_id');
    }
}
