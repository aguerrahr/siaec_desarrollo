<?php

namespace App\Http\Controllers\Catalogos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DataTables;
use Redirect,Response;
use Illuminate\Database\QueryException;
use App\Model\Catalogos\Curpla;


class PlanEscolarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //                        
        try {                        
            if ($request->ajax()) {                           
                $data = Curpla::join('est', 'curpla_idest', '=', 'IdEst')                
                ->join('cur', 'curpla_idcurso', '=', 'IdCur')
                ->join('hor', 'curpla_idhor', '=', 'IdHor')
                ->join('per', 'curpla_idper', '=', 'IdPer')
                ->join('plan', 'curpla_idplan', '=', 'Idplan')
                ->select('IdCurPlan','plan_desc', 'cur_desc','per_desc','hor_desc', 'Est_UsuDesc');

                return Datatables::of($data)
                    ->addColumn('action', function($row){                           
                           $btn = '<div style="margin: 0 auto;text-align: center;" >
                                        <a href="javascript:void(0)" data-toggle="tooltip"  data-id=' . $row->IdCurPlan . ' data-original-title="Edit" class="edit btn btn-primary edit-row">
                                            <i class="fa fa-pencil" aria-hidden="true"></i> Editar
                                        </a>
                                    </div>';                                            
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
            }                   
            return view('catalogos/planescolar');     
        } 
        catch (QueryException $e){
            $strMensaje = "";
            $error_code = $e->errorInfo[1];
            switch($error_code)
            {
                case 1062:
                    $strMensaje = '¡¡ Registro duplicado !!';
                    break;
                case 1452:
                    $strMensaje = '¡¡ Debe indicar el Estatus !!';
                    break;
                default:
                    $strMensaje = 'Código de Error = '. $e->errorInfo[1];
                    break;

            }
            return response()->json(['status'=>0,'success'=>false,'message'=>$strMensaje]);
           
        }
        catch (\Exception $e)
        {
            return 'Fue otro tipo de error = '. $e;
        }
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
        
        $curpla_idcurso = $request->cboCurso;
        $curpla_idplan  = $request->cboPlantel;
        $curpla_idper   = $request->cboPeriodo;
        $curpla_idhor   = $request->cboHorario;
        
        $curpla_idest = $request->cboEstatus;         
        try {
            // Validate the value...
            Curpla::updateOrCreate(['IdCurPlan' => $request->IdCurPlan],
                 [
                    'curpla_idcurso'    => $curpla_idcurso, 'curpla_idplan' => $curpla_idplan, 
                    'curpla_idper'      => $curpla_idper,   'curpla_idhor' => $curpla_idhor,                 
                    'curpla_idest'         => $curpla_idest,      'curpla_fechalt'=>$hoy,'curpla_fechbaj'=>$hoy]); 
            return response()->json(['status'=>1,'success'=>true,'message'=>'¡¡ Registro actualizado correctamente. !!']);
        } 
        catch (QueryException $e){
            $strMensaje = "";
            $error_code = $e->errorInfo[1];
            switch($error_code)
            {
                case 1062:
                    $strMensaje = '¡¡ Registro duplicado !!';
                    break;
                case 1452:
                    $strMensaje = '¡¡ Debe indicar el Estatus !!';
                    break;
                default:
                    $strMensaje = 'Código de Error = '. $e->errorInfo[1] . ' Descripción error:' .'<br>'.$e->errorInfo[2];
                    break;

            }
            return response()->json(['status'=>0,'success'=>false,'message'=>$strMensaje]);
           
        }
        catch (\Exception $e)
        {
            return 'Fue otro tipo de error = '. $e->errorInfo[1];
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
        //
        $row = Curpla::find($id);        
        return response()->json($row);
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
