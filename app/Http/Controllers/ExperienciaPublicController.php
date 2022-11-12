<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ExperienciaPublicController extends Controller
{
    //
    public function mostrar_Equipo(){

        $experiencias=DB::table('experiencias')->where('exp_estado','1')->get();

        // dd($servicios);
        return view('public_experiencias.experiencias',compact('experiencias'));
       // return view('public_servicios.servicios')->with('servicios',$servicios);
    }
}
