@extends("layouts.templateglobal")
@section('headres')

@endsection

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
    <input type="hidden" name="IdDatCur" id="IdDatCur">           
    <input type="hidden" name="IdAlu" id="IdAlu" value="">
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
                    <li class="list-group-item"><i class="fas fa-thumbtack text-info mx-2"></i>El formato de Registro debidamente cumplimentado</li>
                    <li class="list-group-item"><i class="fas fa-thumbtack text-info mx-2"></i>El formato y vourcher/comprobante de Pago</li>
                    <li class="list-group-item">Los documentos:</li>
                    <li class="list-group-item"><i class="fas fa-thumbtack text-info mx-2"></i>Certificado de Secundaria</li>
                    <li class="list-group-item"><i class="fas fa-thumbtack text-info mx-2"></i>Acta de nacimiento</li>
                    <li class="list-group-item"><i class="fas fa-thumbtack text-info mx-2"></i>Comprobante de domicilio</li>
                    <li class="list-group-item"><i class="fas fa-thumbtack text-info mx-2"></i>Copia de CURP</li>
                    <li class="list-group-item"><i class="fas fa-thumbtack text-info mx-2"></i>Foto tamaño infantil B/N</li>

                </ul>
                <br>
                Selecciona el curso al que deseas ingresar:
                <br/>
                <br>
                    <button type="button" id = "btn_cursos" class="btn btn-primary"><i class="fab fa-leanpub"></i> Seleccionar Curso</button>
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
                                {{-- <select class="cs-select cs-skin-border select-gray" name="cboCurso" id="cboCurso"></select>--}}
                                <div id="queCurso"></div>
                            </td>
                            <td>
                                {{-- <select class="cs-select cs-skin-border select-gray" name="cboPlantel" id="cboPlantel"></select> --}}
                                <div id="quePla"></div>
                            </td>
                            <td>
                                {{-- <select class="cs-select cs-skin-border select-gray" name="cboPeriodo" id="cboPeriodo"></select> --}}
                                <div id="quePer"></div>
                            </td>
                            <td>
                                {{-- <select class="cs-select cs-skin-border select-gray" name="cboHorario" id="cboHorario"></select> --}}
                                <div id="queHor"></div>
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
            <form id="formRegistro" name="formRegistro" class="form-horizontal">               
                <div class="row">
                    <input type="hidden" name="IdCurPlanSeleccionado" id="IdCurPlanSeleccionado" value="">
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
                                    {{-- <input type="text" class="form-control" id="txt_sexo" name="txt_sexo" placeholder="" required maxlength="1"/> --}}
                                    Cómo se enteró del centro de asesioría
                                    <select id="cboSexo" name="cboSexo" class="form-control">
                                        <option value="F">Femenido</option>
                                        <option value="M">Masculino</option>
                                    </select>
                                </div>
                        </div>
                        <div class="col-sm-4">
                                <label for="txt_curp">CURP:</label>
                                <input type="text" class="form-control masc_curp" id="txt_curp" name="txt_curp" placeholder="" required maxlength="18"/>
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
                            <div class="form-group">
                                <br>
                                    <label for="txt_secundaria">Secundaria de Procedencia:</label>
                                    <input type="text" class="form-control" id="txt_secundaria" name="txt_secundaria" placeholder="" required maxlength="80"/>
                                <br/>
                            </div>
                        </div>  
                        <div class="col-sm-4">
                            <div class="form-group">
                                <br>
                                    <label for="txt_secundaria_tp">Tipo de secundaria:</label>
                                    <input type="text" class="form-control" id="txt_secundaria_tp" name="txt_secundaria_tp" placeholder="Diurna,Técnica,Particular" required maxlength="80"/>
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
                                <option value="Bolante">Bolante</option>
                                <option value="Bolante">Espectacular</option>
                                <option value="Amigo">Un amigo</option>
                                <option value="Otro">Otro</option>
                            </select>
                        </div>
                        <div style="padding-top:20px" class="col-sm-8">
                            <button type="submit" id = "btn-save" class="btn btn-primary"><i class="fas fa-check-circle"></i> Aceptar</button>
                            <button type="button" id = "btn_imp_formatos" class="btn btn-primary"><i class="fas fa-print"></i> Imprimir Formatos</button> 
                        </div>                    
                    </div>
            </form>
          </div>
        </div>
      </div>      
    </div>
  </div>
  <div class="modal fade" id="cursos-modal" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
			    <div class="modal-header">
			        <h4 class="modal-title" id="rowCrudModal"></h4>
			    </div>
			    <div class="modal-body">
                    <div class="table-wrapper-scroll-y my-custom-scrollbar">
                    <table id="tblCursos" class="table table-bordered table-striped mb-0">
                        {{-- table table-responsive-lg table-hover --}}
                        <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>Curso</th>
                                <th>Plantel</th>                                
                                <th>Periodo Escolar</th>
                                <th>Horario</th>
                            </tr>
                        </thead>
                        <tbody id="tblCursosBody" ></tbody>                        
                    </table>
                    </div>
			    </div>
			    <div class="modal-footer">
                    <button type="button" id = "btn_selectCurso" class="btn btn-primary"><i class="fas fa-check-circle"></i> Aceptar</button>
			    </div>
			</div>
		</div>
    </div>
    <div class="modal fade" id="imprimir-modal" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="rowCrudModal">Impresión de Formatos</h4>
                    </div>
                    <div class="modal-body">                                                                                                                          
                        <table  WIDTH="100%">
                            <tr>
                                <td  style="text-align:center;">
                                    {{-- <a target="_blank" id = "btn_imp_prereg" style="padding-left:auto" href="{{ url('alumno/preregcurso/preregpdf/1')}}" class="btn btn-primary"><i class="fas fa-print"></i> Imprimir Pre-registro</a> --}}
                                    <button type="button" id = "btn_imp_prereg"  class="btn btn-primary"><i class="far fa-sticky-note"></i> Pre-Registro</button>                            
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">
                                    {{-- <a target="_blank" id = "btn_imp_formapago" style="padding-left:auto" href="{{ url('alumno/preregcurso/fichapagopdf/1')}}" class="btn btn-primary"><i class="fas fa-dollar-sign"></i> Imprimir Formato de Pago</a> --}}
                                    <button type="button" id = "btn_imp_formapago"  style="padding-left:auto" class="btn btn-primary"><i class="fas fa-dollar-sign"></i> Formato de Pago</button> 
                                </td>
                            </tr>
                        </table>
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

<style>
        /* [class^="col-"]{
            height: 50px;
            margin-bottom:1px;
            text-align:center;
            line-height:50px;
            color:#000;
        }
        .col-center {
            background-color: #ffffff;
        } */
        .my-custom-scrollbar {
            position: relative;
            height: 250px;
            overflow: auto;
        }
            .table-wrapper-scroll-y {
            display: block;
        }
        /* input:invalid {
            background-color:#ffdddd;
        } */

        /* form:invalid {
            border: 5px solid #ffdddd;
        } */

        /* input:valid {
            background-color: #ddffdd;
        } */

        /* form:valid {
            border: 5px solid #ddffdd;
        } */
        
        /* input:required {
            border-color: #800000;
            border-width: 3px;
        } */

        /* input:required:invalid {
            border-color: #C00000;
        } */

        input:invalid {
 
            border: 1px solid red;
        
        }
        
        /* Estilo por defecto */
        
        input:valid {
        
            border: 1px solid green;
        
        }
        /* Estilo por defecto */
 
        input:required:invalid {
        
            border: 1px solid red;
        
        }
        
        input:required:valid {
        
            border: 1px solid green;
        
        }
        
        .text-error{
            /* border: 1px solid red; */
            padding: 3px;
            /* border-radius: 25px; */
            background-color:red;
            color: white;
            margin-top: 3px;
        }
        .masc_curp {
            text-transform:uppercase;
        }
    </style>
    <script src="{{asset('/js/ui-preregcurso.js')}}"></script>
    <script type="text/javascript">
        var SITEURL = '{{URL::to('')}}';
        var detener = true;
        $(function() {
		$.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
		});			
	});
    if ($("#formRegistro").length > 0) {
	    	$("#formRegistro").validate({
		     submitHandler: function(form) {

		      var actionType = $('#btn-save').val();
		      $('#btn-save').html('Enviando..');

		      $.ajax({
		          data: $('#formRegistro').serialize(),
		          url: "{{ route('preregistrocursos.store') }}",
		          type: "POST",
		          dataType: 'json',
		          success: function (data) {
					if (data.success){
                        $('#btn-save').html('Aceptar');
                        swal("¡Operación exitosa!", data.message, "success");
                        detener = true;         
                        $('#btn_imp_formatos').show();
                        $('#IdAlu').val(data.IdAlu);               
                        
						// $('#formRegistro').trigger("reset");
						// $('#cboEstatus option[value=0]').attr('selected', 'selected');
						// $('#ajax-crud-modal').modal('hide');
						// $('#btn-save').html('Guardar Cambios');
						// var oTable = $('#grdDatos').dataTable();
						// oTable.fnDraw(false);
					}else{
						swal("Error", data.message, "error");
						$('#btn-save').html('Aceptar');
					}

		          },
		          error: function (request, message, error) {
					  console.log('Error:', error);					  
					  $('#btn-save').html('Aceptar');
					  swal("Error", "Error inesperado consulte al administrador", "warning");
		          }
		      });
		    }
		  })
		}
    </script>
@endsection