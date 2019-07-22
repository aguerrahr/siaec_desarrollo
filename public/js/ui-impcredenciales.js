
$(document).ready(function() {
   
    
});
$( "#btn_buscar" ).click(function() {
    var idAlumno = $("#txt_idalumno").val();
    if (idAlumno == ""){
        swal("Error", "Indique el Id del Alumno", "error");
    }
    else{
        var ruta = SITEURL +  '/alumnos/inscripciones/' + idAlumno;
        $('#mdlEspere').modal('show');
        
        $.get( ruta, function(data,status,xhr) {
			if (data.data == null)
			{
				$('#mdlEspere').modal('hide');            
                $('#mdlEspere').hide();
			    $('.modal-backdrop').hide();
                swal("Error", "ID de Alumno inválido", "error"); 
			}
			else
			{
				window.open(SITEURL + '/alumno/credencial/credencialpdf/' +  data.data.IdAlu , '_blank');
										
				if (data.data.datcur_tpescuela == "Publica"){
					$("#txt_secundaria_tp_pub").prop("checked", true);
				}
				else{
					$("#txt_secundaria_tp_priv").prop("checked", true);
				}                      
				$("#txt_secundaria_num").val(data.data.datcur_numesc);
			}                                 
            
          })
            .done(function(data,status,xhr) {
			
            })
            .fail(function(data,status,xhr) {
                console.log('Error:', error);					  
               
                swal("Error", "Error inesperado consulte al administrador", "warning");
            })
            .always(function(data,status,xhr) {
				$('#mdlEspere').modal('hide');
				$('.modal-backdrop').hide();
				$('#mdlEspere').hide();
				
            });
    }
    
});
$('#btn_imp_formatos').on('click', function (e) {
    $('#imprimir-modal').modal('show');
});

$( "#btn_imp_prereg" ).click(function() {
	//
	window.open(SITEURL + '/alumno/preregcurso/preregpdf/' +  $('#IdAlu').val() , '_blank');
});
$( "#btn_imp_formapago" ).click(function() {
	//
	window.open(SITEURL + '/alumno/preregcurso/fichapagopdf/' +  $('#IdAlu').val() , '_blank');
});
