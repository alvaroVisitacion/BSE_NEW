<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DatoPublicController extends Controller
{
    //
     public function mostrar_Datos(){

       $datoss=DB::table('datos')->where('dat_estado','1')->get();

    //     // var_dump($datos);exit();
     return view('public_datos.datos',compact('datoss'));

    //    return view('public_servicios.servicios')->with('datos',$datos);
  }

}
