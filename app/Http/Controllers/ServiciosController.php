<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use DataTables;
use App\Est;
use App\Plan;
use App\Per;
use App\Model\Catalogos\Cur;
use App\Model\Catalogos\Hor;
use Spatie\Permission\Models\Role;
use App\Model\Catalogos\Curpla;
use App\Model\Alumnos\DtsHorGpo;

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
            ->where('curpla_idest' ,'=','1')->get();
            
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
    public function getGpos()
    {        
        $stList = DtsHorGpo::orderBy('IdEst')->get();
        return response()->json(['status'=>1,'success'=>true,'lst'=>$stList]);
    }
}

