<?php

namespace App\Http\Controllers;

use App\Plan;
use Illuminate\Http\Request;
use DataTables;
use Redirect,Response;
use Illuminate\Database\QueryException;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        /* if ($request->ajax()) {
            $data = Plan::join('est', 'plan_idest', '=', 'IdEst')
                ->select('plan.Idplan', 'plan.plan_desc', 'est.Est_UsuDesc');
            return Datatables::of($data)
                    ->addColumn('action', function($row){
                           $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->Idplan.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editProduct">Editar</a>';
                           $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->Idplan.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct">Borrar</a>';
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('catalogos/plan',compact('plan'));*/
        return  view('catalogos/plan');
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
         $plan_idest = $request->cboEstatus;         
         try {
            // Validate the value...
            Plan::updateOrCreate(['Idplan' => $request->Idplan],
                 ['plan_desc' => $request->plan_desc, 'plan_idest' => $plan_idest,'plan_fechalt'=>$hoy,'plan_fechbaj'=>$hoy]); 

            return response()->json(['status'=>1,'success'=>true,'message'=>'¡¡ Plantel creado correctamente. !!']);
           
        } 
        catch (QueryException $e){
            $strMensaje = "";
            $error_code = $e->errorInfo[1];
            switch($error_code)
            {
                case 1062:
                    $strMensaje = '¡¡ El plantel ya se encuentra registrado !!';
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
            return 'Fue otro tipo de error = '. $e->errorInfo[1];
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function show(Plan $plan)
    {
        //
        return ('Página Ver de Planteles con el evento show de PlanControler');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\$id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //       
        $plan = Plan::find($id);
        
        return response()->json($plan);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plan $plan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plan $plan)
    {
        //
    }
}
