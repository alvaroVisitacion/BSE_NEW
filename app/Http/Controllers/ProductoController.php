<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use DB;

class ProductoController extends Controller
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
        $productos= Producto::all();
        return view('productos.index')->with('productos',$productos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $productos= Producto::all();   
        return view('productos.create');
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
            'pro_titulo'=>'required', 
            'pro_descripcion'=>'required',
            'pro_imagen'=>'required|image|mimes:jpeg,png,jpg,svg,webp|max:1024'
        ]);
        $productos = $request->all();

        if($imagen= $request->file('pro_imagen')){
            $rutaGuardarImg ='img/';
            $imagenProducto =date('YmdHis').".".$imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg, $imagenProducto);
            $productos['pro_imagen'] = "$imagenProducto";
        }
        Producto::create($productos);
        return redirect()->route('productos.index');

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
    public function edit(Producto $producto)
    {
        //
        return view('productos.edit',compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        //
        $request->validate([
            'pro_titulo'=>'required', 
            'pro_descripcion'=>'required' 
        ]);
        $pro=$request->all();
        if($imagen= $request->file('pro_imagen')){
            $rutaGuardarImg ='img/';
            $imagenProducto =date('YmdHis').".".$imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg, $imagenProducto);
            $pro['pro_imagen'] = "$imagenProducto";
        } else{
            unset($pro['pro_imagen']);
        }
        $producto->update($pro);
        return redirect()->route('productos.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($pro_codigo)
    {
        //
        Producto::find($pro_codigo)->delete();  
        return redirect()->route('productos.index');

    }

    public function change_status(Producto $producto){ 
        if ($producto->pro_estado== 1) {
            $producto->update(['pro_estado'=>0]);
            return redirect()->back();
        }else {
            $producto->update(['pro_estado'=>1]);
            return redirect()->back();
        }
    } 

}
