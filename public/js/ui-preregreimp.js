
$(document).ready(function() {
    $("#dtsGrales").hide();        
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
	$("#txt_email_pt").rules("add", {
		required: true,
		messages: {
			required: '<div class="text-error">El campo Email del tutor es obligatorio</div>'
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
$( "#btn_buscar" ).click(function() {
    var idAlumno = $("#txt_idalumno").val();
    if (idAlumno == ""){
        swal("Error", "Indique el Id del Alumno", "error");        
        //$("#dtsGrales").show();
    }
    else{
        var ruta = SITEURL +  '/alumnos/inscripciones/' + idAlumno;
        $('#mdlEspere').modal('show');
        
        $.get( ruta, function(data,status,xhr) {
            $('#IdAlu').val(data.data.IdAlu);
            $("#txt_ap_paterno").val(data.data.alu_apepat);
            $("#txt_ap_materno").val(data.data.alu_apemat);
            $("#txt_nombre").val(data.data.alu_nom);
            $("#txt_calle").val(data.data.datcur_nomcalle);
            $("#txt_numero").val(data.data.datcur_numcalle);
            $("#txt_colonia").val(data.data.datcur_colonia);
            $("#txt_alcaldia").val(data.data.datcur_alcaldia);
            $("#txt_entidad").val(data.data.datcur_entidadfed);
            $("#txt_cp").val(data.data.datcur_cp);
            $("#txt_tel").val(data.data.datcur_telcasa);
            $("#txt_celular").val(data.data.datcur_celular);
            $("#txt_tutor").val(data.data.datcur_teltutor);
            $("#txt_email").val(data.data.datcur_email);
            $("#txt_email_pt").val(data.data.datcur_email_pt);
            //$("#txt_sexo").val(data.data.datcur_sexo=="M"?"Masculino":"Femenino");
            $("#txt_curp").val(data.data.datcur_curp);
            $("#fh_nac").val(data.data.datcur_fechnac);
            $("#txt_entnac").val(data.data.datcur_entnac);
            $("#txt_secundaria").val(data.data.datcur_secupro);
            $("#txt_op1").val(data.data.datcur_escopc1);
            $("#txt_op2").val(data.data.darcur_escopc2);
            $("#txt_op3").val(data.data.datcur_escopc3);                

            $("#cboObs option[value="+ data.data.datcur_obs +"]").attr("selected",true);
            $("#cboSexo option[value="+ data.data.datcur_sexo +"]").attr("selected",true);
            
            
            

            if (data.data.datcur_tpescuela == "Publica"){
                $("#txt_secundaria_tp_pub").prop("checked", true);
            }
            else{
                $("#txt_secundaria_tp_priv").prop("checked", true);
            }                      
            $("#txt_secundaria_num").val(data.data.datcur_numesc);
                                                
            
          })
            .done(function(data,status,xhr) {
                $("#dtsGrales").show();
            })
            .fail(function(data,status,xhr) {
                console.log('Error:', error);					  
                $('#btn-save').html('Aceptar');
                swal("Error", "Error inesperado consulte al administrador", "warning");
            })
            .always(function(data,status,xhr) {
				$('#mdlEspere').modal('hide');
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
