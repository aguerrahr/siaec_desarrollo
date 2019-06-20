
$(document).ready(function() {
	$('#flash-overlay-modal').modal();
	$('#grdDatos')
    .on( 'processing.dt', function ( e, settings, processing ) {
      if(processing){
		  $('#mdlEspere').modal('show');
	  }
      else{
		$('#mdlEspere').modal('hide');
		$('#mdlEspere').hide();
		$('.modal-backdrop').hide();
	  }
	});	
});
