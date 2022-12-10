<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dato extends Model
{
    //
    protected $table ='datos';
    protected $primaryKey='dat_codigo';
   protected $fillable = [ 'dat_ubicacion','dat_correo','dat_telefono','dat_estado'];
   public $timestamps=false;
}
