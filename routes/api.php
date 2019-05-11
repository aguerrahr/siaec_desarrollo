<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/
//Route::apiResource('plan','PlanController');
/*Route::get('plan',function(){
	$result = Plan::join('est', 'plan_idest', '=', 'IdEst')
    ->select('Idplan', 'plan_desc', 'Est_UsuDesc')
    ->getQuery()
    ->get();

	return datatables()->eloquent(
			Plan::join('est', 'plan_idest', '=', 'IdEst')
		    ->select('Idplan', 'plan_desc', 'Est_UsuDesc')
			)
			->addColumn('btn','catalogos\actionsPlan')
			->rawColumns(['btn'])
			->toJson();
});
*/
Route::apiResource('plan','ApiPlanController');


