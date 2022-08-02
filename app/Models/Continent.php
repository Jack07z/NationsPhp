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
}
