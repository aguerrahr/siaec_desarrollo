
$(document).ready(function() {
	$('#flash-overlay-modal').modal();
	$('#grdDatos')
    .on( 'processing.dt', function ( e, settings, processing ) {
	  if(processing)
	  {
		$('#mdlEspere').modal('show');
	  }
      else{
		$('#mdlEspere').modal('hide');  
		$('#mdlEspere').hide();
		$('.modal-backdrop').hide();
	  }
	});
    setCboEstatus();
    setCboRoles();
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
					//$("#mdlEspere").modal("hide");
					//swal("Error", "Usuario no encontrado", "error");
				}
				
			},
			error: function (jqXHR, textStatus, errorThrown) {
				console.log(textStatus);
				//$("#mdlEspere").modal("hide");
			}	
		});
}
function setCboRoles()
{
    //
    var url = SITEURL + '/rolesList';
		$.ajax({
			url: url,
			dataType: 'json',
			type: 'GET',
			success: function (result) {						
				//	$("#mdlEspere").modal("hide");								
				if (result.success){
					$("#cboRol").append('<option value="0">Seleccione una opción</option>');						
					for (var i = 0; i < result.lst.length; i++) {
						var desCat = result.lst[i];
						$("#cboRol")
							.append('<option value="' +	desCat.id + '">' + desCat.name + '</option>');																
					}
				}
				else{
					//$("#mdlEspere").modal("hide");
					//swal("Error", "Usuario no encontrado", "error");
				}
				
			},
			error: function (jqXHR, textStatus, errorThrown) {
				console.log(textStatus);
				//$("#mdlEspere").modal("hide");
			}	
		});
}