<?php

namespace App\Http\Controllers\Alumnos;

use App\Model\Alumnos\DtsGraAlu;


use Dompdf\Dompdf;
use Dompdf\Options;
use PDF;
use App;

use DataTables;
use Redirect,Response;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CredencialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('/alumnos/credencial/credencial_imp');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    public function PdfCredencial($idAlumno)
    {        
        $dtsalu = DtsGraAlu::where('IdAlu','=',$idAlumno)->first();
        $pdf = App::make('dompdf.wrapper');
        $pdf->getDomPDF()->set_option("enable_php", true);
        $pdf->loadView('alumnos/credencial/credencial',compact('dtsalu'));        
        //$customPaper = array(0,0,360,360);
        //$customPaper = array(0,0,567.00,283.80);
        //$pdf ->setPaper($customPaper);
        $pdf->output();
        return $pdf ->stream();
        
        //return view('alumnos/preregcurso/preregpdf');
    }
}
