<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experiencia extends Model
{
    //
    protected $table ='experiencias';
    protected $primaryKey='exp_codigo';
   protected $fillable = [  'exp_nombre','exp_profesion','exp_resumen','exp_experiencia','exp_imagen','exp_estado'];
   public $timestamps=false;
}
