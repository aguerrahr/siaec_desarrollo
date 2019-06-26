<?php

namespace App\Http\Controllers\Alumnos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Alumnos\Alumno;
use App\Model\Alumnos\DatCur;
use App\Model\Alumnos\TraAlu;
use App\Model\Alumnos\DtsGraAlu;
use App\Model\Alumnos\PagoInsAlumno;
use App\Model\Catalogos\CurPla;


use Dompdf\Dompdf;
use Dompdf\Options;
use PDF;
use App;

use DataTables;
use Redirect,Response;
use Illuminate\Database\QueryException;
use App\Services\PayUService\Exception;


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
        
        // txt_ap_paterno
        // txt_ap_materno
        // txt_nombre
        // txt_calle
        // txt_numero
        // txt_colonia
        // txt_alcaldia
        // txt_entidad
        // txt_cp
        // txt_tel
        // txt_celular
        // txt_tutor
        // txt_email
        // txt_sexo
        // txt_curp
        // fh_nac
        // txt_entnac
        // txt_secundaria
        // txt_op1
        // txt_op2
        // txt_op3
         //IdCurPlanSeleccionado
         date_default_timezone_set('America/Mexico_City');
         $hoy = date("Y-m-d H:i:s");
         
         try {
            $strMensaje = "";
            $success = false;
            // Validate the value...
            $alumnoCurp = DatCur::where('datcur_curp', '=', $request->txt_curp)->first('datcur_idalu');

            if ($alumnoCurp) {

                //alu_idalu
                $alumno = Alumno::where('IdAlu','=', $alumnoCurp->datcur_idalu)->first('alu_idalu');

                $strMensaje = 'El alumno ya cuenta con registro y su IDAlumno es: ' . $alumno->alu_idalu .chr(13).chr(10). 
                '-Si deseas volver a imprimir tus formatos para la inscripción ingresar con tu IDAlumno a la liga “Re-impresión”.'
                .chr(13).chr(10). '-Si ya fuiste alumno de la escuela y deseas ingresar a otro curso, favor de asistir al plantel”';                
            }
            else{
               
                $anio = substr($hoy,2,2);
                $curp = substr($request->txt_curp,0,6);
                $alu_idalu = $anio.$curp;                
                $alumno = new Alumno;                       
                $alumno->alu_idalu = $alu_idalu;
                $alumno->alu_nom = $request->txt_nombre;             
                $alumno->alu_apemat = $request->txt_ap_materno;
                $alumno->alu_apepat = $request->txt_ap_paterno;
                $alumno->alu_idest = 4; //Estatud pre-registro
                $alumno->alu_fechalt = $hoy;
                $alumno->alu_fechbaj = $hoy;
                
                if ($alumno->save())
                {                    
                    $curso = new DatCur;
                    $curso->datcur_idalu = $alumno->IdAlu;
                    $curso->datcur_curp = $request->txt_curp;
                    $curso->datcur_nomcalle = $request->txt_calle;
                    $curso->datcur_numcalle = $request->txt_numero;
                    $curso->datcur_colonia = $request->txt_colonia;
                    $curso->datcur_alcaldia = $request->txt_alcaldia;
                    $curso->datcur_cp = strtoupper($request->txt_cp);
                    $curso->datcur_entidadfed = $request->txt_entidad;
                    $curso->datcur_telcasa = $request->txt_tel;
                    $curso->datcur_celular = $request->txt_celular;
                    $curso->datcur_teltutor = $request->txt_tutor;
                    $curso->datcur_email = $request->txt_email;
                    $curso->datcur_email_pt = $request->txt_email_pt;
                    $curso->datcur_sexo = $request->cboSexo;
                    $curso->datcur_fechnac = $request->fh_nac;
                    $curso->datcur_entnac = $request->txt_entnac;
                    $curso->datcur_secupro = $request->txt_secundaria;
                    $curso->datcur_tpescuela= $request->txt_secundaria_tp;
                    $curso->datcur_escopc1 = $request->txt_op1;
                    $curso->darcur_escopc2 = $request->txt_op2;
                    $curso->datcur_escopc3 = $request->txt_op3;
                    $curso->datcur_obs = $request->cboObs;                    
                    $curso->datcur_folescban = $alumno->IdAlu;
                    if ($curso->save())
                    {   
                        $tryalu = new TraAlu;                        
                        $tryalu->try_idcurplan = $request->IdCurPlanSeleccionado;
                        $tryalu->try_idalu = $alumno->IdAlu;                        
                        $tryalu->try_cal = 0;
                        $tryalu->try_est = 4;
                        $tryalu->try_fechalt = $hoy;
                        $tryalu->try_fechbaj = $hoy;
                        if ($tryalu->save())
                        {
                            $strMensaje = "Alumno y Curso correctamente";  
                            $success = true;    
                        }
                        
                    }
                    else{
                        $strMensaje = "¡¡ Error al guardar Alumno y Curso";  
                    }
                }
                else{
                    $strMensaje = "¡¡ Error al guardar Alumno";  
                }
            

            }

            return response()->json(['status'=>1,'success'=>$success,'message'=>$strMensaje,'IdAlu'=>$alumno->IdAlu]);
           
        } 
        catch (QueryException $e){
            $strMensaje = "";
            $error_code = $e->errorInfo[1];
            switch($error_code)
            {
                case 1062:
                    $strMensaje = '¡¡ El Alumno ya se encuentra registrado !!';
                    break;
                case 1452:
                    $strMensaje = '¡¡ Debe indicar el Estatus !! '. $e->getMessage();
                    break;
                case 1452:
                    $strMensaje = '¡¡ Tamaño de campo excedido !!';
                    break;
                default:
                    $strMensaje = 'Código de Error = '. $e->errorInfo[1];
                    break;

            }
            return response()->json(['status'=>0,'success'=>false,'message'=>$strMensaje]);
           
        }
        catch (\Exception $err)
        {
            $strMensaje = $err->getMessage();
            return response()->json(['status'=>0,'success'=>false,'message'=>$strMensaje]);
        }
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
        $dat_cur = DatCur::all()->where('datcur_curp','=',$id);        
        return response()->json(['status'=>1,'success'=>true,'message'=>$dat_cur->count()]);
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
    public function PdfPreReg($idAlumno)
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
        //DatCur::where('datcur_curp', $request->txt_curp)->first('datcur_idalu');
        $dtsalu = DtsGraAlu::where('IdAlu','=',$idAlumno)->first();
        $pdf = App::make('dompdf.wrapper');
        $pdf->getDomPDF()->set_option("enable_php", true);
        $pdf->loadView('alumnos/preregcurso/preregpdf',compact('dtsalu'));
        $pdf ->setPaper('Letter');
        $pdf->output();
        return $pdf ->stream();
        
        //return view('alumnos/preregcurso/preregpdf');
    }
    public function PdfFicPago($idAlumno)
    {
               
        $dtsalu = PagoInsAlumno::where('IdAlu','=',$idAlumno)->first();
        $pdf = App::make('dompdf.wrapper');
        $pdf->getDomPDF()->set_option("enable_php", true);
        $pdf->loadView('alumnos/preregcurso/fichapagopdf',compact('dtsalu'));
        //$pdf ->setPaper('L','landscape');}
        $pdf ->setPaper('Letter','landscape');
        $pdf->output();
        return $pdf ->stream();
        
        //return view('alumnos/preregcurso/preregpdf');
    }
}
