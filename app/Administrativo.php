<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrativo extends Model
{
    //
    protected $table='administrativo';
    protected $primaryKey='idadministrativo';
    protected $fillable = ['apellidos','nombread','area'];
	public $timestamps=false;

}
