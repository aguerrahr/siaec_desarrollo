
@extends("layouts.templateglobal")
@section('headres')
@endsection
@section('cabeceras')
    <!--cabeceras-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('/css/w3.css')}}">    
@endsection
@section('estilos')
    <style>
        .card {
            margin: 0 auto; /* Added */
            float: none; /* Added */
            margin-bottom: 10px; /* Added */
        }
        h1	{
            color: #000000;
            font-family: arial, sans-serif;
            font-size: 30px;
            font-weight: bold;
            margin-top: 0px;
            margin-bottom: 1px;
        }
        h2	{
            color: #909090;
            font-family: arial, sans-serif;
            font-size: 25px;
            font-weight: bold;
            margin-top: 5px;
            margin-bottom: 5px;
        }
        h3	{
            color: #2196F3;
            font-family: arial, sans-serif;
            font-size: 20px;
            font-weight: bold;
            margin-top: 5px;
            margin-bottom: 5px;
        }
        td{
            text-align:center;
        }
        .pointer { cursor: pointer; }
        span:hover {cursor: hand; cursor: pointer;}        
        .input-group.md-form.form-sm.form-1 input{
            border: 1px solid #bdbdbd;
            border-top-right-radius: 0.25rem;
            border-bottom-right-radius: 0.25rem;
        }
        .input-group.md-form.form-sm.form-2 input {
            border: 1px solid #bdbdbd;
            border-top-left-radius: 0.25rem;
            border-bottom-left-radius: 0.25rem;
        }
        .input-group.md-form.form-sm.form-2 input.red-border {
            border: 1px solid #ef9a9a;
        }
        .input-group.md-form.form-sm.form-2 input.lime-border {
            border: 1px solid #cddc39;
        }
        .input-group.md-form.form-sm.form-2 input.amber-border {
            border: 1px solid #ffca28;
        }
        .input-group.md-form.form-sm.form-2 input.blue-border {
            border: 1px solid #2196F3;
        }
        
    </style>        
@endsection

@section('menu')
	
@endsection
@section('encabezado')		
	<div class="row justify-content-center">
		<h1>Inscripciones</h1>	
    </div>    
	<hr>
@endsection

@section('cuerpo')	            
        <div class="w3-container w3-yellow"> 
            <h2 id="Titulo">Control Escolar Accesos</h2>
                {{-- <nav class="navbar navbar-expand-lg navbar-light nav-bk"> --}}
                {{-- <a class="navbar-brand" href="{{ url("/")}}">
                    <img src="/images/logo-coapa-azul.png" height="45" width="180">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="siaec-navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>				                   --}}
            
        </div>
        <div id="card_buscar" class="card border-black mb-2 text-center">
            <div style="font-weight: bold;color:#000" class="card-header">
                Ingrese el Id del alumno                
            </div>
            <div class="card-body">                
                {{-- <p class="card-text">IdAlumno: </p> --}}
                <div class="input-group md-form form-sm form-2 pl-0">
                    <input class="form-control my-0 py-1 blue-border" type="text" id="txt_idalumno" placeholder="Indique el Id del Alumno" aria-label="Búsqueda">
                    <div style="cursor: hand;" class="input-group-append">
                        <span style="background-color: #2196F3;color:#ffffff;cursor: hand;" class="input-group-text lighten-3" id="btn_buscar">
                            <i style="cursor: hand;" class="fas fa-search text-grey" aria-hidden="true"></i>
                        </span>
                    </div>                    
                </div>
            </div>
            <div class="card-footer">
            </div>
        </div>     
        <div class="-container-fluid">    
            <div id="dtsGrales" style="display: none;" class="card border-black mb-2 text-center">
                <div style="font-weight: bold;color:#000" class="card-header">
                    Datos Generales
                </div>
                <div class="card-body">                
                    <form id="formRegistro" name="formRegistro" class="form-horizontal">               
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="txt_ap_paterno">Apellido Paterno:</label>                            
                                    <input type="text" class="form-control" id="txt_ap_paterno" name="txt_ap_paterno" placeholder="" required maxlength="80"/>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="txt_ap_materno">Apellido Materno:</label>
                                        <input type="text" class="form-control" id="txt_ap_materno" name="txt_ap_materno" placeholder="" required maxlength="80"/>
                                    </div>
                                    
                            </div>
                            <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="txt_nombre">Nombre:</label>
                                        <input type="text" class="form-control" id="txt_nombre" name="txt_nombre" placeholder="" required maxlength="80"/>                            
                                    </div> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="txt_calle">Calle:</label>                                
                                    <input type="text" class="form-control" id="txt_calle" name="txt_calle" placeholder="" required maxlength="80"/>                            
                                </div>
                            </div>
                            <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="txt_numero">Numero:</label>
                                        <input type="text" class="form-control" id="txt_numero" name="txt_numero" placeholder="" required maxlength="20"/>
                                    </div>
                            </div>
                            <div class="col-sm-4">
                                    <div class="form-group">                                    
                                        <label for="txt_colonia">Colonia:</label>
                                        <input type="text" class="form-control" id="txt_colonia" name="txt_colonia" placeholder="" required maxlength="80"/>
                                    </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="txt_alcaldia">Alcaldía:</label>                                
                                    <input type="text" class="form-control" id="txt_alcaldia" name="txt_alcaldia" placeholder="" required maxlength="80"/>                            
                                </div>
                            </div>
                            <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="txt_entidad">Entidad Federativa:</label>
                                        <input type="text" class="form-control" id="txt_entidad" name="txt_entidad" placeholder="" required maxlength="80"/>
                                    </div>
                            </div>
                            <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="txt_cp">Código Postal:</label>
                                        <input type="text" class="form-control" id="txt_cp" name="txt_cp" placeholder="" required maxlength="6"/>
                                    </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="txt_tel">Teléfono de casa:</label>                                
                                    <input type="text" class="form-control" id="txt_tel" name="txt_tel" placeholder="" required maxlength="10"/>                            
                                </div>
                            </div>
                            <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="txt_celular">Número Celular:</label>
                                        <input type="text" class="form-control" id="txt_celular" name="txt_celular" placeholder="" required maxlength="10"/>
                                    </div>
                            </div>
                            <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="txt_tutor">Teléfono padre/tutor:</label>
                                        <input type="text" class="form-control" id="txt_tutor" name="txt_tutor" placeholder="" required maxlength="10"/>
                                    </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="txt_email">E-mail:</label>                                
                                    <input type="email" class="form-control" id="txt_email" name="txt_email" placeholder="" required maxlength="80"/>                      
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="txt_email_pt">E-mail padre/tutor:</label>                                
                                    <input type="email" class="form-control" id="txt_email_pt" name="txt_email_pt" placeholder="" required maxlength="80"/>                      
                                </div>
                            </div>
                            <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="txt_sexo">Sexo:</label>
                                        <input type="text" class="form-control" id="txt_sexo" name="txt_sexo" placeholder="" required maxlength="1"/>
                                    </div>
                            </div>
                            <div class="col-sm-4">
                                    <label for="txt_curp">CURP:</label>
                                    <input type="text" class="form-control" id="txt_curp" name="txt_curp" placeholder="" required maxlength="18"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                    <div class="form-group">
                                        <label >Fecha de nacimiento</label>
                                        <input type="date" name="fh_nac" id="fh_nac" max="3000-12-31" 
                                            min="1000-01-01" class="form-control" required/>
                                    </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="txt_entnac">Entidad de nacimiento:</label>
                                    <input type="text" class="form-control" id="txt_entnac" name="txt_entnac" placeholder="" required maxlength="80"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="txt_secundaria_tp">Tipo de secundaria:</label>                            
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="txt_secundaria_tp" id="txt_secundaria_tp_pub" value="Publica" checked>Pública
                                    </label>
                                    </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="txt_secundaria_tp" id="txt_secundaria_tp_priv"  value="Privada">Privada
                                    </label>
                                    </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <br>
                                        <label for="txt_secundaria">Secundaria de Procedencia:</label>
                                        <input type="text" class="form-control" id="txt_secundaria" name="txt_secundaria" placeholder="" required maxlength="80"/>
                                    <br/>
                                </div>
                            </div>       
                            <div class="col-sm-4">
                                <div class="form-group" id="num_sec">
                                    <br>
                                        <label for="txt_secundaria_num">No. Secundaria:</label>
                                        <input type="text" class="form-control" id="txt_secundaria_num" name="txt_secundaria_num" placeholder="" maxlength="4"/>
                                    <br/>
                                </div>
                            </div>                     
                        </div>                    
                        <div class="row">
                            <div class="col-sm-12">
                                <label>Escuela a la que desea ingresar:</label>
                            </div>
                        </div>
                        <div class="row">                        
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="txt_op1">Opción 1:</label>
                                    <input type="text" class="form-control" id="txt_op1" name="txt_op1" placeholder="" required maxlength="80"/>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="txt_op2">Opción 2:</label>
                                    <input type="text" class="form-control" id="txt_op2" name="txt_op2" placeholder="" maxlength="80"/>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="txt_op3">Opción 3:</label>
                                    <input type="text" class="form-control" id="txt_op3" name="txt_op3" placeholder="" maxlength="80"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                Cómo se enteró del centro de asesioría
                                <select id="cboObs" name="cboObs" class="form-control">
                                    <option value="Internet">Internet</option>
                                    <option value="Flyer">Flyer</option>
                                    <option value="Amigo">Un amigo</option>
                                    <option value="Otro">Otro</option>
                                </select>
                            </div>                                              
                        </div>
                    </form>
                    <input type="hidden" name="datcur_folescban" id="datcur_folescban">                                            
                    <br>
                    <h3 style="text-aling:left;">Trayectoria</h3>
                    <br>
                    <div>
                        <table id="tbl_trayectoria" class="table table-bordered table-striped mb-0">                                    
                            <thead class="thead-light">
                                <tr>
                                    <th>Plantel</th>
                                    <th>Curso</th>
                                    <th>Periodo</th>
                                    <th>Horario</th>
                                    <th>Estatus</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <input type="hidden" name="IdTra" id="IdTra"> 
                                        <label id="lbl_plantel"></label> 
                                    </td>
                                    <td>
                                        <label id="lbl_curso" ></label> 
                                    </td>
                                    <td>
                                        <label id="lbl_periodo"></label> 
                                    </td>
                                    <td>
                                        <label  id="lbl_horario"></label> 
                                    </td>
                                    <td>
                                        <label  id="lbl_estatus"></label> 
                                    </td>
                                </tr>                                
                            </tbody>
                        </table>
                    </div>
                    <br>
                    <h3 style="text-aling:left;">Asignación de Grupo</h3>
                    <br>
                    <div>
                        <table id="tbl_gpo" class="table table-bordered table-striped mb-0">                                    
                            <thead class="thead-light">
                                <tr>
                                    <th>IDAlumno</th>                                    
                                    <th>Plantel</th>
                                    <th>Curso</th>
                                    <th>Periodo</th>
                                    <th>Horario</th>
                                    <th>Grupo</th>
                                    <th>Area</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>                                                     
                                        <input type="hidden" name="IdAlu" id="IdAlu">                                                      
                                        <label id="lbl_idalumno_gpo"></label> 
                                    </td>
                                    <td>                                                        
                                        <label id="lbl_plantel_gpo"></label> 
                                    </td>
                                    <td>
                                        <input type="hidden" name="IdCurPlan" id="IdCurPlan">  
                                        <label id="lbl_curso_gpo" ></label> 
                                    </td>
                                    <td>
                                        <label id="lbl_periodo_gpo"></label> 
                                    </td>
                                    <td>
                                        <input type="hidden" name="curpla_idhor" id="curpla_idhor">  
                                        <label  id="lbl_horario_gpo"></label> 
                                    </td>
                                    <td>
                                        <label  id="lbl_grupo_gpo"></label> 
                                    </td>
                                    <td>
                                        <select id="cboAreas" name="cboAreas" class="form-control">   
                                        <input type="hidden" name="cur_tipcur" id="cur_tipcur">  
                                        {{-- <label  id="lbl_area_gpo"></label>  --}}
                                        
                                    </td>
                                </tr>                                
                            </tbody>
                        </table>
                    </div>
                    <br>
                    <div>
                        <button type="submit" id = "btn_asign_gpo" class="btn btn-primary"><i class="fas fa-users"></i> Asignar Grupo</button>
                    </div>                    
                    <br>
                    <div style="display: none;" id="tbl_pago_group">
                        <h3 style="text-aling:left;">Pagos</h3>
                        <br>
                        <div>
                            <table id="tbl_pago_dts" class="table table-bordered table-striped mb-0">                                    
                                <thead class="thead-light">
                                    <tr>
                                        {{-- <th>ID</th>                                     --}}
                                        <th>Plantel</th>
                                        <th>Curso</th>
                                        <th>Tipo de Pago</th>
                                        <th>Costo</th>                                    
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        {{-- <td>                   
                                            <input type="hidden" name="IdCosto" id="IdCosto">    
                                            <input type="hidden" name="IdPago" id="IdPago">                                                      
                                            <label id="lbl_id_pago"></label> 
                                        </td> --}}
                                        <td>            
                                            <input type="hidden" name="IdCosto" id="IdCosto">    
                                            <input type="hidden" name="IdPago" id="IdPago">                                                
                                            <label id="lbl_plantel_pago"></label> 
                                        </td>
                                        <td>
                                            <input type="hidden" name="IdCurPlan_pago" id="IdCurPlan_pago">  
                                            <label id="lbl_curso_pago" ></label> 
                                        </td>
                                        <td>
                                            <label  id="lbl_tp_Pago">Inscripción</label> 
                                        </td>
                                        <td>
                                            <input type="hidden" name="curpla_idhor_pago" id="curpla_idhor_pago">  
                                            <label  id="lbl_costo"></label> 
                                        </td>                                    
                                    </tr>                                
                                </tbody>
                            </table>
                            <br>
                            <input type="hidden" name="IdCalSeleccionado" id="IdCalSeleccionado" value="">
                            <table id="tbl_pago_rec" class="table table-bordered table-striped mb-0">                                    
                                <thead class="thead-light">
                                    <tr>                                      
                                        <th>Año</th>
                                        <th>Mes</th>
                                        <th>Ciclo</th>
                                        <th>Banco</th>
                                        <th>Sucursal</th>
                                        <th>Autorización</th>
                                        <th>Fecha de Pago</th>
                                        <th>Fecha de Entrega</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>                                                     
                                            <label id="queAnio"></label> 
                                        </td>
                                        <td>                             
                                            <label id="queMes"></label>                                            
                                        </td>
                                        <td>
                                            <label id="queCiclo"></label>
                                        </td>
                                        <td>
                                            <select id="cboBancos" name="cboBancos" class="form-control">                                                
                                            </select>
                                        </td>
                                        <td>
                                            <select id="cboSucursal" name="cboSucursal" class="form-control">                                                
                                            </select>
                                        </td>
                                        <td>                                            
                                            <input type="text" class="form-control" id="txt_autorizacion" name="txt_autorizacion" placeholder="" required maxlength="11"/>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="date" name="fh_Pago" id="fh_Pago" max="2100-12-31" 
                                                    min="1000-01-01" class="form-control" required/>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="date" name="fh_Entrega" id="fh_Entrega" max="2100-12-31" 
                                                    min="1000-01-01" class="form-control" required/>
                                            </div>
                                        </td>
                                    </tr>                                
                                </tbody>
                            </table>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-6">
                                <button type="submit" id = "btn_asign_cal" class="btn btn-primary"><i class="fas fa-calendar-alt"></i> Calendario</button>
                            </div>
                            <div class="col-sm-6">
                                <button type="submit" id = "btn_asign_pago" class="btn btn-primary"><i class="fas fa-hand-holding-usd"></i> Asignar Pago</button>
                            </div>
                        </div>
                    </div>                    
                </div>
                <br>
                <div class="card-footer">
                </div>
            </div>
        </div>
        {{-- <div class="card" style="text-aling: center; margin-top: 100px;width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>         --}}
        <div class="modal fade" id="cal-modal" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="rowCrudModal"></h4>
                    </div>
                    <div class="modal-body">
                        <div class="table-wrapper-scroll-y my-custom-scrollbar">
                        <table id="tblCalendario" class="table table-bordered table-striped mb-0">
                            {{-- table table-responsive-lg table-hover --}}
                            <thead class="thead-light">
                                <tr>
                                    <th>#</th>
                                    <th>Año</th>
                                    <th>Mes</th>                                
                                    <th>Periodo</th>
                                </tr>
                            </thead>
                            <tbody id="tblCalendarioBody" ></tbody>                        
                        </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id = "btn_selectCal" class="btn btn-primary"><i class="fas fa-check-circle"></i> Aceptar</button>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('loadingdata')
@endsection

@section('pie')

@endsection
@section("scripts")

<script src="{{asset('/js/ui-inscripcion.js')}}"></script>
<script type="text/javascript">
    var SITEURL = '{{URL::to('')}}';       
</script>
@endsection