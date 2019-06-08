<?php

namespace App\Http\Controllers\Alumnos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Alumnos\Alumno;
use App\Model\Alumnos\DatCur;

use Dompdf\Dompdf;
use Dompdf\Options;
use PDF;
use App;

class PreRegCursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('alumnos/preregcurso/preregcurso');
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
    public function PdfPreReg($id)
    {
        // se puede usar
        //$pdf = App::make('dompdf.wrapper');
        // o tanbién se puede usar en vez de la línea anterior
            //$pdf = resolve('dompdf.wrapper');
        //se puede usuar
            //$pdf->loadHTML('<h1>Test</h1>');
        // o usar el facade
            // $pdf = PDF::loadHTML('<h1 style = "color:red">Test</h1>');
        //Mandar al navegador el PDF
            //return $pdf->stream();
        //Bajar el PDF
        //return $pdf->download();
    
        //$options = new Options();
        //$options->set('defaultFont', 'Courier');
        //$pdf = new Dompdf($options);

        // $dompdf->set_option('isHtml5ParserEnabled', true);
        // $canvas = $dompdf->get_canvas();
        // $canvas->page_script("
        //     $pdf->line(10,730,800,730,array(0,0,0),1);
        // ");
    
        // $pdf  = PDF::loadView('preregcurso/preregpdf');
        // $pdf ->setPaper('Letter','landscape');

        //$dom_pdf = $pdf->getDomPDF();

        //$canvas = $dom_pdf ->get_canvas();
        
        //$canvas->page_text(0, 0, "Page {PAGE_NUM} of {PAGE_COUNT}", null, 10, array(0, 0, 0));
        //$canvas->line(0,100,800,100,array(0,0,0),1);
        
        // $canvas->page_script("
        //     $pdf->line(10,730,800,730,array(0,0,0),1);
        // ");
        
        $pdf = App::make('dompdf.wrapper');
        $pdf->getDomPDF()->set_option("enable_php", true);
        $pdf->loadView('alumnos/preregcurso/preregpdf');
        $pdf ->setPaper('L');
        $pdf->output();
        return $pdf ->stream();
        
        //return view('alumnos/preregcurso/preregpdf');
    }
    public function PdfFicPago($id)
    {
               
        $pdf = App::make('dompdf.wrapper');
        $pdf->getDomPDF()->set_option("enable_php", true);
        $pdf->loadView('alumnos/preregcurso/fichapagopdf');
        //$pdf ->setPaper('L','landscape');}
        $pdf ->setPaper('L','landscape');
        $pdf->output();
        return $pdf ->stream();
        
        //return view('alumnos/preregcurso/preregpdf');
    }
}
