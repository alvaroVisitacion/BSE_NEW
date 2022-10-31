<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PrnController extends Controller
{
  public function Imprimematriculas()
{
  $matricula=DB::table('matricula as m')->join(
            'periodo as pe','m.idperiodo','=','pe.idperiodo')->join(
            'alumno as al','m.idalumno','=','al.idalumno')->join(
            'seccion as se','m.idseccion','=','se.idseccion')->join(
            'grado as g','m.idgrado','=','g.idgrado')->join(
            'nivel as ni','m.idnivel','=','ni.idnivel')->select(
            'm.idmatricula','m.admin','m.fechaactual','m.codmatricula','pe.año','al.codalumno','al.apellidopat','al.apellidomat','al.nombreal','se.letra','g.grado','ni.nombreni')->get();

$pdf = \PDF::loadView('Matricula.rpmatriculas',compact('matricula'));        
return $pdf->stream('rpmatricula.pdf');
}}
