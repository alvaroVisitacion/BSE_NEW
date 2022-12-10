<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    protected $table ='productos';
    protected $primaryKey='pro_codigo';
   protected $fillable = [ 'pro_titulo','pro_descripcion','pro_imagen','pro_estado','pro_beneficio'	];
   public $timestamps=false;
}
