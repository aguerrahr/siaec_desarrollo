<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plan;

class ApiPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //-
        // ->addColumn('operations', '<a href="{{ URL::route( \'planteles.show\', array( \'edit\',$Idplan )) }}">Ver</a>')
        return datatables()->eloquent(
                Plan::join('est', 'plan_idest', '=', 'IdEst')
                ->select('plan.Idplan', 'plan.plan_desc', 'est.Est_UsuDesc')
            )
            ->addColumn('btn','catalogos/actionsPlan')
            ->rawColumns(['btn'])
            ->toJson();
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*date_default_timezone_set('America/Mexico_City');
        $hoy = date("Y-m-d H:i:s");*/
/*
        $planId = $request->Idplan;
        $plan   =   Plan::updateOrCreate(['Idplan' => $planId],
                ['plan_desc' => $request->plan_desc, 'plan_idest' => $request->plan_idest,'plan_fechalt'=>$hoy,'plan_fechbaj'=>$hoy]);
        return Response::json($plan);
*/

       /* $plantel = new Plan([
        'plan_desc' => $request->get('plan_desc'),
        'plan_idest'=> $request->get('plan_idest'),
        'plan_fechalt'=>$hoy
      ]);
      $plantel->save();*/

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
