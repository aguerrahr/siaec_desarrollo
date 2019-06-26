
$(document).ready(function() {
	$('#flash-overlay-modal').modal();
	$('#grdDatos')
    .on( 'processing.dt', function ( e, settings, processing ) {
      if(processing){
		$('#mdlEspere').modal('show');
	  }
      else{
		$('#mdlEspere').hide();
		$('.modal-backdrop').hide();
		$('#mdlEspere').modal('hide');
	  }
		});
	setCboEstatus();
});
function setCboEstatus()
{
		var url = SITEURL + '/stList';
		$.ajax({
			url: url,
			dataType: 'json',
			type: 'GET',
			success: function (result) {						
				//	$("#mdlEspere").modal("hide");								
				if (result.success){
					$("#cboEstatus").append('<option value="0">Seleccione una opción</option>');						
					for (var i = 0; i < result.lst.length; i++) {
						var desEstatus = result.lst[i];
						$("#cboEstatus")
							.append('<option value="' +	desEstatus.IdEst + '">' + desEstatus.Est_UsuDesc + '</option>');																
					}
				}
				else{
					swal("Error", "Catálogo de Estatus sin registros", "error");
				}
				
			},
			error: function (jqXHR, textStatus, errorThrown) {
				console.log(textStatus);
				//$("#mdlEspere").modal("hide");
			}	
		});


}