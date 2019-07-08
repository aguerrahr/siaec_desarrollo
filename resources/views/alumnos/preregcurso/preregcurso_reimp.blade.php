
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
		<h1>Pre-registro Cursos</h1>	
    </div>    
	<hr>
@endsection

@section('cuerpo')	            
        <div class="w3-container w3-yellow"> 
            <h2 id="Titulo">Reimpresión</h2>              
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
                    <form id="frmAlumno" name="frmAlumno" class="form-horizontal">               
                        <div class="row">
                            <input type="hidden" name="IdAlu" id="IdAlu" value="">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="txt_ap_paterno">Apellido Paterno:</label>                            
                                    <input type="text" class="form-control masc_upc" id="txt_ap_paterno" name="txt_ap_paterno" placeholder="" required maxlength="80"/>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="txt_ap_materno">Apellido Materno:</label>
                                        <input type="text" class="form-control masc_upc" id="txt_ap_materno" name="txt_ap_materno" placeholder="" required maxlength="80"/>
                                    </div>
                                    
                            </div>
                            <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="txt_nombre">Nombre:</label>
                                        <input type="text" class="form-control masc_upc" id="txt_nombre" name="txt_nombre" placeholder="" required maxlength="80"/>                            
                                    </div> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="txt_calle">Calle:</label>                                
                                    <input type="text" class="form-control masc_upc" id="txt_calle" name="txt_calle" placeholder="" required maxlength="80"/>                            
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
                                        <input type="text" class="form-control masc_upc" id="txt_colonia" name="txt_colonia" placeholder="" required maxlength="80"/>
                                    </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="txt_alcaldia">Alcaldía:</label>                                
                                    <input type="text" class="form-control masc_upc" id="txt_alcaldia" name="txt_alcaldia" placeholder="" required maxlength="80"/>                            
                                </div>
                            </div>
                            <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="txt_entidad">Entidad Federativa:</label>
                                        <input type="text" class="form-control masc_upc" id="txt_entidad" name="txt_entidad" placeholder="" required maxlength="80"/>
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
                                        <label for="cboSexo">Sexo:</label>
                                        {{-- <input type="text" class="form-control" id="txt_sexo" name="txt_sexo" placeholder="" required maxlength="1"/> --}}                                        
                                        <select id="cboSexo" name="cboSexo" class="form-control">
                                            <option value="F">Femenino</option>
                                            <option value="M">Masculino</option>
                                        </select>
                                    </div>
                            </div>
                            <div class="col-sm-4">
                                    <label for="txt_curp">CURP:</label>
                                    <input type="text" class="form-control masc_upc" id="txt_curp" name="txt_curp" placeholder="" required maxlength="18"/>
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
                                    <input type="text" class="form-control masc_upc" id="txt_entnac" name="txt_entnac" placeholder="" required maxlength="80"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="txt_secundaria_tp">Tipo de secundaria:</label>                            
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="txt_secundaria_tp" id="txt_secundaria_tp_pub" value="Publica">Pública
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
                                        <input type="text" class="form-control masc_upc" id="txt_secundaria" name="txt_secundaria" placeholder="" required maxlength="80"/>
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
                                    <input type="text" class="form-control masc_upc" id="txt_op1" name="txt_op1" placeholder="" required maxlength="80"/>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="txt_op2">Opción 2:</label>
                                    <input type="text" class="form-control masc_upc" id="txt_op2" name="txt_op2" placeholder="" maxlength="80"/>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="txt_op3">Opción 3:</label>
                                    <input type="text" class="form-control masc_upc" id="txt_op3" name="txt_op3" placeholder="" maxlength="80"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                Cómo se enteró del centro de asesioría
                                <select id="cboObs" name="cboObs" class="form-control">
                                    <option value="Internet">Internet</option>
                                    <option value="Bolante">Bolante</option>
                                    <option value="Espectacular">Espectacular</option>
                                    <option value="Amigo">Un amigo</option>
                                    <option value="Otro">Otro</option>
                                </select>
                            </div>                                              
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <button type="button" id = "btn_save" class="btn btn-primary"><i class="fas fa-check-circle"></i> Guardar</button>
                                <button type="button" id = "btn_imp_formatos" class="btn btn-primary"><i class="fas fa-print"></i> Imprimir Formatos</button> 
                            </div>  
                        </div>
                        <br/>
                    </form>
                    <input type="hidden" name="datcur_folescban" id="datcur_folescban">                         
                </div>
                <br>
                <div class="card-footer">
                       
                </div>
            </div>
        </div>
        <div class="modal fade" id="imprimir-modal" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="rowCrudModal">Impresión de Formatos</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
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
        .masc_upc {
            text-transform:uppercase;
        }
        .modal-title{
            font: 18px arial, sans-serif;
            font-weight: bold;
        }
    </style>
<script src="{{asset('/js/ui-preregreimp.js')}}"></script>
<script type="text/javascript">
    var SITEURL = '{{URL::to('')}}';
    $(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });			
    });
    $( "#btn_save" ).click(function() {
        var blnGuardar = true;
        var numsec = $("#txt_secundaria_num").val();             
        var tp_sec =  $("#txt_secundaria_tp_pub").is(':checked');
        if (tp_sec){              
            if (numsec==""){
                blnGuardar = false;
                swal("¡Falta información!", "Indicar número de secundaria pública", "error");
            }                
        }
        if (blnGuardar==true) $("#frmAlumno").submit();
    });
    if ($("#frmAlumno").length > 0) {
        $("#frmAlumno").validate({
            submitHandler: function(form) {
                var actionType = $('#btn_save').val();
                $('#mdlEspere').modal('show');
                $('#btn_save').html('Enviando...');
                $.ajax({
                    data: $('#frmAlumno').serialize(),
                    url: "{{ route('preregreimp.store') }}",
                    type: "POST",
                    dataType: 'json',
                    success: function (data) {
                        if (data.success){
                            $('#btn_save').html(' Guardar');
                            $('#mdlEspere').modal('hide');
                            swal("¡Operación exitosa!", data.message, "success");                           
                            $('#btn_imp_formatos').show();                            
                        }else{
                            swal("Error", data.message, "error");
                            $('#btn_save').html(' Guardar');
                            $('#mdlEspere').modal('hide');
                        }
                    },
                    error: function (request, message, error) {
                        console.log('Error:', error);					  
                        $('#btn_save').html(' Guardar');
                        $('#mdlEspere').modal('hide');
                        swal("Error", "Error inesperado consulte al administrador", "warning");
                    }
                });
            }
        })
    }
</script>
@endsection