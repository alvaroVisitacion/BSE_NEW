<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicio;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\Formulario;
use App\Producto;
use App\Venta;
use Illuminate\Support\Facades\Session;
use App\ReCaptcha;
use ReCaptcha as GlobalReCaptcha;

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

        $data=DB::table('formaciones')->where('for_codigo','=',$value)->first();
        $data->tipo=4;// es un fomacion
        // var_dump($data);

        return view('servicios.venta',compact('data'));

        // return $value;
    }

    function store_venta(Request $req){


        $correo="correo";
        $mensaje=array('id_catalogo'=>$req->codigo,'id_tipo'=>$req->tipo,'nombre'=>$req->nombre,'apellido'=>$req->apellido,
        'telefono'=>$req->telefono,'correo'=>$req->correo,'asunto'=>$req->asunto,'descripcion'=>$req->descripcion,
        'dni'=>$req->dni,'ruc'=>$req->ruc,'empresa'=>$req->empresa,'cargo'=>$req->cargo,'persona'=>$req->persona,
        'mensaje'=>$req->mensaje,'estado'=>0);

        $secret = "6Le9eugiAAAAALqSPup_APeQot9dVCOYV1KI2GzX";
        $response = null;
 // comprueba la clave secreta
        $reCaptcha = new ReCaptcha();
        $reCaptcha->ReCaptcha($secret);
        if ($_POST["g-recaptcha-response"]) {
            $response = $reCaptcha->verifyResponse(
            $_SERVER["REMOTE_ADDR"],
            $_POST["g-recaptcha-response"]
            );
         }

        if ($response != null && $response->success) {
            DB::table('ventas')->insert($mensaje);
            // Mail::to('informes@bse.com.pe')->send(new Formulario($mensaje));
            Mail::to($req->correo)->send(new Formulario($mensaje));
            sleep(2);

           $_SESSION['EXITO'] = 'Enviado con éxito';


           $data=DB::table('servicios')->where('ser_codigo','=',$req->codigo)->first();

             $data->tipo=1;// es un servicio
              //$data->tipo_cap=2;// si se resolvio el captcha
               // dd($data->tipo_cap);
            // $data->tipo=";
              return view('servicios.venta',compact('data'));
        //    dd('exito');

         //return redirect()->route('home');

         } else {
           $_SESSION['FALLO'] = 'Marque el recaptcha';
           $data=DB::table('servicios')->where('ser_codigo','=',$req->codigo)->first();
        //    dd($data);


           $data->tipo=1;// es un servicio
           $data->tipo_cap=1;
            // dd($data->tipo_cap);

           return view('servicios.venta',compact('data'));
            $aux=1;
           // Si el código no es válido, lanzamos mensaje de error al usuario
        //    dd('fallo');
         }
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
