<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class SocioPublicController extends Controller
{
    //
    public function mostrar_Socios(){

        $socios=DB::table('socios')->where('soc_estado','1')->get();

        // dd($servicios);
        return view('public_socios.socios',compact('socios'));
       // return view('public_servicios.servicios')->with('servicios',$servicios);
    }

}
