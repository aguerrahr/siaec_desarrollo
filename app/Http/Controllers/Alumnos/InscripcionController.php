<?php

namespace App\Http\Controllers\Alumnos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Alumnos\DtsGraAlu;
use App\Model\Alumnos\PagoInsAlumno;

use DataTables;
use Redirect,Response;
use Illuminate\Database\QueryException;
use App\Services\PayUService\Exception;



class InscripcionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('alumnos/inscripcion/inscripcion');
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
        try{
            $strMensaje = "";
            $success = false;
            $dtsalu = DtsGraAlu::where('alu_idalu','=',$id)
                                ->where('try_est',4)->first();
            $idAlumno = $dtsalu->IdAlu;
            $dtsPago = PagoInsAlumno::where('IdAlu','=',$idAlumno)->first();
            $success = true;
            return response()->json(['status'=>1,'success'=>$success,'message'=>$strMensaje,'data'=>$dtsalu,'dataPago'=>$dtsPago]);
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
                    $strMensaje = '¡¡ Debe indicar el Estatus !!';
                    break;
                case 1452:
                    $strMensaje = '¡¡ Tamaño de campo excedido !!';
                    break;
                default:
                    $strMensaje = 'Código de Error = '. $e->errorInfo[1];
                    break;

            }
            return response()->json(['status'=>0,'success'=>false,'message'=>$strMensaje,'data'=>null]);
           
        }
        catch (\Exception $err)
        {
            $strMensaje = $err->getMessage();
            return response()->json(['status'=>0,'success'=>false,'message'=>$strMensaje,'data'=>null]);
        }

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
