<?php

namespace App\Http\Controllers\Catalogos;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DataTables;
use Redirect,Response;
use Illuminate\Database\QueryException;
use App\Per;

class PeriodoEscolarController extends Controller
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
                $data = Per::join('est', 'per_idest', '=', 'IdEst')
                ->select('per.IdPer', 'per.per_idper','per.per_desc', 'est.Est_UsuDesc');

                return Datatables::of($data)
                    ->addColumn('action', function($row){
                           //$btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->IdPer.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editProduct">Editar</a>';
                           $btn = '<div style="margin: 0 auto;text-align: center;" >
                                        <a href="javascript:void(0)" data-toggle="tooltip"  data-id=' . $row->IdPer . ' data-original-title="Edit" class="edit btn btn-primary edit-row">
                                            <i class="fa fa-pencil" aria-hidden="true"></i> Editar
                                        </a>
                                    </div>';                                            
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
            }                   
            return view('catalogos/periodoesc/periodoesc');     
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
         $per_idest = $request->cboEstatus;         
         try {
            // Validate the value...
            Per::updateOrCreate(['IdPer' => $request->IdPer],
                 ['per_idper' => $request->per_idper,'per_desc' => $request->per_desc, 'per_idest' => $per_idest,'per_fechalt'=>$hoy,'per_fechbaj'=>$hoy]); 
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
        //
        $per = Per::find($id);
        
        return response()->json($per);
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
