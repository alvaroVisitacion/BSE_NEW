<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Experiencia;  
use DB;


class ExperienciaController extends Controller
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
        $experiencias= Experiencia::all();
        return view('experiencias.index')->with('experiencias',$experiencias);
      
    }

  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $experiencia= Experiencia::all(); 
        return view('experiencias.create');
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
            'exp_nombre'=>'required', 
            'exp_profesion'=>'required', 
            'exp_resumen'=>'required',  
            'exp_experiencia'=>'required',  
            'exp_imagen'=>'required|image|mimes:jpeg,png,jpg,svg,webp|max:1024'
        ]);
        $experiencias = $request->all();

        if($imagen= $request->file('exp_imagen')){
            $rutaGuardarImg ='img/';
            $imagenExperiencia =date('YmdHis').".".$imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg, $imagenExperiencia);
            $experiencias['exp_imagen'] = "$imagenExperiencia";
        }
        Experiencia::create($experiencias);
        return redirect()->route('experiencias.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Experiencia $experiencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Experiencia $experiencia)
    {
        //
        return view('experiencias.edit',compact('experiencia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Experiencia $experiencia)
    {
        //
        $request->validate([
            'exp_nombre'=>'required', 
            'exp_profesion'=>'required', 
            'exp_resumen'=>'required',
            'exp_experiencia'=>'required'
        ]);
        $exp=$request->all();
        if($imagen= $request->file('exp_imagen')){
            $rutaGuardarImg ='img/';
            $imagenExperiencia =date('YmdHis').".".$imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg, $imagenExperiencia);
            $exp['exp_imagen'] = "$imagenExperiencia";
        } else{
            unset($exp['exp_imagen']);
        }
        $experiencia->update($exp);
        return redirect()->route('experiencias.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($exp_codigo)  
    {
        //
        Experiencia::find($exp_codigo)->delete();  
        return redirect()->route('experiencias.index');

    }
   
        public function change_status(Experiencia $experiencia){ 
            if ($experiencia->exp_estado== 1) {
                $experiencia->update(['exp_estado'=>0]);
                return redirect()->back();
            }else {
                $experiencia->update(['exp_estado'=>1]);
                return redirect()->back();
            }
        }  
}
