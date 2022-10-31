<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    //
    protected $table ='eventos';
    protected $primaryKey='eve_codigo';
   protected $fillable = [ 'eve_titulo','eve_descripcion','eve_fechaini','eve_fechafin','eve_url','eve_imagen','eve_estado'	];
   public $timestamps=false;
}
