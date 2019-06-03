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
			Plan Escolar
		</div>
		<div class="card-body">
				<div class="row justify-content-start pb-3">
						<a href="javascript:void(0)" class="btn btn-success" id="create-new-reg"><i class="fa fa-plus-circle"></i> Agregar registro</a>
				</div>
				<table id="grdDatos" class="table table-responsive-lg table-hover">
					<thead class="thead-light">
						<tr>
                            <th>Plantel</th>
                            <th>Curso</th>
                            <th>Periodo</th>
                            <th>Horario</th>
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
			            <input type="hidden" name="IdCurPlan" id="IdCurPlan">                    
                        <div class="form-group">
			                <label for ="cboPlantel" class="col-sm-2 control-label">Plantel</label>
							<div class="col-md-6">
								<select class="cs-select cs-skin-border select-gray" name="cboPlantel" id="cboPlantel"></select>
							</div>
                        </div>
                        <div class="form-group">
			                <label for ="cboCurso" class="col-sm-2 control-label">Curso</label>
							<div class="col-md-6">
								<select class="cs-select cs-skin-border select-gray" name="cboCurso" id="cboCurso"></select>
							</div>
                        </div>
                        <div class="form-group">
			                <label for ="cboPeriodo" class="col-sm-2 control-label">Periodo</label>
							<div class="col-md-6">
								<select class="cs-select cs-skin-border select-gray" name="cboPeriodo" id="cboPeriodo"></select>
							</div>
                        </div>
                        <div class="form-group">
			                <label for ="cboHorario" class="col-sm-2 control-label">Horario</label>
							<div class="col-md-6">
								<select class="cs-select cs-skin-border select-gray" name="cboHorario" id="cboHorario"></select>
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

<script src="../../js/ui-planescolar.js"></script>
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
			"ajax": "{{ url('catalogos/planescolar')}}",
			"processing": false,
			"columns":[
				{data:'plan_desc'},
                {data:'cur_desc'},
                {data:'per_desc'},
                {data:'hor_desc'},
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
                $('#IdCurPlan').val('');
				$('#rowForm').trigger("reset");
				
                
				$('#cboCurso').val($('#cboCurso option').eq(0).val());
				$('#cboPlantel').val($('#cboPlantel option').eq(0).val());
				$('#cboPeriodo').val($('#cboPeriodo option').eq(0).val());
				$('#cboHorario').val($('#cboHorario option').eq(0).val());
				$('#cboEstatus').val($('#cboEstatus option').eq(0).val());
				
						
		        $('#rowCrudModal').html("Agregar registro");
                $('#ajax-crud-modal').modal('show');
                
			});
			/*  Botón editar */
			$('body').on('click', '.edit-row', function () {
				var IdCurPlan = $(this).data('id');

				$.get("{{ route('planescolar.index') }}" +'/' + IdCurPlan +'/edit', function (data) {
					$('#rowCrudModal').html("Editar registro");
					$('#btn-save').val("edit-row");
                    $('#ajax-crud-modal').modal('show');
                                     					
					$('#cboCurso').val($('#cboCurso option').eq(data.curpla_idcurso).val());
					$('#cboPlantel').val($('#cboPlantel option').eq(data.curpla_idplan).val());
					$('#cboPeriodo').val($('#cboPeriodo option').eq(data.curpla_idper).val());
					$('#cboHorario').val($('#cboHorario option').eq(data.curpla_idhor).val());
					$('#cboEstatus').val($('#cboEstatus option').eq(data.curpla_idest).val());
                                        
                    $('#IdCurPlan').val(data.IdCurPlan);
                    			
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
		          url: "{{ route('planescolar.store') }}",
		          type: "POST",
		          dataType: 'json',
		          success: function (data) {
					if (data.success){
						swal("¡Operación exitosa!", data.message, "success");
						$('#rowForm').trigger("reset");
                        
                        $('#cboEstatus option[value=0]').attr('selected', 'selected');
                        $('#cboCurso option[value=0]').attr('selected', 'selected');
                        $('#cboPlantel option[value=0]').attr('selected', 'selected');
                        $('#cboPeriodo option[value=0]').attr('selected', 'selected');
                        $('#cboHorario option[value=0]').attr('selected', 'selected');
                        
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


