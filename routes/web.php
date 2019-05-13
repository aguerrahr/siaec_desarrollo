<?php
use App\Plan;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
/*
Route::get('/catalogos/estatus/{id}', function ($id) {
    // con las "" se puede concatenar el la variable
    //cuando son las '' se tiene que concatenar afuera y con el .
    return "Esta es la página del catálogo Estatus con el id: {$id}";
})->where('id','\w+'); //[0-9]+

Route::get('/example/{param1}/{param2opcional?}',function($param1,$param2opcional = null){
     // con las "" se puede concatenar el la variable
    //cuando son las '' se tiene que concatenar afuera y con el .
    if ($param2opcional){
        return "Este es el parametro  {$param1} <br\>y este es el parametro opcional {$param2opcional}";
    }else{
        //Esto es incorrecto por que esta con ''
        //return 'No hay parametro opcional param2opcional sólo esta el parámetro principal param1 {$param1}';
        //Lo correcto con '' es:
        return 'No hay parametro opcional param2opcional sólo esta el parámetro principal param1: '.$param1;
    }
});
*/
/*
Route::get('/catalogos/cursos', function () {
    return 'Esta es la página del catálogo Cursos';
});
Route::get('/catalogos/periodoesc', function () {
    return 'Esta es la página del catálogo Periodo Escolar';
});
Route::get('/catalogos/horarios', function () {
    return 'Esta es la página del catálogo Horarios';
});
Route::get('/catalogos/planesc', function () {
    return 'Esta es la página del catálogo Plan Escolar';
});
Route::get('/catalogos/calendariopagos', function () {
    return 'Esta es la página del catálogo Calendario de Pagos';
});
Route::get('/catalogos/grupos', function () {
    return 'Esta es la página del catálogo Grupos';
});
Route::get('/catalogos/maerias', function () {
    return 'Esta es la página del catálogo Materias';
});
Route::get('/catalogos/costos', function () {
    return 'Esta es la página del catálogo Costos';
});
Route::get('/catalogos/tipocostos', function () {
    return 'Esta es la página de catálogo Tipos de Costos';
});
Route::get('/catalogos/profesores', function () {
    return 'Esta es la página del catálogo Profesores';
});
Route::get('/catalogos/usuarios', function () {
    return 'Esta es la página del catálogo Usuarios';
});
Route::get('/catalogos/modulos', function () {
    return 'Esta es la página del catálogo Módulos';
});
Route::get('/catalogos/roles', function () {
    return 'Esta es la página del catálogo Roles';
});
Route::get('/catalogos/accesos', function () {
    return 'Esta es la página del catálogo Accesos de usuairo a los módulos';
});
*/

/*Route::get('catalogo/planes',function(){
    //$planes=Plan::where('plan_desc','TLALPAN')->get();
    //$planes=Plan::all();
    foreach ($planes as $plan) {
        # code...
        echo "Descripción: " .$plan->plan_desc. "<br>";
    }
});*/


Route::resource('ajaxplans', 'PlanController'); //[0-9]+
Route::resource('accesos', 'Acceso\UsersController'); //[0-9]+

Route::get('stList', 'ServiciosController@getEstatus'); //[0-9]+
Route::get('stList/{id}', 'ServiciosController@getIdEstatus')->where('id', '[0-9]+');
Route::get('stList/{desc}', 'ServiciosController@getDescEstatus')->where('desc', '[A-Za-z]+');


/*Route::get('/caalogos/planteles/index', 'PlanController@index'); //[0-9]+
Route::get('/catalogos/planteles/show', 'PlanController@show'); //[0-9]+
Route::get('/catalogos/planteles/edit', 'PlanController@edit'); //[0-9]+*/

/*Route::get('/catalogos/plan',function(){
    return redirect('formularios/frm_ct_plan.php');
});*/
/*
Route::get('/catalogos/planteles','PlanController@index');
Route::get('/catalogos/planteles/muestra','PlanController@show');
Route::get('/catalogos/planteles/crear','PlanController@create');
Route::get('/catalogos/planteles/welcome','WelcomePlanController');*/