@extends("layouts.templateglobal")
@section('headres')
    
@endsection
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
@section('menu')
	
@endsection
@section('encabezado')		
	<div class="row justify-content-center">
		<h1>Pre-registro Cursos</h1>	
    </div>    
	<hr>
@endsection

@section('cuerpo')	
<div class="container">        
    <div id="accordion">
      <div class="card">
        <div class="card-header">
          <a class="card-link" data-toggle="collapse" href="#collapseOne">
            Instrucciones para la Inscripción
          </a>
        </div>
        <div id="collapseOne" class="collapse hide" data-parent="#accordion">
          <div class="card-body">
                El alumno deberá entregar en las instalaciones del Instituo Coapa:
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><i class="fas fa-thumbtack text-info mx-2"></i>El formato de Registro debidamente complementado</li>
                    <li class="list-group-item"><i class="fas fa-thumbtack text-info mx-2"></i>El formato de Pago sellado por la Institución Bancaria donde realizó el pago</li>
                    <li class="list-group-item">Los dumentos:</li>
                    <li class="list-group-item"><i class="fas fa-thumbtack text-info mx-2"></i>Certificado de Secundaria</li>
                    <li class="list-group-item"><i class="fas fa-thumbtack text-info mx-2"></i>Acta de nacimiento</li>
                    <li class="list-group-item"><i class="fas fa-thumbtack text-info mx-2"></i>Comprobante de domicilio</li>
                </ul>
                <br>
                Selecciona el curso al que deseas ingresar:
                <br/>
                <br>                
                <table id="grdCusrso" class="table table-responsive-lg">
                    <thead class="thead-light">
                        <tr>
                            <th>Curso</th>
                            <th>Plantel</th>
                            <th>Periodo escolar</th>
                            <th>Horario</th>                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>                                
                                <select class="cs-select cs-skin-border select-gray" name="cboCurso" id="cboCurso"></select>                                
                            </td>
                            <td>
                                <select class="cs-select cs-skin-border select-gray" name="cboPlantel" id="cboPlantel"></select>
                            </td>
                            <td>
                                <select class="cs-select cs-skin-border select-gray" name="cboPeriodo" id="cboPeriodo"></select>
                            </td>
                            <td>
                                <select class="cs-select cs-skin-border select-gray" name="cboHorario" id="cboHorario"></select>
                            </td>
                        </tr>
                        <tr>
                            <td><br></td>
                            <td><br></td>
                            <td><br></td>
                            <td style="text-align: center;">
                                <button type="button" id = "btn_registrar" class="btn btn-primary">Aceptar</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          {{-- <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo"> --}}
            <a class="no-collapsable" data-toggle="collapse" href="#collapseTwo">
                Datos Generales
            </a>
        </div>
        <div id="collapseTwo" class="collapse" data-parent="#accordion">
          <div class="card-body">
            <form id="formRegistro">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="txt_ap_paterno">Apellido Paterno:</label>
                            {{-- <input type="email" class="form-control" placeholder="name@example.com"> --}}
                            <input type="text" class="form-control form-control-sm" id="txt_ap_paterno" placeholder="">                            
                        </div>
                    </div>
                    <div class="col-sm-4">
                            <label for="txt_ap_materno">Apellido Materno:</label>
                            <input type="text" class="form-control form-control-sm" id="txt_ap_materno" placeholder="">
                    </div>
                    <div class="col-sm-4">
                            <label for="txt_nombre">Nombre:</label>
                            <input type="text" class="form-control form-control-sm" id="txt_nombre" placeholder="">
                    </div>
                </div>
                <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="txt_calle">Calle:</label>
                                {{-- <input type="email" class="form-control" placeholder="name@example.com"> --}}
                                <input type="text" class="form-control form-control-sm" id="txt_calle" placeholder="">                            
                            </div>
                        </div>
                        <div class="col-sm-4">
                                <label for="txt_numero">Numero:</label>
                                <input type="text" class="form-control form-control-sm" id="txt_numero" placeholder="">
                        </div>
                        <div class="col-sm-4">
                                <label for="txt_colonia">Colonia:</label>
                                <input type="text" class="form-control form-control-sm" id="txt_colonia" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="txt_alcaldia">Alcaldía:</label>
                                {{-- <input type="email" class="form-control" placeholder="name@example.com"> --}}
                                <input type="text" class="form-control form-control-sm" id="txt_alcaldia" placeholder="">                            
                            </div>
                        </div>
                        <div class="col-sm-4">
                                <label for="txt_entidad">Entidad Federativa:</label>
                                <input type="text" class="form-control form-control-sm" id="txt_entidad" placeholder="">
                        </div>
                        <div class="col-sm-4">
                                <label for="txt_cp">Código Postal:</label>
                                <input type="text" class="form-control form-control-sm" id="txt_cp" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="txt_tel">Teléfono de casa:</label>
                                {{-- <input type="email" class="form-control" placeholder="name@example.com"> --}}
                                <input type="text" class="form-control form-control-sm" id="txt_tel" placeholder="">                            
                            </div>
                        </div>
                        <div class="col-sm-4">
                                <label for="txt_celular">Número Celular:</label>
                                <input type="text" class="form-control form-control-sm" id="txt_celular" placeholder="">
                        </div>
                        <div class="col-sm-4">
                                <label for="txt_tutor">Teléfono padre/tutor:</label>
                                <input type="text" class="form-control form-control-sm" id="txt_tutor" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="txt_email">E-mail:</label>
                                {{-- <input type="email" class="form-control" placeholder="name@example.com"> --}}
                                <input type="email" class="form-control form-control-sm" id="txt_email" placeholder="">                      
                            </div>
                        </div>
                        <div class="col-sm-4">
                                <label for="txt_sexo">Sexo:</label>
                                <input type="text" class="form-control form-control-sm" id="txt_sexo" placeholder="">
                        </div>
                        <div class="col-sm-4">
                                <label for="txt_curp">CURP:</label>
                                <input type="text" class="form-control form-control-sm" id="txt_curp" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                                <label >Fecha de nacimiento</label>
                                <input type="date" name="bday" max="3000-12-31" 
                                       min="1000-01-01" class="form-control">
                        </div>
                        <div class="col-sm-4">
                                <label for="txt_entnac">Entidad de nacimiento:</label>
                                <input type="text" class="form-control form-control-sm" id="txt_entnac" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                                <br>
                                    <label for="txt_secundaria">Secundaria de Procedencia:</label>
                                    <input type="text" class="form-control form-control-sm" id="txt_secundaria" placeholder="">
                                <br/>
                        </div>                        
                    </div>                    
                    <div class="row">
                        <div class="col-sm-12">
                            <label>Escuela a la que desea ingresar:</label>
                        </div>
                    </div>
                    <div class="row">                        
                        <div class="col-sm-4">
                            <label for="txt_op1">Opción 1:</label>
                            <input type="text" class="form-control form-control-sm" id="txt_op1" placeholder="">
                        </div>
                        <div class="col-sm-4">
                            <label for="txt_op2">Opción 2:</label>
                            <input type="text" class="form-control form-control-sm" id="txt_op2" placeholder="">
                        </div>
                        <div class="col-sm-4">
                            <label for="txt_op3">Opción 3:</label>
                            <input type="text" class="form-control form-control-sm" id="txt_op3" placeholder="">
                        </div>
                    </div>
            </form>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          {{-- <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree"> --}}                
            <a class="no-collapsable" data-toggle="collapse" href="#collapseThree">
                Impresión del Registro 
            </a>
        </div>
        <div id="collapseThree" class="collapse" data-parent="#accordion">
          <div class="card-body">
            <form id="formImpresion">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="txt_ap_paterno_i">Apellido Paterno:</label>
                            {{-- <input type="email" class="form-control" placeholder="name@example.com"> --}}
                            <input type="text" class="form-control form-control-sm" id="txt_ap_paterno_i" placeholder="">                            
                        </div>
                    </div>
                    <div class="col-sm-4">
                            <label for="txt_ap_materno_i">Apellido Materno:</label>
                            <input type="text" class="form-control form-control-sm" id="txt_ap_materno_i" placeholder="">
                    </div>
                    <div class="col-sm-4">
                            <label for="txt_nombre_i">Nombre:</label>
                            <input type="text" class="form-control form-control-sm" id="txt_nombre_i" placeholder="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="txt_calle_i">Calle:</label>
                            {{-- <input type="email" class="form-control" placeholder="name@example.com"> --}}
                            <input type="text" class="form-control form-control-sm" id="txt_calle_i" placeholder="">                            
                        </div>
                    </div>
                    <div class="col-sm-4">
                            <label for="txt_numero_i">Numero:</label>
                            <input type="text" class="form-control form-control-sm" id="txt_numero_i" placeholder="">
                    </div>
                    <div class="col-sm-4">
                            <label for="txt_colonia_i">Colonia:</label>
                            <input type="text" class="form-control form-control-sm" id="txt_colonia_i" placeholder="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="txt_alcaldia_i">Alcaldía:</label>                            
                            <input type="text" class="form-control form-control-sm" id="txt_alcaldia_i" placeholder="">                            
                        </div>
                    </div>
                    <div class="col-sm-4">
                            <label for="txt_entidad_i">Entidad Federativa:</label>
                            <input type="text" class="form-control form-control-sm" id="txt_entidad_i" placeholder="">
                    </div>
                    <div class="col-sm-4">
                            <label for="txt_cp_i">Código Postal:</label>
                            <input type="text" class="form-control form-control-sm" id="txt_cp_i" placeholder="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="txt_tel_i">Teléfono de casa:</label>
                            {{-- <input type="email" class="form-control" placeholder="name@example.com"> --}}
                            <input type="text" class="form-control form-control-sm" id="txt_tel_i" placeholder="">                            
                        </div>
                    </div>
                    <div class="col-sm-4">
                            <label for="txt_celular_i">Número Celular:</label>
                            <input type="text" class="form-control form-control-sm" id="txt_celular_i" placeholder="">
                    </div>
                    <div class="col-sm-4">
                            <label for="txt_tutor_i">Teléfono padre/tutor:</label>
                            <input type="text" class="form-control form-control-sm" id="txt_tutor_i" placeholder="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="txt_email_i">E-mail:</label>
                            {{-- <input type="email" class="form-control" placeholder="name@example.com"> --}}
                            <input type="email" class="form-control form-control-sm" id="txt_email_i" placeholder="">                      
                        </div>
                    </div>
                    <div class="col-sm-4">
                            <label for="txt_sexo_i">Sexo:</label>
                            <input type="text" class="form-control form-control-sm" id="txt_sexo_i" placeholder="">
                    </div>
                    <div class="col-sm-4">
                            <label for="txt_curp_i">CURP:</label>
                            <input type="text" class="form-control form-control-sm" id="txt_curp_i" placeholder="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                            <label >Fecha de nacimiento</label>
                            <input type="date" name="bday" max="3000-12-31" 
                                    min="1000-01-01" class="form-control">
                    </div>
                    <div class="col-sm-4">
                            <label for="txt_entnac_i">Entidad de nacimiento:</label>
                            <input type="text" class="form-control form-control-sm" id="txt_entnac_i" placeholder="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                            <br>
                                <label for="txt_secundaria">Secundaria de Procedencia:</label>
                                <input type="text" class="form-control form-control-sm" id="txt_secundaria_i" placeholder="">
                            <br/>
                    </div>                        
                </div>                    
                <div class="row">
                    <div class="col-sm-12">
                        <label>Escuela a la que desea ingresar:</label>
                    </div>
                </div>
                <div class="row">                        
                    <div class="col-sm-4">
                        <label for="txt_op1_i">Opción 1:</label>
                        <input type="text" class="form-control form-control-sm" id="txt_op1_i" placeholder="">
                    </div>
                    <div class="col-sm-4">
                        <label for="txt_op2">Opción 2:</label>
                        <input type="text" class="form-control form-control-sm" id="txt_op2_i" placeholder="">
                    </div>
                    <div class="col-sm-4">
                        <label for="txt_op3">Opción 3:</label>
                        <input type="text" class="form-control form-control-sm" id="txt_op3_i" placeholder="">
                    </div>
                </div>
            </form>
            <table>
                    <tr>
                        <td><br></td>
                        <td><br></td>
                        <td><br></td>
                        <td style="text-align: center;">
                        <a target="_blank" href="{{ url('alumno/preregcurso/preregpdf/1')}}" class="btn btn-primary">Imprimir</a>
                        </td>
                    </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="cursos-modal" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
			    <div class="modal-header">
			        <h4 class="modal-title" id="rowCrudModal"></h4>
			    </div>
			    <div class="modal-body">
                    <table id="grdDatos" class="table table-responsive-lg table-hover">
                        <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>Curso</th>
                                <th>Plantel</th>                                
                                <th>Periodo Escolar</th>
                                <th>Horario</th>                                       
                            </tr>
                        </thead>
                    </table>
			    </div>
			    <div class="modal-footer">

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

<script src="../../js/ui-preregcurso.js"></script>
<script type="text/javascript">
	var SITEURL = '{{URL::to('')}}';
	var detener = true;
</script>
@endsection


