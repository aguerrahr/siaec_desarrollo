<?php

namespace App\Http\Controllers\Pagos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DataTables;
use Redirect,Response;
use Illuminate\Database\QueryException;
use App\Model\Pagos\Pag;


class PagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
                
        $IdPag          =   $request->IdPag;
        $pag_idtraalu   =   $request->pag_idtraalu;
        $pag_idcos      =   $request->pag_idcos;
        $pag_idcal      =   $request->pag_idcal;
        $pag_idsuc      =   $request->pag_idsuc;        
        $pag_folio      =   $request->pag_folio;
        $pag_folaut     =   $request->pag_folaut;
        $pag_fechpag    =   $request->pag_fechpag;
        $pag_fechent    =   $request->pag_fechent;
        $pag_fechalt    =   $hoy;
        $pag_fechbaj    =   $hoy;

        try {
            // Validate the value...
            Pag::updateOrCreate(['IdPag' => $IdPag],
                 [
                    'pag_idtraalu'  =>  $pag_idtraalu,  'pag_idcos'     =>  $pag_idcos, 
                    'pag_idcal'     =>  $pag_idcal,     'pag_idsuc'     =>  $pag_idsuc,                 
                    'pag_folio'     =>  $pag_folio,     'pag_folaut'    =>  $pag_folaut,       
                    'pag_fechpag'   =>  $pag_fechpag,   'pag_fechent'   =>  $pag_fechent,  
                    'pag_fechalt'   =>  $pag_fechalt,   'pag_fechbaj'   =>  $pag_fechbaj
                    ]); 

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
