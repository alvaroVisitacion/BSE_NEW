<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    //
    protected $table ='contactos';
    protected $primaryKey='con_codigo';
   protected $fillable = [ 'con_somos','con_vision','con_mision','con_estado'];
   public $timestamps=false;
}
