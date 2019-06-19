
$(document).ready(function() {
	$('#flash-overlay-modal').modal();
	
	//$('#btn_imp_formatos').hide();
	
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
            //detener = false;
        }
        else {
            detener = true;
        }
	});
	$('#btn_imp_formatos').on('click', function (e) {
		$('#imprimir-modal').modal('show');
	});
	$('#mdlEspere').modal('show');
	set_Cusrsos();        
	$("#txt_ap_paterno").rules("add", {
		required: true,
		messages: {
			required: '<div class="text-error">El campo Apellido Paterno es obligatorio</div>'
		}
	});
	$("#txt_ap_materno").rules("add", {
		required: true,
		messages: {
			required: '<div class="text-error">El campo Apellido Materno es obligatorio</div>'
		}
	});
	$("#txt_nombre").rules("add", {
		required: true,
		messages: {
			required: '<div class="text-error">El campo Nombre es obligatorio</div>'
		}
	});
	$("#txt_calle").rules("add", {
		required: true,
		messages: {
			required: '<div class="text-error">El campo Calle es obligatorio</div>'
		}
	});
	$("#txt_numero").rules("add", {
		required: true,
		messages: {
			required: '<div class="text-error">El campo Número es obligatorio</div>'
		}
	});
	$("#txt_colonia").rules("add", {
		required: true,
		messages: {
			required: '<div class="text-error">El campo Colonia es obligatorio</div>'
		}
	});
	$("#txt_alcaldia").rules("add", {
		required: true,
		messages: {
			required: '<div class="text-error">El campo Alcaldía es obligatorio</div>'
		}
	});
	$("#txt_entidad").rules("add", {
		required: true,
		messages: {
			required: '<div class="text-error">El campo Entidad es obligatorio</div>'
		}
	});
	$("#txt_cp").rules("add", {
		required: true,
		messages: {
			required: '<div class="text-error">El campo CP es obligatorio</div>'
		}
	});
	$("#txt_tel").rules("add", {
		required: true,
		messages: {
			required: '<div class="text-error">El campo Teléfono es obligatorio</div>'
		}
	});

	$("#txt_celular").rules("add", {
		required: true,
		messages: {
			required: '<div class="text-error">El campo Celular es obligatorio</div>'
		}
	});
	$("#txt_tutor").rules("add", {
		required: true,
		messages: {
			required: '<div class="text-error">El campo Tel. Tutor es obligatorio</div>'
		}
	});
	$("#txt_email").rules("add", {
		required: true,
		messages: {
			required: '<div class="text-error">El campo Email es obligatorio</div>'
		}
	});
	$("#txt_sexo").rules("add", {
		required: true,
		messages: {
			required: '<div class="text-error">El campo Sexo es obligatorio</div>'
		}
	});
	$("#txt_curp").rules("add", {
		required: true,
		messages: {
			required: '<div class="text-error">El campo CURP es obligatorio</div>'
		}
	});
	$("#fh_nac").rules("add", {
		required: true,
		messages: {
			required: '<div class="text-error">El campo Fecha de Nacimiento es obligatorio</div>'
		}
	});
	$("#txt_entnac").rules("add", {
		required: true,
		messages: {
			required: '<div class="text-error">El campo Entidad de Nacimiento es obligatorio</div>'
		}
	});

	$("#txt_secundaria").rules("add", {
		required: true,
		messages: {
			required: '<div class="text-error">El campo Secundaria es obligatorio</div>'
		}
	});	
	$("#txt_op1").rules("add", {
		required: true,
		messages: {
			required: '<div class="text-error">Debe indicar una Escuela</div>'
		}
	});
});


$( "#btn_imp_prereg" ).click(function() {
	//
	window.open(SITEURL + '/alumno/preregcurso/preregpdf/' +  $('#IdAlu').val() , '_blank');
});
$( "#btn_imp_formapago" ).click(function() {
	//
	window.open(SITEURL + '/alumno/preregcurso/fichapagopdf/' +  $('#IdAlu').val() , '_blank');
});

//

$( "#btn_cursos" ).click(function() {
	$('#cursos-modal').modal('show');
});
$( "#btn_selectCurso" ).click(function() {
	var queCurso = $('input:radio[name=rbIdCurso]:checked').val();		
	$('#IdCurPlanSeleccionado').val(queCurso);
	$("#queCurso").html($("#lblCur_" + queCurso).html());	
	$("#quePla").html($("#lblPla_" + queCurso).html());
	$("#quePer").html($("#lblPer_" + queCurso).html());
	$("#queHor").html($("#lblHor_" + queCurso).html());	
	$('#cursos-modal').modal('hide');
	detener = false;
});

$( "#btn_registrar" ).click(function() {
   
  });
function set_Cusrsos()
{
	var url = SITEURL + "/planescolar/lista";
	$.ajax({
		url : url,
		type : 'GET',
		contentType : "application/json;charset=utf-8",
		//data : JSON.stringify(filter),
		success : function(result) {
			//console.log('result: ' + JSON.stringify(result));					
			if (result.status = 1)
			{
				var iCont = 1;
				for (var i = 0; i < result.data.original.recordsTotal; i++) {
					var curso = result.data.original.data[i];					
					var IdCurso = "<td>" +  '<input type="radio" id="RbIdCurPlan_' + curso.IdCurPlan + '" name="rbIdCurso"  value="' + curso.IdCurPlan + '">' + "</td>";
					var nbCurso = '<td>' + '<div id= "lblCur_' + curso.IdCurPlan + '">'  + curso.cur_desc + '</div>' + '</td>';
					var plantel = '<td id= "lblPla_' + curso.IdCurPlan + '">' + '' + curso.plan_desc + '' + '</td>';
					var periodo = '<td id= "lblPer_' + curso.IdCurPlan + '">' + '' + curso.per_desc + '' + '</td>';
					var horario = '<td id= "lblHor_' + curso.IdCurPlan + '">' + '' + curso.hor_desc + '' + '</td>';																					
					var row = "<tr>" + IdCurso + nbCurso + plantel + periodo + horario + "</tr>"
					$('#tblCursosBody').append(row);
					iCont = iCont + i;
				}
			}
			$('#mdlEspere').modal('hide');
			$('#mdlEspere').hide();
			$('.modal-backdrop').hide();
		},
		error : function(request, message, error) {
			$("#mdlEspere").modal("hide");
			console.error('WSUsuarioCanal: ' + message);
		}
	});
}
