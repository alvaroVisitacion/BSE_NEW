<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class ContactoPublicController extends Controller
{
    //
    public function mostrar_Contactos(){

        $contactos=DB::table('contactos')->where('con_estado','1')->get();

        // dd($servicios);
        return view('public_contactos.contactos',compact('contactos'));
       // return view('public_servicios.servicios')->with('servicios',$servicios);
    }
}
