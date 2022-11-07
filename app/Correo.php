<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Correo extends Model
{
    protected $table ='correos';
    protected $primaryKey='cor_codigo';
    protected $fillable = [ 'cor_nombre','cor_correo','cor_asunto','cor_mensaje','cor_estado','created_at	'];
    public $timestamps=false;
}
