<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formacion extends Model
{
    //
    protected $table ='formaciones';
    protected $primaryKey='for_codigo';
   protected $fillable = [ 'for_titulo','for_descripcion','for_imagen','for_estado'	];
   public $timestamps=false;
}
