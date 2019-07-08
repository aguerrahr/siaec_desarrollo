<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Support\Str;
use App\Services\PayUService\Exception;

use DataTables;
use DB;
use App\Est;
use App\Plan;
use App\Per;
use App\Model\Catalogos\Cur;
use App\Model\Catalogos\Hor;
use Spatie\Permission\Models\Role;
use App\Model\Catalogos\Curpla;
use App\Model\Alumnos\DtsHorGpo;
use App\Model\Catalogos\Ban;
use App\Model\Catalogos\Cal;
use App\Model\Catalogos\Suc;


class ServiciosController extends Controller
{
    //
    public function getEstatus()
    {        
        $stList = Est::orderBy('IdEst')->get();
        return response()->json(['status'=>1,'success'=>true,'lst'=>$stList]);
    }
    public function getIdEstatus($id)
    {
        $stIdDesc = Est::where('IdEst', '=', $id)->firstOrFail();
       
        return $stIdDesc;
    }
    public function getDescEstatus($desc)
    {
        $stDesc = Est::where('Est_UsuDesc', '=', $desc)->firstOrFail();       
        return $stDesc;        
    }
    //Roles para accessos
    public function getRoles()
    {        
        //$stList = Role::all()->pluck('name','id');
        //$ctList = Role::all();
        $ctList = Role::select('id', 'name')->get();
        return response()->json(['status'=>1,'success'=>true,'lst'=>$ctList]);
    }

    public function  getPlanteles()
    {
        $rowList = Plan::select('Idplan','plan_desc')->where('plan_idest','=','1')->get();
        return response()->json(['status'=>1,'success'=>true,'lst'=>$rowList]);
    }
    public function  getCursos()
    {
        $rowList = Cur::select('IdCur','cur_desc')->where('cur_idest','=','1')->get();
        return response()->json(['status'=>1,'success'=>true,'lst'=>$rowList]);
    }
    public function  getPeriodo()
    {
        $rowList = Per::select('IdPer','per_desc')->where('per_idest','=','1')->get();
        return response()->json(['status'=>1,'success'=>true,'lst'=>$rowList]);
    }
    public function  getHorarios()
    {
        $rowList = Hor::select('IdHor','hor_desc')->where('hor_idest','=','1')->get();
        return response()->json(['status'=>1,'success'=>true,'lst'=>$rowList]);
    }
    public function getCursosList()
    {
        try {                                                            
            $data = Curpla::join('est', 'curpla_idest', '=', 'IdEst')                
            ->join('cur', 'curpla_idcurso', '=', 'IdCur')
            ->join('hor', 'curpla_idhor', '=', 'IdHor')
            ->join('per', 'curpla_idper', '=', 'IdPer')
            ->join('plan', 'curpla_idplan', '=', 'Idplan')
            ->select('IdCurPlan','cur_desc','plan_desc','per_desc','hor_desc', 'Est_UsuDesc')
            ->where('curpla_idest' ,'=','1')
            ->where('curpla_idcurso','<','3')->get();
            
            $listaCursos = Datatables::of($data)
                ->addColumn('radiobutton', function($row){                           
                        $btn = '<input type="radio" id="RbIdCurPlan_' . $row->IdCurPlan . '" name="selecourse"  value="'. $row->IdCurPlan .'">';                                            
                        return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);                                           
            return response()->json(['status'=>1,'success'=>false,'message'=>'true','data'=>$listaCursos]);            
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getIdGposHorAlu(Request $request)
    {   
        try
        {
            $strMensaje = "";
            $success = false;
            $Idcurso = DB::select('call sp_asigna_alumno_gpo(?,?,?,?,?)',array($request->idCurPlan,$request->idHor,$request->idAlumno,$request->gpo_area,$request->cur_tipcur));                    
            $strMensaje = "¡¡ Grupo asignado !!";      
            $success = true;      
            return response()->json(['status'=>1,'success'=>$success,'message'=>$strMensaje,'idGpo'=>$Idcurso[0]->_gpo_nombre]);

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
                    //FK_GPOALU_GRUPO
                    $strMensajeError = $e->getMessage();

                    $result = Str::contains($strMensajeError, 'FK_GPOALU_GRUPO');

                    if($result){
                        $strMensaje = "¡¡ No hay grupo para asignar !!";
                    }
                    else{
                        $strMensaje = '¡¡ Error al asignar el grupo, consulte a su administrador !! ' . 'Error: ' . $strMensajeError;
                    }                    
                    break;
                case 1452:
                    $strMensaje = '¡¡ Tamaño de campo excedido !!';
                    break;
                default:
                    $strMensaje = 'Código de Error = '. $e->errorInfo[1];
                    break;

            }
            return response()->json(['status'=>0,'success'=>false,'message'=>$strMensaje,'idGpo'=>null]);
        
        }
        catch (\Exception $err)
        {
            $strMensaje = $err->getMessage();
            return response()->json(['status'=>0,'success'=>false,'message'=>$strMensaje,'idGpo'=>null]);
        }        
    }

    public function getCatBancos()
    {
        $stList = Ban::orderBy('ban_nomban')->get();
        //istinct()->get(['ban_nomban']);
        //select('IdBan','ban_nomban')->groupBy('ban_nomban')->orderBy('ban_nomban')->get();
        //$stList = Ban::query()->distinct()->get();
        //$stList = Ban::select('column1', 'column2', 'column3')->distinct()->get();
        return response()->json(['status'=>1,'success'=>true,'lst'=>$stList]);
    }
    public function getCalendario()
    {        
        $rowList = cal::select("IdCal"
        ,DB::raw("CONCAT(cal_idanio,'-',cal_idmes,'-',cal_idfase) as full_cal"))
        ->where('cal_idest','=','1')
        ->get();
        return response()->json(['status'=>1,'success'=>true,'lst'=>$rowList]);
    }
    public function  getSucursal($idBan)
    {
        $rowList = Suc::select('IdSuc','suc_desc')
                ->where('suc_idban','=',$idBan)
                ->where('suc_est','=','1')->get();        
        return response()->json(['status'=>1,'success'=>true,'lst'=>$rowList]);
    }
}