@extends("layouts.templateglobal")
@section('headres')

@endsection
@section('menu')
	
@endsection
@section('encabezado')		
	<div class="row justify-content-center">
		<h1>Mantenimiento de Usuarios</h1>	
	</div>
	<hr>
@endsection

@section('cuerpo')	
	<div class="card">				
		<div class="card-header text-white bg-dark mb-3">
			Usuarios
		</div>
		<div class="card-body">
				<div class="row justify-content-start pb-3">
						<a href="javascript:void(0)" class="btn btn-success" id="create-new-record"><i class="fa fa-plus-circle"></i> Agregar registro</a>
				</div>
				<table id="grdDatos" class="table table-responsive-lg table-hover">
					<thead class="thead-light">
						<tr>
							<th>#</th>
							<th>Nombre</th>
							<th>Email</th>
							<th>Rol</th>
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
			           <input type="hidden" name="id" id="id">
			            <div class="form-group">
			                <label for="name" class="col-sm-2 control-label">Nombre</label>
			                <div class="col-sm-12">
			                    <input type="text" class="form-control" id="name" name="name" placeholder="Proporcione nombre" value="" maxlength="100" required>
			                </div>
						</div>
						<div class="form-group">
								<label for="email" class="col-sm-2 control-label">Email</label>
								<div class="col-sm-12">
									<input type="email" class="form-control" id="email" name="email" placeholder="Proporcione email" value="" maxlength="100" required>
								</div>
						</div>
						<div class="form-group">
								<label for="password" class="col-sm-2 control-label">Password</label>
								<div class="col-sm-12">
									<input type="password" class="form-control" id="password" name="password" value="" maxlength="100" required>
								</div>
						</div>
						
						<div class="form-group">
								<label for ="cboRol" class="col-sm-10 control-label">Rol usario</label>
								<div class="col-md-10">
									<select class="cs-select cs-skin-border select-gray" name="cboRol" id="cboRol"></select>
								</div>	
						</div>
						
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

<script src="../../js/ui-acceso.js"></script>
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
			"ajax": "{{ url('accesos')}}",
			"processing": false,
			"columns":[
				{data:'id'},
				{data:'nombre'},
				{data:'email'},
				{data:'rol'},
				{data:'Est_UsuDesc','searchable': false, 'targets': 0},
				{data:'btn','orderable': false},
				//{data: 'action', orderable: false, searchable: false},
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
		    $('#create-new-record').click(function () {
		        $('#btn-save').val("create");
		        $('#id').val('');
				$('#rowForm').trigger("reset");
				$('#cboEstatus option[value=0]').attr('selected', 'selected');
				$('#cboRol option[value=0]').attr('selected', 'selected');
				//$("#rowForm")[0].reset();
				//document.getElementById('rowForm').reset();
				$('#rowCrudModal').html("Agregar registro");
		        $('#ajax-crud-modal').modal('show');
			});
			/*  Botón editar */
			$('body').on('click', '.edit-row', function () {
				var idUsuario = $(this).data('id');

				$.get("{{ route('accesos.index') }}" +'/' + idUsuario +'/edit', function (data) {
					$('#rowCrudModal').html("Editar registro");
					$('#btn-save').val("edit-row");
					$('#ajax-crud-modal').modal('show');
					$('#id').val(data.usuario.id);
					$('#name').val(data.usuario.name);
					$('#email').val(data.usuario.email);
					$('#cboEstatus option[value=' + data.usuario.IdEst + ']').attr('selected', 'selected');
					//data.usuario.roles[0].id
					$('#cboRol option[value=' + data.rol + ']').attr('selected', 'selected');
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
		          url: "{{ route('accesos.store') }}",
		          type: "POST",
		          dataType: 'json',
		          success: function (data) {
					if (data.success){
						swal("¡Operación exitosa!", data.message, "success");
						$('#rowForm').trigger("reset");
						$('#cboEstatus option[value=0]').attr('selected', 'selected');
						$('#cboRol option[value=0]').attr('selected', 'selected');
						$('#ajax-crud-modal').modal('hide');
						$('#btn-save').html('Guardar Cambios');
						var oTable = $('#grdDatos').dataTable();
						oTable.fnDraw(false);
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


