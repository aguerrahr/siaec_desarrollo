
$(document).ready(function() {
    $('#flash-overlay-modal').modal();
    /* desabiliota doto el acrordion        
    $('#accordion').on('shown.bs.collapse', function () {
        $('[data-toggle=collapse]').prop('disabled',true);
    });
    */
   //$("#collapseTwo a[data-toggle]").attr("data-toggle","");
   //$("#collapseTwo .collapse").addClass("in").css("height","auto")

   //$("#accordion a[data-toggle]").attr("data-toggle","collapse");
   //$("#accordion.collapse").removeClass("in").css("height","0")
   //$("#accordion.collapse:first").addClass("in").css("height","auto")
   
   $('.no-collapsable').on('click', function (e) {
        if (detener) {
            event.stopPropagation()
            // do stuff
            detener = false;
        }
        else {
            detener = true;
        }
    });

    $('#mdlEspere').modal('show');
    setcboCurso();
    setcboPlantel();    
    setcboPeriodo();
    setcboHorario();    

});

$( "#btn_registrar" ).click(function() {
   
  });
function setcboHorario()
{
		var url = SITEURL + '/horarioList';
		$.ajax({
			url: url,
			dataType: 'json',
			type: 'GET',
			success: function (result) {						
				//	$("#mdlEspere").modal("hide");								
				if (result.success){
					$("#cboHorario").append('<option value="0">Seleccione una opción</option>');						
					for (var i = 0; i < result.lst.length; i++) {
						var descRow = result.lst[i];
						$("#cboHorario")
							.append('<option value="' +	descRow.IdHor + '">' + descRow.hor_desc + '</option>');																
                    }
                    $("#mdlEspere").modal("hide");
				}
				else{
					//$("#mdlEspere").modal("hide");
					swal("Error", "Carga de Periodos", "error");
				}
				
			},
			error: function (jqXHR, textStatus, errorThrown) {
				console.log(textStatus);
				//$("#mdlEspere").modal("hide");
			}	
		});


}
function setcboPeriodo()
{
		var url = SITEURL + '/periodoList';
		$.ajax({
			url: url,
			dataType: 'json',
			type: 'GET',
			success: function (result) {						
				//	$("#mdlEspere").modal("hide");								
				if (result.success){
					$("#cboPeriodo").append('<option value="0">Seleccione una opción</option>');						
					for (var i = 0; i < result.lst.length; i++) {
						var descRow = result.lst[i];
						$("#cboPeriodo")
							.append('<option value="' +	descRow.IdPer + '">' + descRow.per_desc + '</option>');																
					}
				}
				else{
					//$("#mdlEspere").modal("hide");
					swal("Error", "Carga de Periodos", "error");
				}
				
			},
			error: function (jqXHR, textStatus, errorThrown) {
				console.log(textStatus);
				//$("#mdlEspere").modal("hide");
			}	
		});


}
function setcboPlantel()
{
		var url = SITEURL + '/plantelList';
		$.ajax({
			url: url,
			dataType: 'json',
			type: 'GET',
			success: function (result) {						
				//	$("#mdlEspere").modal("hide");								
				if (result.success){
					$("#cboPlantel").append('<option value="0">Seleccione una opción</option>');						
					for (var i = 0; i < result.lst.length; i++) {
						var descRow = result.lst[i];
						$("#cboPlantel")
							.append('<option value="' +	descRow.Idplan + '">' + descRow.plan_desc + '</option>');																
					}
				}
				else{
					//$("#mdlEspere").modal("hide");
					swal("Error", "Carga de Planteles", "error");
				}
				
			},
			error: function (jqXHR, textStatus, errorThrown) {
				console.log(textStatus);
				//$("#mdlEspere").modal("hide");
			}	
		});


}
function setcboCurso()
{        
		var url = SITEURL + '/cursoList';
		$.ajax({
			url: url,
			dataType: 'json',
			type: 'GET',
			success: function (result) {						
				//	$("#mdlEspere").modal("hide");								
				if (result.success){
					$("#cboCurso").append('<option value="0">Seleccione una opción</option>');						
					for (var i = 0; i < result.lst.length; i++) {
						var descRow = result.lst[i];
						$("#cboCurso")
							.append('<option value="' +	descRow.IdCur + '">' + descRow.cur_desc + '</option>');																
					}
				}
				else{
					//$("#mdlEspere").modal("hide");
					swal("Error", "Carga de Cursos", "error");
				}
				
			},
			error: function (jqXHR, textStatus, errorThrown) {
				console.log(textStatus);
				//$("#mdlEspere").modal("hide");
			}	
		});


}
