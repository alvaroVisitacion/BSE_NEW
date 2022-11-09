<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Correo;  
use DB;
class CorreoController extends Controller
{    public function __construct(){
    $this->middleware('auth');
}

/**
 * Display a listing of the resource.
 *
 * @return \Illuminate\Http\Response
 */
public function index()
{
    //
    $correos= Correo::all();
    return view('correos.index')->with('correos',$correos);
  
}


/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
public function destroy($cor_codigo)  
{
    //
    Correo::find($cor_codigo)->delete();  
    return redirect()->route('correos.index');

}

    public function change_status(Correo $correo){ 
        if ($correo->cor_estado== 1) {
            $correo->update(['cor_estado'=>0]);
            return redirect()->back();
        }else {
            $correo->update(['cor_estado'=>1]);
            return redirect()->back();
        }
    }  
}
