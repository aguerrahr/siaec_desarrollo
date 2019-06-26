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
			Catálgo Calendarios Escolares
		</div>
		<div class="card-body">
				<div class="row justify-content-start pb-3">
						<a href="javascript:void(0)" class="btn btn-success" id="create-new-reg"><i class="fa fa-plus-circle"></i> Agregar registro</a>
				</div>
				<table id="grdDatos" class="table table-responsive-lg table-hover">
					<thead class="thead-light">
						<tr>
							<th>#</th>							
							<th>Año</th>
                            <th>Mes</th>
                            <th>Etapa</th>
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
			           <input type="hidden" name="IdCal" id="IdCal">                    
                       {{-- Año  --}}
                       <div class="form-group">
			                <label for="cal_idanio" class="col-sm-2 control-label">Año</label>
			                <div class="col-sm-12">
			                    <input type="text" class="form-control" id="cal_idanio" name="cal_idanio" placeholder="" value="" maxlength="4" required="">
			                </div>
                        </div>	
                        {{-- Mes --}}
                        <div class="form-group">
			                <label for="cal_idmes" class="col-sm-2 control-label">Mes</label>
			                <div class="col-sm-12">
			                    <input type="text" class="form-control" id="cal_idmes" name="cal_idmes" placeholder="" value="" maxlength="3" required="">
			                </div>
                        </div>
                        {{-- Ciclo --}}
                        <div class="form-group">
			                <label for="cal_idfase" class="col-sm-2 control-label">Fase</label>
			                <div class="col-sm-12">
			                    <input type="text" class="form-control" id="cal_idfase" name="cal_idfase" placeholder="" value="" maxlength="2" required="">
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

<script src="../../js/ui-calendarios.js"></script>
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
			"ajax": "{{ url('catalogos/calendario')}}",
			"processing": false,
			"columns":[
				{data:'IdCal'},
                {data:'cal_idanio'},
                {data:'cal_idmes'},
                {data:'cal_idfase'},
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
                $('#IdCal').val('');
				$('#cal_idanio').val('');
				$('#cal_idmes').val('');
				$('#cal_idfase').val('');				
				$('#cboEstatus').val($('#cboEstatus option').eq(0).val());
				$('#rowForm').trigger("reset");
		        $('#rowCrudModal').html("Agregar registro");
                $('#ajax-crud-modal').modal('show');
                
			});
			/*  Botón editar */
			$('body').on('click', '.edit-row', function () {
				var IdCal = $(this).data('id');

				$.get("{{ route('calendario.index') }}" +'/' + IdCal +'/edit', function (data) {

					$('#rowCrudModal').html("Editar registro");
					$('#btn-save').val("edit-row");
                    $('#ajax-crud-modal').modal('show');
                    
                    //$('#cboEstatus option[value=' + data.cal_idest + ']').attr('selected', 'selected');
                    $('#cboEstatus').val($('#cboEstatus option').eq(data.cal_idest).val());

                    $('#IdCal').val(data.IdCal);
                    $('#cal_idanio').val(data.cal_idanio);
                    $('#cal_idmes').val(data.cal_idmes);
                    $('#cal_idfase').val(data.cal_idfase);
                    

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
		          url: "{{ route('calendario.store') }}",
		          type: "POST",
		          dataType: 'json',
		          success: function (data) {
					if (data.success){
						swal("¡Operación exitosa!", data.message, "success");
						$('#rowForm').trigger("reset");
						//$('#cboEstatus option[value=0]').attr('selected', 'selected');
                        $('#cboEstatus').val($('#cboEstatus option').eq(0).val());
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