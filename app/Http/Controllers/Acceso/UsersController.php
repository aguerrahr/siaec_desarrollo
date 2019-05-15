<?php

namespace App\Http\Controllers\Acceso;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use DataTables;
use Redirect,Response;
use Illuminate\Database\QueryException;
use Spatie\Permission\Models\Role;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        try {
            if ($request->ajax()) {
                
                return datatables()->eloquent(
                    User::join('est', 'users.IdEst', '=', 'est.IdEst')
                    ->join('model_has_roles', 'model_id', '=', 'users.id')
                    ->join('roles', 'role_id', '=', 'roles.id')
                    ->select('users.id','users.name as nombre', 'users.email', 'est.Est_UsuDesc','roles.name as rol')
                )
                ->addColumn('btn','acceso\actionsAcceso')
                ->rawColumns(['btn'])
                ->toJson();
                
            }            
            
            return view('acceso/user');
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
            return 'Fue otro tipo de error = '. $e->errorInfo[1];
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
        // date_default_timezone_set('America/Mexico_City');
        // $hoy = date("Y-m-d H:i:s");
         $idest = $request->cboEstatus;         
         $password = encrypt($request->password);
        
        try {
            
            $usuario = User::updateOrCreate(['id' => $request->id],
                  ['name' => $request->name, 'email' => $request->email, 'IdEst' => $idest,'password'=>$password]); 

            
            $usuario->assignRole($request->cboRol);
            
            
            return response()->json(['status'=>1,'success'=>true,'message'=>'¡¡ Registro creado correctamente. !!']);
           
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
         $usuario = User::find($id);         
         $rol = $usuario->roles->first()->id;

         //dd($usuario->roles);
        // return response()->json($usuario);
        //,'rol'=>$usuario->roles
        //'usuario'=>$usuario
        return response()->json(['usuario'=>$usuario,'rol'=>$rol]);
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
