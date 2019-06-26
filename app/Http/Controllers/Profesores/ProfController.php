<?php

namespace App\Http\Controllers\Profesores;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DataTables;
use Redirect,Response;
use Illuminate\Database\QueryException;
use App\Model\Profesores\Prof;



class ProfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        try {                        
            if ($request->ajax()) {                           
                $data = Prof::join('est', 'prof_idest', '=', 'IdEst')
                ->select('IdProf','prof_idprof','prof_nom','prof_apepat','prof_apemat','prof_pass','prof_mail','Est_UsuDesc');    
                return Datatables::of($data)
                    ->addColumn('action', function($row){
                            $btn = '<div style="margin: 0 auto;text-align: center;" >
                                        <a href="javascript:void(0)" data-toggle="tooltip"  data-id=' . $row->IdProf . ' data-original-title="Edit" class="edit btn btn-primary edit-row">
                                            <i class="fa fa-pencil" aria-hidden="true"></i> Editar
                                        </a>
                                    </div>';                                            
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);                    
            }                   
            return view('profesores/profesores');            
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
                    //$strMensaje = 'Código de Error = '. $e->errorInfo[1] . ' ' . $e->getMessage();
                    $strMensaje = 'Código de Error = '. $e->errorInfo[1] . ' Descripción error:' .'<br>'.$e->errorInfo[2];
                    break;

            }
            return response()->json(['status'=>0,'success'=>false,'message'=>$strMensaje]);
           
        }
        catch (\Exception $err)
        {
            $strMensaje = $err->getMessage();
            return response()->json(['status'=>0,'success'=>false,'message'=>$strMensaje]);
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
        //        
        date_default_timezone_set('America/Mexico_City');
        $hoy = date("Y-m-d H:i:s");
        $_prof_idest = $request->cboEstatus;         
        try {
            // Validate the value...
            Prof::updateOrCreate(['IdProf' => $request->IdProf],
                ['prof_idprof' => $request->prof_idprof,
                    'prof_nom' => $prof_nom,
                    'prof_apepat' => $prof_apepat,
                    'prof_apemat' => $prof_apemat,
                    'prof_pass' => $prof_pass,
                    'prof_mail' => $prof_mail,
                    'prof_idest' => $_prof_idest,
                    'prof_fechalt'=>$hoy,
                    'prof_fechbaj'=>$hoy]); 
           return response()->json(['status'=>1,'success'=>true,'message'=>'¡¡ Registro actualizado correctamente. !!']);
          
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
                   $strMensaje = 'Código de Error = '. $e->errorInfo[1] . ' Descripción error:' .'<br>'.$e->errorInfo[2];
                   break;
           }
           return response()->json(['status'=>0,'success'=>false,'message'=>$strMensaje]);
          
       }
       catch (\Exception $err)
       {            
           //return 'Código de Error = '. $err->errorInfo[1] . '<br> Drescripción = ' . $err->getMessage();
           $strMensaje = $err->getMessage();
           return response()->json(['status'=>0,'success'=>false,'message'=>$strMensaje]);
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
        //
        $data = Prof::find($id);        
        return response()->json($data);
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
