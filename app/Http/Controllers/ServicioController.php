<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicio;
use DB;

class ServicioController extends Controller
{
    public function __construct(){
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
        $servicios= Servicio::all();
        return view('servicios.index')->with('servicios',$servicios);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $servicio= Servicio::all();
        return view('servicios.create');
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
            'ser_titulo'=>'required',
            'ser_descripcion'=>'required',
            'ser_imagen'=>'required|image|mimes:jpeg,png,jpg,svg,webp|max:1024'
        ]);
        $servicios = $request->all();

        if($imagen= $request->file('ser_imagen')){
            $rutaGuardarImg ='img/';
            $imagenServicio =date('YmdHis').".".$imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg, $imagenServicio);
            $servicios['ser_imagen'] = "$imagenServicio";
        }
        Servicio::create($servicios);
        return redirect()->route('servicios.index');

    }

    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Servicio $servicio)
    {
        //
        return view('servicios.edit',compact('servicio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Servicio $servicio)
    {
        //
        $request->validate([
            'ser_titulo'=>'required',
            'ser_descripcion'=>'required'
        ]);
        $ser=$request->all();
        if($imagen= $request->file('ser_imagen')){
            $rutaGuardarImg ='img/';
            $imagenServicio =date('YmdHis').".".$imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg, $imagenServicio);
            $ser['ser_imagen'] = "$imagenServicio";
        } else{
            unset($ser['ser_imagen']);
        }
        $servicio->update($ser);
        return redirect()->route('servicios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($ser_codigo)
    {
        //
        Servicio::find($ser_codigo)->delete();
        return redirect()->route('servicios.index');

    }

 

        public function change_status(Servicio $servicio){
            if ($servicio->ser_estado== 1) {
                $servicio->update(['ser_estado'=>0]);
                return redirect()->back();
            }else {
                $servicio->update(['ser_estado'=>1]);
                return redirect()->back();
            }
        }
}