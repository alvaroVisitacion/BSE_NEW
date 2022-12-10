<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class EventoPublicController extends Controller
{
    //
    public function mostrar_Eventos(){

        $eventos=DB::table('eventos')->where('eve_estado','1')->get();

        // dd($servicios);
        return view('public_eventos.eventos',compact('eventos'));
       // return view('public_servicios.servicios')->with('servicios',$servicios);
    }

    function comprar_evento(Request $req,$value){

        $data=DB::table('eventos')->where('eve_codigo','=',$value)->first();
        $data->tipo=3;// es un evento
        // var_dump($data);

        return view('eventos.venta',compact('data'));

        // return $value;
    }
}
