<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    //
    protected $table ='ventas';
    protected $primaryKey='id_venta';
   protected $fillable = [ 'idcatalogo','id_tipo','FechaCreacion','nombre','apellido',
'telefono','correo','estado','asunto','descripcion','dni','ruc','empresa','cargo','persona','mensaje'];
   public $timestamps=false;
}
