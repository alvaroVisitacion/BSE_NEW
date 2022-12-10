<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class ProductoPublicController extends Controller
{
    //
    public function mostrar_Productos(){

        $productos=DB::table('productos')->where('pro_estado','1')->get();

        // dd($servicios);
        return view('public_productos.productos',compact('productos'));
       // return view('public_servicios.servicios')->with('servicios',$servicios);
    }

    function comprar_producto(Request $req,$value){

        $data=DB::table('productos')->where('pro_codigo','=',$value)->first();
        $data->tipo=2;// es un producto
        // var_dump($data);

        return view('productos.venta',compact('data'));

        // return $value;
    }

}
