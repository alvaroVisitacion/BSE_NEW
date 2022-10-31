<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Socio;  
use DB;


class SocioController extends Controller
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
        $socios= Socio::all();
        return view('socios.index')->with('socios',$socios);
      
    }

  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $socio= Socio::all(); 
        return view('socios.create');
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
            'soc_titulo'=>'required', 
            'soc_descripcion'=>'required',
            'soc_imagen'=>'required|image|mimes:jpeg,png,jpg,svg,webp|max:1024'
        ]);
        $socios = $request->all();

        if($imagen= $request->file('soc_imagen')){
            $rutaGuardarImg ='img/';
            $imagenSocio =date('YmdHis').".".$imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg, $imagenSocio);
            $socios['soc_imagen'] = "$imagenSocio";
        }
        Socio::create($socios);
        return redirect()->route('socios.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Socio $socio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Socio $socio)
    {
        //
        return view('socios.edit',compact('socio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Socio $socio)
    {
        //
        $request->validate([
            'soc_titulo'=>'required', 
            'soc_descripcion'=>'required' 
        ]);
        $soc=$request->all();
        if($imagen= $request->file('soc_imagen')){
            $rutaGuardarImg ='img/';
            $imagenSocio =date('YmdHis').".".$imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg, $imagenSocio);
            $soc['soc_imagen'] = "$imagenSocio";
        } else{
            unset($soc['soc_imagen']);
        }
        $socio->update($soc);
        return redirect()->route('socios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($soc_codigo)  
    {
        //
        Socio::find($soc_codigo)->delete();  
        return redirect()->route('socios.index');

    }
   
        public function change_status(Socio $socio){ 
            if ($socio->soc_estado== 1) {
                $socio->update(['soc_estado'=>0]);
                return redirect()->back();
            }else {
                $socio->update(['soc_estado'=>1]);
                return redirect()->back();
            }
        }  
}
