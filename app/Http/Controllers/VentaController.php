<?php

namespace App\Http\Controllers;

use App\Venta;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    //
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
        $ventas= Venta::all();
        return view('servicios.ventaindex')->with('ventas',$ventas);

    }
    public function destroy($id_venta)
    {
        //
        Venta::find($id_venta)->delete();
        return redirect()->route('ventass.index');

    }

 

        public function change_status(Venta $venta){
            if ($venta->estado== 1) {
                $venta->update(['estado'=>0]);
                return redirect()->back();
            }else {
                $venta->update(['estado'=>1]);
                return redirect()->back();
            }
        }

}
