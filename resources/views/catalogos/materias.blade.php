@extends("layouts.templateglobal")
@section('headres')

@endsection
@section('menu')
	
@endsection
@section('encabezado')		
	<div class="row justify-content-center">
		<h1>Mantenimiento de catálogos</h1>	
	</div>
	<hr>
@endsection

@section('cuerpo')	
	<div class="card">				
		<div class="card-header text-white bg-dark mb-3">
			Catálgo Materias
		</div>
		<div class="card-body">
				<div class="row justify-content-start pb-3">
						<a href="javascript:void(0)" class="btn btn-success" id="create-new-reg"><i class="fa fa-plus-circle"></i> Agregar registro</a>
				</div>
				<table id="grdDatos" class="table table-responsive-lg table-hover">
					<thead class="thead-light">
						<tr>
							<th>#</th>							
							{{-- <th>Matricula</th> --}}
                            <th>Materia</th>
                            <th>Estatus</th>
							<th>&nbsp</th>
						</tr>
					</thead>
				</table>

		</div>
	</div>	
	<div class="modal fade" id="ajax-crud-modal" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
			    <div class="modal-header">
			        <h4 class="modal-title" id="rowCrudModal"></h4>
			    </div>
			    <div class="modal-body">
			        <form id="rowForm" name="rowForm" class="form-horizontal">
			           <input type="hidden" name="IdMat" id="IdMat">                    
                       {{-- Matricula  --}}
                       {{-- <div class="form-group">
			                <label for="" class="col-sm-2 control-label">Matricula</label>
			                <div class="col-sm-12">
			                    <input type="text" class="form-control" id="" name="" placeholder="" value="" maxlength="4" required="">
			                </div>
                        </div>	 --}}
                        {{-- Materia --}}
                        <div class="form-group">
			                <label for="mat_desc" class="col-sm-2 control-label">Materia</label>
			                <div class="col-sm-12">
			                    <input type="text" class="form-control" id="mat_desc" name="mat_desc" placeholder="" value="" maxlength="50" required="">
			                </div>
                        </div>                       
                        {{-- Estatus --}}
                        <div class="form-group">
			                <label for ="cboEstatus" class="col-sm-2 control-label">Estatus</label>
							<div class="col-md-6">
								<select class="cs-select cs-skin-border select-gray" name="cboEstatus" id="cboEstatus"></select>
							</div>

			            </div>

			            <div class="col-sm-offset-2 col-sm-10">
			             <button type="submit" class="btn btn-primary" id="btn-save" value="create"><i class="fa fa-floppy-o" aria-hidden="true"></i> Guardar Cambios
			             </button>
			            </div>
			        </form>
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

<script src="../../js/ui-materias.js"></script>
<script type="text/javascript">
	var SITEURL = '{{URL::to('')}}';
	$(function() {
		$.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
		});
			/* Grid con datos */
		$('#grdDatos').DataTable({
			"serverSide": true,
			"ajax": "{{ url('catalogos/materias')}}",
			"processing": false,
			"columns":[
				{data:'IdMat'},
				{data:'mat_desc'},               
				{data:'mat_matricula'}              
				{data:'Est_UsuDesc'},
				//{data:'btn','orderable': false},
				{data: 'action', orderable: false, searchable: false},
			],
			 "search": {
	    		"caseInsensitive": false
	  		},
			"language":{
			    "sProcessing":     "Procesando...",
			    "sLengthMenu":     "Mostrar _MENU_ registros",
			    "sZeroRecords":    "No se encontraron resultados",
			    "sEmptyTable":     "Ningún dato disponible en esta tabla",
			    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
			    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
			    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
			    "sInfoPostFix":    "",
			    "sSearch":         "Buscar:",
			    "sUrl":            "",
			    "sInfoThousands":  ",",
			    "sLoadingRecords": "Cargando...",
			    "oPaginate": {
			        "sFirst":    "Primero",
			        "sLast":     "Último",
			        "sNext":     "Siguiente",
			        "sPrevious": "Anterior"
			    },
			    "oAria": {
			        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
			        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
			    }
			}
			});
			/*  Botón agreagar */
		    $('#create-new-reg').click(function () {
		        $('#btn-save').val("create-reg");
			]	// Listado de campos
				$('#IdMat').val('');
				$('#mat_desc').val('');
				$('#mat_matricula').val('');						        
				$('#cboEstatus').val($('#cboEstatus option').eq(0).val());
				//-------------------------------------------------------------
				$('#rowForm').trigger("reset");		
				$('#rowCrudModal').html("Agregar registro");
				$('#ajax-crud-modal').modal('show');
                
			});
			/*  Botón editar */
			$('body').on('click', '.edit-row', function () {
				var IdMat = $(this).data('id');

				$.get("{{ route('materias.index') }}" +'/' + IdMat +'/edit', function (data) {

					$('#rowCrudModal').html("Editar registro");
					$('#btn-save').val("edit-row");
                    $('#ajax-crud-modal').modal('show');                    
                    //$('#cboEstatus option[value=' + data.mat_idest + ']').attr('selected', 'selected');                    
					// Lsitado de campos
                    $('#IdMat').val(data.IdMat);
					$('#mat_desc').val(data.mat_desc);
					$('#mat_matricula').val(data.mat_matricula);
					$('#cboEstatus').val($('#cboEstatus option').eq(data.mat_idest).val());
                    
				})
			});
		});
		if ($("#rowForm").length > 0) {
	    	$("#rowForm").validate({
		     submitHandler: function(form) {

		      var actionType = $('#btn-save').val();
		      $('#btn-save').html('Enviando..');

		      $.ajax({
		          data: $('#rowForm').serialize(),
		          url: "{{ route('materias.store') }}",
		          type: "POST",
		          dataType: 'json',
		          success: function (data) {
					if (data.success){						
						$('#rowForm').trigger("reset");
						//$('#cboEstatus option[value=0]').attr('selected', 'selected');
                        $('#cboEstatus').val($('#cboEstatus option').eq(0).val());
                        $('#ajax-crud-modal').modal('hide');
						$('#btn-save').html('Guardar Cambios');                                                
                        var oTable = $('#grdDatos').dataTable();
                        oTable.fnDraw(false);
                        swal("¡Operación exitosa!", data.message, "success");
					}else{
						swal("Error", data.message, "error");
						$('#btn-save').html('Guardar Cambios');
					}

		          },
		          error: function (request, message, error) {
					  console.log('Error:', error);					  
					  $('#btn-save').html('Guardar Cambios');
					  swal("Error", "Error inesperado consulte al administrador", "warning");
		          }
		      });
		    }
		  })
		}
</script>
@endsection