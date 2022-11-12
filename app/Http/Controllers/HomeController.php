<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::all();
        
        return view('home');
    }
    public function mostrar_Datos(){

        $datos=DB::table('datos')->where('dat_estado','1')->get();

        // var_dump($datos);exit();
        return view('home',compact('datos'));

    //    return view('public_servicios.servicios')->with('datos',$datos);
    }

}
