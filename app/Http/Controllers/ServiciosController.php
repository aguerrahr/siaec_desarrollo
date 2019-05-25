<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Est;
use App\Plan;
use App\Per;
use App\Model\Catalogos\Cur;
use App\Model\Catalogos\Hor;
use Spatie\Permission\Models\Role;

class ServiciosController extends Controller
{
    //
    public function getEstatus()
    {        
        $stList = Est::all();
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

}

