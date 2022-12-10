<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Correo;
use DB;
use Illuminate\Support\Facades\Session ;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;


class CorreoPublicController extends Controller
{
    //
    public function mostrar_Correos(){

        $correos=DB::table('correos')->where('cor_estado','1')->get();

        // dd($servicios);
        return view('correos.create',compact('correos'));
       // return view('public_servicios.servicios')->with('servicios',$servicios);
    }

    function comprar_correo(Request $req){

        $data=DB::table('correos')->where('cor_codigo','=',1)->first();
        $data->tipo=5;// es un evento
        // var_dump($data);

        return view('correos.venta',compact('data'));

        // return $value;
    }


    protected $redirectTo = RouteServiceProvider::HOME;

/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
//public function store(Request $request)
    protected function dadd(array $data)
    {
        return Validator::make($data,[
            'cor_nombre'=>['required', 'string','max:100'],
            'cor_correo'=>['required', 'string','email','max:100'],
            'cor_mensaje'=>['required', 'string','max:500'],
            'g-recaptcha-response'=>['required','string',function($attribute,$value,$fail){
                $secretKey='6Le9eugiAAAAALqSPup_APeQot9dVCOYV1KI2GzX';
                $response=$value;
                $userIP = $_SERVER['REMOTE_ADDR'];
                $url ="https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$response&remoteip=$userIP";
                $response =\file_get_contents($url);
                $response = json_decode($response);
                if(!$response->success){
                    Session::flash('g-recaptcha-response','porfavor marque el recaptcha');
                    Session::flash('alert-class','alert-danger');
                    $fail($attribute.'google reCatpcha failed');
                }
            }],
        ]);

    }


    //
    //$request->validate([
        public function create()
        {
            //
            $correo= Correo::all();
            return view('correos.create');
        }

        public function store(Request $request)
        {
            //
            $request->validate([
                'cor_nombre'=>['required', 'string','max:100'],
                'cor_correo'=>['required', 'string','email','max:100'],
                'cor_mensaje'=>['required', 'string','max:500'],
                'cor_asunto'=>['required', 'string','max:100'],
                'g-recaptcha-response'=>['required','string',function($attribute,$value,$fail){
                    $secretKey='6Le9eugiAAAAALqSPup_APeQot9dVCOYV1KI2GzX';
                    $response=$value;
                    $userIP = $_SERVER['REMOTE_ADDR'];
                    $url ="https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$response&remoteip=$userIP";
                    $response =\file_get_contents($url);
                    $response = json_decode($response);
                    if(!$response->success){
                        Session::flash('g-recaptcha-response','porfavor marque el recaptcha');
                        Session::flash('alert-class','alert-danger');
                        $fail($attribute.'google reCatpcha failed');
                    }
                }],

            ]);
            $correos = $request->all();
            Correo::create($correos);
            sleep(3);
            return redirect()->route('home');

        }


        /**
         * Get the guard to be used during registration.
         *
         * @return \Illuminate\Contracts\Auth\StatefulGuard
         */


}

