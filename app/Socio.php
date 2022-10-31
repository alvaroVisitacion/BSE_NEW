<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Socio extends Model
{
    //    //
    protected $table ='socios';
    protected $primaryKey='soc_codigo';
   protected $fillable = [ 'soc_titulo','soc_descripcion','soc_orden','soc_imagen','soc_estado'	];
   public $timestamps=false;
}
 