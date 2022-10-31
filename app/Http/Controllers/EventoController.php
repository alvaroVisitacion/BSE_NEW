<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Evento;
use DB;

class EventoController extends Controller
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
        $eventos= Evento::all();
        return view('eventos.index')->with('eventos',$eventos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $evento= Evento::all();   
        return view('eventos.create');
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
            'eve_titulo'=>'required', 
            'eve_descripcion'=>'required',
            'eve_imagen'=>'required|image|mimes:jpeg,png,jpg,svg,webp|max:1024',
            'eve_fechaini'=>'required',
            'eve_fechafin'=>'required',
            'eve_url'=>'required'            

        ]);
        $eventos = $request->all();

        if($imagen= $request->file('eve_imagen')){
            $rutaGuardarImg ='img/';
            $imagenEvento =date('YmdHis').".".$imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg, $imagenEvento);
            $eventos['eve_imagen'] = "$imagenEvento";
        }
        Evento::create($eventos);
        return redirect()->route('eventos.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Evento $evento)
    {
        //
        return view('eventos.edit',compact('evento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evento $evento)
    {
        //
        $request->validate([
            'eve_titulo'=>'required', 
            'eve_descripcion'=>'required', 
            'eve_fechaini'=>'required',
            'eve_fechafin'=>'required',
            'eve_url'=>'required'  
        ]);
        $eve=$request->all();
        if($imagen= $request->file('eve_imagen')){
            $rutaGuardarImg ='img/';
            $imagenEvento =date('YmdHis').".".$imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg, $imagenEvento);
            $eve['eve_imagen'] = "$imagenEvento";
        } else{
            unset($eve['eve_imagen']);
        }
        $evento->update($eve);
        return redirect()->route('eventos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($eve_codigo)
    {
        //
        Evento::find($eve_codigo)->delete();  
        return redirect()->route('eventos.index');
    }

    public function change_status(Evento $evento){ 
        if ($evento->eve_estado== 1) {
            $evento->update(['eve_estado'=>0]);
            return redirect()->back();
        }else {
            $evento->update(['eve_estado'=>1]);
            return redirect()->back();
        }
    } 
}
