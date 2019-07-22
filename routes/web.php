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
    return view('auth.login');
});

// Rutas Recusrsos
//-------------------------------------------------------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------------------------------------------------------
//-------------------------------------------------------- Rutas Recursos--------------------------------------------------------------------
//-------------------------------------------------------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------------------------------------------------------
Route::resource('catalogos/estatus', 'Catalogos\EstatusController'); //[0-9]+
Route::resource('catalogos/planteles', 'PlanController'); //[0-9]+
Route::resource('catalogos/cursos', 'Catalogos\CursosController'); //[0-9]+
Route::resource('catalogos/periodoescolar', 'Catalogos\PeriodoEscolarController'); //[0-9]+
Route::resource('catalogos/horarios', 'Catalogos\HorariosController'); //[0-9]+
Route::resource('catalogos/planescolar', 'Catalogos\PlanEscolarController'); //[0-9]+
Route::resource('catalogos/calendario', 'Catalogos\CalController'); //[0-9]+
Route::resource('catalogos/materias', 'Catalogos\MatController'); //[0-9]+
Route::resource('accesos', 'Acceso\UsersController'); //[0-9]+

Route::resource('alumnos/preregistrocursos','Alumnos\PreRegCursoController');
Route::resource('alumnos/preregreimp','Alumnos\PreRegReimpCursoController');
Route::resource('alumnos/credencial','Alumnos\CredencialController');

Route::resource('alumnos/inscripciones','Alumnos\InscripcionController');
Route::resource('pagos/pago','Pagos\PagoController');
Route::resource('profesores', 'Profesores\ProfController'); //[0-9]+



//-------------------------------------------------------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------------------------------------------------------
//-------------------------------------------------------- Rutas GET ------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------------------------------------------------------

Route::get('stList', 'ServiciosController@getEstatus'); //[0-9]+
Route::get('stList/{id}', 'ServiciosController@getIdEstatus')->where('id', '[0-9]+');
Route::get('stList/{desc}', 'ServiciosController@getDescEstatus')->where('desc', '[A-Za-z]+');
Route::get('rolesList', 'ServiciosController@getRoles'); //[0-9]+
Route::get('plantelList','ServiciosController@getPlanteles');
Route::get('cursoList','ServiciosController@getCursos');
Route::get('periodoList','ServiciosController@getPeriodo');
Route::get('horarioList','ServiciosController@getHorarios');
Route::get('bancosList','ServiciosController@getCatBancos');
Route::get('calList','ServiciosController@getCalendario');
Route::get('sucList/{idBan}','ServiciosController@getSucursal');
Route::get('alumno/dtsGenerales','ServiciosController@getHorarios');
Route::get('areasList/{gpoIdcurplan}', 'Catalogos\GpoController@getAreas');

//------------------------------------------------------- PreRegistro ---------------------------------------------------------

Route::get('alumno/preregcurso/preregpdf/{idAlumno}', 'Alumnos\PreRegCursoController@PdfPreReg');
Route::get('alumno/preregcurso/fichapagopdf/{idAlumno}', 'Alumnos\PreRegCursoController@PdfFicPago');

//------------------------------------------------------- Plan Escolar ---------------------------------------------------------

Route::get('planescolar/lista', 'ServiciosController@getCursosList'); //[0-9]+
Route::post('servicios/getIdGposHorAlu','ServiciosController@getIdGposHorAlu');

//------------------------------------------------------- Credecniales ---------------------------------------------------------

Route::get('alumno/credencial/credencialpdf/{idAlumno}', 'Alumnos\CredencialController@PdfCredencial');

//--------------------------------------------------Menu Inscripciones ---------------------------------------------------------

Route::get('/inscripcion',function(){
    return view('menuins');
});


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
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
