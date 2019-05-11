<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Est;


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
}

