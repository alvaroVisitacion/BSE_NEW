<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class FormacionPublicController extends Controller
{
    //
    public function mostrar_Formaciones(){

        $formaciones=DB::table('formaciones')->where('for_estado','1')->get();

        // dd($servicios);
        return view('public_formaciones.formaciones',compact('formaciones'));
       // return view('public_servicios.servicios')->with('servicios',$servicios);
    }

}
