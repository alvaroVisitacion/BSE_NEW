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

  
    function comprar_servicio(Request $req,$value){

        $data=DB::table('servicios')->where('ser_codigo','=',$value)->first();
        $data->tipo=1;// es un servicio
        // var_dump($data);

        return view('servicios.venta',compact('data'));

        // return $value;
    }
    function comprar_producto(Request $req,$value){

        $data=DB::table('servicios')->where('ser_codigo','=',$value)->first();
        $data->tipo=2;// es un producto
        // var_dump($data);

        return view('servicios.venta',compact('data'));

        // return $value;
    }
    function comprar_evento(Request $req,$value){

        $data=DB::table('servicios')->where('ser_codigo','=',$value)->first();
        $data->tipo=3;// es un evento
        // var_dump($data);

        return view('servicios.venta',compact('data'));

        // return $value;
    }
    function comprar_formacion(Request $req,$value){

        $data=DB::table('servicios')->where('ser_codigo','=',$value)->first();
        $data->tipo=4;// es un fomacion
        // var_dump($data);

        return view('servicios.venta',compact('data'));

        // return $value;
    }

    function store_venta(Request $req){


        if($imagen= $req->file('imagen')){
            $rutaGuardarImg ='img/';
            $imagenServicio =date('YmdHis').".".$imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg, $imagenServicio);
            // $array['imagen'] = "$imagenServicio";
        }
        $array=['id_catalogo'=>$req->codigo,'id_tipo'=>$req->tipo,'nombre'=>$req->nombre,'apellido'=>$req->apellido,'telefono'=>$req->telefono,'correo'=>$req->correo,
        'estado'=>0,'foto'=>$imagenServicio];
        DB::table('ventas')->insert($array);
        sleep(2);
        return redirect()->route('listaServicios');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Servicio $servicio)
    {
        //
    }

   
}
