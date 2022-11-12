<?php
namespace App\Http\Controllers;
use App\Dato;
 use DB;
use Illuminate\Http\Request;

        class DatoController extends Controller
        {

            public function __construct()
            {
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
                $datos = Dato::all();
                return view('datos.index')->with('datos', $datos);
            }


            /**
             * Show the form for creating a new resource.
             *
             * @return \Illuminate\Http\Response
             */
            public function create()
            {
                //
                $dato = Dato::all();
                return view('datos.create');
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
                    'dat_ubicacion' => 'required',
                    'dat_correo' => 'required',
                    'dat_telefono' => 'required'
                    
                ]);
                $datos = $request->all();

                Dato::create($datos);
                return redirect()->route('datos.index');
            }

            /**
             * Display the specified resource.
             *
             * @param  int  $id
             * @return \Illuminate\Http\Response
             */
            public function show(Dato $dato)
            {
                //
            }

            /**
             * Show the form for editing the specified resource.
             *
             * @param  int  $id
             * @return \Illuminate\Http\Response
             */
            public function edit(Dato $dato)
            {
                //
                return view('datos.edit', compact('dato'));
            }

            /**
             * Update the specified resource in storage.
             *
             * @param  \Illuminate\Http\Request  $request
             * @param  int  $id
             * @return \Illuminate\Http\Response
             */
            public function update(Request $request, Dato $dato)
            {
                //

                $dat = $request->all();

                $dato->update($dat);
                return redirect()->route('datos.index');
            }

            /**
             * Remove the specified resource from storage.
             *
             * @param  int  $id
             * @return \Illuminate\Http\Response
             */

            public function destroy($dat_codigo)
            {
                //
                Dato::find($dat_codigo)->delete();
                return redirect()->route('datos.index');
            }

            public function change_status(Dato $dato)
            {
                if ($dato->dat_estado == 1) {
                    $dato->update(['dat_estado' => 0]);
                    return redirect()->back();
                } else {
                    $dato->update(['dat_estado' => 1]);
                    return redirect()->back();
                }
            }
        }
