<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matricula;
use App\Periodo;
use App\Alumno;
use App\Seccion;
use App\Nivel;
use App\Administrativo;
use App\Grado;
use DB;

class MatriculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request)
        {
            
           $buscarpor=$request->get('buscarpor');
            $matricula=DB::table('matricula as m')->join(
            'periodo as pe','m.idperiodo','=','pe.idperiodo')->join(
            'alumno as al','m.idalumno','=','al.idalumno')->join(
            'seccion as se','m.idseccion','=','se.idseccion')->join(
            'grado as g','m.idgrado','=','g.idgrado')->join(
            'nivel as ni','m.idnivel','=','ni.idnivel')->select(
            'm.idmatricula','m.admin','m.fechaactual','m.codmatricula','pe.año','al.codalumno','al.apellidopat','al.apellidomat','al.nombreal','se.letra','g.grado','ni.nombreni')->where(
            'al.apellidopat','LIKE','%'.$buscarpor.'%')->orderBy(
            'm.codmatricula')->paginate(5);
           return view('Matricula.index',['matricula'=>$matricula,'buscarpor'=>$buscarpor]);    
        }
            
    }

    public function buscarporcodigo(Request $request)
    {
    
            
           $buscarporcodigo=$request->get('buscarpor');
            $matricula=DB::table('matricula as m')->join(
            'alumno as al','m.idalumno','=','al.idalumno')->select(
           'al.apellidopat','al.apellidomat','al.nombreal','al.codalumno')->where(
            'al.apellidopat','LIKE','%'.$buscarporcodigo.'%');
           return view('Matricula.create',['matricula'=>$matricula,'buscarpor'=>$buscarporcodigo]);    
        
            
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    
        $matricula=Matricula::all();
        $periodo=Periodo::all();
        $alumno=Alumno::all();
        $seccion=Seccion::all();
        $nivel=Nivel::all();
        $grado=Grado::all();
        $administrativo=Administrativo::all();
        return view('Matricula.create',['matricula'=>$matricula,'periodo'=>$periodo,
        'alumno'=>$alumno,'seccion'=>$seccion,'grado'=>$grado,
        'nivel'=>$nivel,'administrativo'=>$administrativo]);
    
    }

    public function getGrado(Request $request, $idgrado ){
        if ($request->ajax()){
            $grado= Grado::grado($idgrado);
            return response()->json($grado);
        }
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
        //  Matricula::create($request->all());// 17172
        //return redirect()->route('matricula.index');

        DB::beginTransaction();
        try {
            Matricula::create($request->all());     
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
        } catch (\Throwable $e) {
            DB::rollback();
            throw $e;
        }        
         return redirect()->route('matricula.index');


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
    public function edit($id)
    {
        //
        $matricula=Matricula::find($id);
        $periodo=Periodo::all();
        $alumno=Alumno::all();
        $seccion=Seccion::all();
        $nivel=Nivel::all();
         $grado=Grado::all();
        $administrativo=Administrativo::all();
        return view('Matricula.edit',['matricula'=>$matricula,'periodo'=>$periodo,'alumno'=>$alumno,'seccion'=>$seccion,'grado'=>$grado,'nivel'=>$nivel,'administrativo'=>$administrativo]);
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
          Matricula::find($id)->update($request->all());
        return redirect()->route('matricula.index');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
          Matricula::find($id)->delete();
        return redirect()->route('matricula.index');

    }
}