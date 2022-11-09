<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Correo;  
use DB;

class CorreoPublicController extends Controller
{
    //
    
public function create()
{
    //
    $correo= Correo::all(); 
    return view('correos.create');
}

/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
public function store(Request $request)
{
    //
    $request->validate([
        'cor_nombre'=>'required', 
        'cor_correo'=>'required', 
        'cor_mensaje'=>'required',
        'cor_asunto'=>'required'
    ]);
    if (isset($_POST['submit']))
    $ip = $_SERVER["REMOTE_ADDR"];
    $captcha = $_POST['g-recaptcha-response'];
    $secretKey = '6Le9eugiAAAAALqSPup_APeQot9dVCOYV1KI2GzX';

    $correos = $request->all();

    Correo::create($correos);
    return redirect()->route('correos.index');

}


}
