<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seccion extends Model
{
    //
    protected $table='seccion';
    protected $primaryKey='idseccion';
    protected $fillable = ['idcurso','letra','idnivel'];
	public $timestamps=false;

}
