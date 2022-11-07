<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Contacto;  
use DB;

class ContactoController extends Controller
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
        $contactos= Contacto::all();
        return view('contactos.index')->with('contactos',$contactos);
      
    }

  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $contacto= Contacto::all(); 
        return view('contactos.create');
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
            'con_somos'=>'required', 
            'con_vision'=>'required', 
            'con_mision'=>'required'
        ]);
        $contactos = $request->all();
 
        Contacto::create($contactos);
        return redirect()->route('contactos.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Contacto $contacto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Contacto $contacto)
    {
        //
        return view('contactos.edit',compact('contacto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contacto $contacto)
    {
        //
         
        $con=$request->all();
         
        $contacto->update($con);
        return redirect()->route('contactos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($con_codigo)  
    {
        //
        Contacto::find($con_codigo)->delete();  
        return redirect()->route('contactos.index');

    }
   
        public function change_status(Contacto $contacto){ 
            if ($contacto->con_estado== 1) {
                $contacto->update(['con_estado'=>0]);
                return redirect()->back();
            }else {
                $contacto->update(['con_estado'=>1]);
                return redirect()->back();
            }
        }  
}
