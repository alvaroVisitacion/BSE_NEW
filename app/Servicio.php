<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    //
    protected $table ='servicios';
    protected $primaryKey='ser_codigo';
   protected $fillable = [ 'ser_titulo','ser_descripcion','ser_imagen','ser_estado','ser_beneficio'	];
   public $timestamps=false;
}
