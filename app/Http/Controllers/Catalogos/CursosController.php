<?php

namespace App\Http\Controllers\Catalogos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DataTables;
use Redirect,Response;
use Illuminate\Database\QueryException;

use App\Model\Catalogos\Cur;


class CursosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        ///
        try {                        
            if ($request->ajax()) {                           
                $data = Cur::join('est', 'cur_idest', '=', 'IdEst')
                ->select('IdCur','cur_desc','Est_UsuDesc');    
                return Datatables::of($data)
                    ->addColumn('action', function($row){
                            $btn = '<div style="margin: 0 auto;text-align: center;" >
                                        <a href="javascript:void(0)" data-toggle="tooltip"  data-id=' . $row->IdCur . ' data-original-title="Edit" class="edit btn btn-primary edit-row">
                                            <i class="fa fa-pencil" aria-hidden="true"></i> Editar
                                        </a>
                                    </div>';                                            
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
            }                   
            return view('catalogos/cursos');            
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
         $cur_idest = $request->cboEstatus;         
         try {
            // Validate the value...
            Cur::updateOrCreate(['IdCur' => $request->IdCur],
                 ['cur_desc' => $request->cur_desc, 'cur_idest' => $cur_idest,'cur_fechalt'=>$hoy,'cur_fechbaj'=>$hoy]); 
            return response()->json(['status'=>1,'success'=>true,'message'=>'¡¡ Registro actualizado correctamente. !!']);
           
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
        $cur = Cur::find($id);        
        return response()->json($cur);
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
