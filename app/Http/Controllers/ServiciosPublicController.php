<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicio; 
use DB;

class ServiciosPublicController extends Controller
{
    // public function __construct(){
    //     // $this->middleware('auth');
    // }

    public function mostrar_Servicios(){

        $servicios=DB::table('servicios')->where('ser_estado','1')->get();

        // dd($servicios);
        return view('public_servicios.servicios',compact('servicios'));
       // return view('public_servicios.servicios')->with('servicios',$servicios);
    }

    function comprar(Request $req,$value){
        
        $data=DB::table('servicios')->where('ser_codigo','=',$value)->first();

        return view('servicios.venta',compact('data'));

        // return $value;
    }
   
}
