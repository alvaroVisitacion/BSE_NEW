<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Formacion;
use DB;

class FormacionController extends Controller
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
        $formaciones= Formacion::all();
        return view('formaciones.index')->with('formaciones',$formaciones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $formacion= Formacion::all();   
        return view('formaciones.create');
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
            'for_titulo'=>'required', 
            'for_descripcion'=>'required',
            'for_imagen'=>'required|image|mimes:jpeg,png,jpg,svg,webp|max:1024'
        ]);
        $formaciones = $request->all();

        if($imagen= $request->file('for_imagen')){
            $rutaGuardarImg ='img/';
            $imagenFormacion =date('YmdHis').".".$imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg, $imagenFormacion);
            $formaciones['for_imagen'] = "$imagenFormacion";
        }
        Formacion::create($formaciones);
        return redirect()->route('formaciones.index');

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
    public function edit(Formacion $formacione)
    {
        //
        return view('formaciones.edit',compact('formacione'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Formacion $formacione)
    {
        //
        $request->validate([
            'for_titulo'=>'required', 
            'for_descripcion'=>'required' 
        ]);
        $for=$request->all();
        if($imagen= $request->file('for_imagen')){
            $rutaGuardarImg ='img/';
            $imagenFormacion =date('YmdHis').".".$imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg, $imagenFormacion);
            $for['for_imagen'] = "$imagenFormacion";
        } else{
            unset($for['for_imagen']);
        }
        $formacione->update($for);
        return redirect()->route('formaciones.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($for_codigo)
    {
        //
        Formacion::find($for_codigo)->delete();  
        return redirect()->route('formaciones.index');

    }

    public function change_status(Formacion $formacion){ 
        if ($formacion->for_estado== 1) {
            $formacion->update(['for_estado'=>0]);
            return redirect()->back();
        }else {
            $formacion->update(['for_estado'=>1]);
            return redirect()->back();
        }
    } 

}
