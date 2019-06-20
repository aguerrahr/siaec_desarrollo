
$(document).ready(function() {
    $("#dtsGrales").hide();        
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
        $.get( ruta, function (data) {
            //console.log(data);
            if (!(data.data == null)){
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
                $("#txt_sexo").val(data.data.datcur_sexo);
                $("#txt_curp").val(data.data.datcur_curp);
                $("#fh_nac").val(data.data.datcur_fechnac);
                $("#txt_entnac").val(data.data.datcur_entnac);
                $("#txt_secundaria").val(data.data.datcur_secupro);
                $("#txt_op1").val(data.data.datcur_escopc1);
                $("#txt_op2").val(data.data.darcur_escopc2);
                $("#txt_op3").val(data.data.datcur_escopc3);                
                $("#cboObs option[value="+ data.data.datcur_obs +"]").attr("selected",true);
                //Trayectoria
                $("#lbl_plantel").html(data.data.plan_desc);
                $("#lbl_curso").html(data.data.cur_desc);
                $("#lbl_periodo").html(data.data.per_desc);
                $("#lbl_horario").html(data.data.hor_desc);
                $("#lbl_estatus").html(data.data.st_trayectoria);
                //Grupo
                $("#lbl_idalumno_gpo").html(data.data.alu_idalu);
                $("#lbl_plantel_gpo").html(data.data.plan_desc);
                $("#lbl_curso_gpo").html(data.data.cur_desc);
                $("#lbl_periodo_gpo").html(data.data.per_desc);
                $("#lbl_horario_gpo").html(data.data.hor_desc);
                
                $("#IdAlu").val(data.data.IdAlu);
                $("#IdCurPlan").val(data.data.IdCurPlan);
                $("#curpla_idhor").val(data.data.curpla_idhor);                             
                //Inicia Pago
                $("#lbl_plantel_pago").html(data.data.plan_desc);
                $("#lbl_curso_pago").html(data.data.cur_desc);
                $("#lbl_costo").html(data.dataPago.costo)
                //Termina Pago                
                setcboBancos();
                $("#dtsGrales").show();
                $('#mdlEspere').modal('hide');
                $('#mdlEspere').hide();
			    $('.modal-backdrop').hide();
            }    
            else{
                $('#mdlEspere').modal('hide');            
                $('#mdlEspere').hide();
			    $('.modal-backdrop').hide();
                swal("Error", "ID de Alumno inválido", "error");        
            }
        });
    }
    
});

$( "#btn_asign_gpo" ).click(function() {    
    var descCurso = $('#lbl_curso_gpo').html();
    var JSONObject = new Object();
    
    if (descCurso == 'COMIPEMS')
    {
        JSONObject.idCurPlan = $("#IdCurPlan").val();
        JSONObject.idHor = $("#curpla_idhor").val();
        JSONObject.idAlumno = $("#IdAlu").val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var ruta = SITEURL +  '/servicios/getIdGposHorAlu';
        var data = JSON.stringify(JSONObject);
        $('#btn_asign_gpo').html('Enviando..');
        $.ajax({
            data: data,
            url: ruta,
            type: "POST",
            dataType: 'json',
            contentType: "application/json",
            success: function (data) {
              if (data.success){
                  $("#lbl_grupo_gpo").html(data.idGpo);                                           
                  $('#btn_asign_gpo').html('Asignar Grupo');
                  $('#btn_asign_gpo').hide();                  
                  $('#tbl_pago_group').show();
                  swal("¡Operación exitosa!", data.message, "success"); 
              }else{
                  swal("Error", data.message, "error");
                  $('#btn_asign_gpo').html('Asignar Grupo');
              }
            },
            error: function (request, message, error) {
                console.log('Error:', error);					  
                $('#btn_asign_gpo').html('Asignar Grupo');
                swal("Error", "Error inesperado consulte al administrador", "warning");
            }
        });
    }
});

function setcboBancos()
{
		var url = SITEURL + '/bancosList';
		$.ajax({
			url: url,
			dataType: 'json',
			type: 'GET',
			success: function (result) {						
				//	$("#mdlEspere").modal("hide");								
				if (result.success){
					$("#cboBancos").append('<option value="0">Seleccione una opción</option>');						
					for (var i = 0; i < result.lst.length; i++) {
						var descRow = result.lst[i];
						$("#cboBancos")
							.append('<option value="' +	descRow.IdBan + '">' + descRow.ban_nomban + '</option>');																
					}
				}
				else{
					//$("#mdlEspere").modal("hide");
					swal("Error", "Carga de Bancos", "error");
				}
				
			},
			error: function (jqXHR, textStatus, errorThrown) {
				console.log(textStatus);
				//$("#mdlEspere").modal("hide");
			}	
		});


}