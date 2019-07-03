<?php

namespace App\Http\Controllers\Alumnos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Alumnos\Alumno;
use App\Model\Alumnos\DatCur;

use DataTables;
use Redirect,Response;
use Illuminate\Database\QueryException;
use App\Services\PayUService\Exception;



class PreRegReimpCursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('alumnos/preregcurso/preregcurso_reimp');
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
        date_default_timezone_set('America/Mexico_City');
        $hoy = date("Y-m-d H:i:s");
        try {
            $strMensaje = "";
            $success = false;
            $curp = substr($request->txt_curp,0,9);

            Alumno::updateOrCreate(['IdAlu' => $request->IdAlu],
                 [                    
                    'alu_idalu'     => $curp,
                    'alu_nom'       => strtoupper($request->txt_nombre),
                    'alu_apemat'    => strtoupper($request->txt_ap_materno),
                    'alu_apepat'    => strtoupper($request->txt_ap_paterno),
                    'alu_idest'     => 4,                                   
                    'alu_fechalt'   => $hoy,
                    'alu_fechbaj'   => $hoy
                 ]
            ); 

                 
            DatCur::updateOrCreate(['datcur_idalu' => $request->IdAlu],
                 [                            
                    'datcur_curp' => strtoupper($request->txt_curp),
                    'datcur_nomcalle' => strtoupper($request->txt_calle),
                    'datcur_numcalle' => $request->txt_numero,
                    'datcur_colonia' => strtoupper($request->txt_colonia),
                    'datcur_alcaldia' => $request->txt_alcaldia,
                    'datcur_cp' => strtoupper($request->txt_cp),
                    'datcur_entidadfed' => strtoupper($request->txt_entidad),
                    'datcur_telcasa' => $request->txt_tel,
                    'datcur_celular' => $request->txt_celular,
                    'datcur_teltutor' => $request->txt_tutor,
                    'datcur_email' => $request->txt_email,
                    'datcur_email_pt' => $request->txt_email_pt,
                    'datcur_sexo' => $request->cboSexo,
                    'datcur_fechnac' => $request->fh_nac,
                    'datcur_entnac' => $request->txt_entnac,
                    'datcur_secupro' => strtoupper($request->txt_secundaria),
                    'datcur_tpescuela'=> $request->txt_secundaria_tp,
                    'datcur_nomesc'=> "",
                    'datcur_numesc'=> $request->txt_secundaria_num,
                    'datcur_escopc1' => strtoupper($request->txt_op1),
                    'darcur_escopc2' => strtoupper($request->txt_op2),
                    'datcur_escopc3' => strtoupper($request->txt_op3),
                    'datcur_obs' => $request->cboObs,                    
                    'datcur_folescban' => $request->IdAlu
                ]
            ); 
            
            $success = true;
            $strMensaje = "¡¡ Datos actualizados corrrectamente !!";
            return response()->json(['status'=>1,'success'=>$success,'message'=>$strMensaje]);
           
        } 
        catch (QueryException $e){
            $strMensaje = "";
            $error_code = $e->errorInfo[1];
            switch($error_code)
            {
                case 1062:
                    $strMensaje = '¡¡ El Alumno ya se encuentra registrado !! '. $e->getMessage();
                    break;
                case 1452:
                    $strMensaje = '¡¡ Debe indicar el Estatus !! '. $e->getMessage();
                    break;
                case 1452:
                    $strMensaje = '¡¡ Tamaño de campo excedido !!';
                    break;
                default:
                    $strMensaje = 'Código de Error = '. $e->errorInfo[1] . ' - Desc: ' .  $e->getMessage();
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
}
