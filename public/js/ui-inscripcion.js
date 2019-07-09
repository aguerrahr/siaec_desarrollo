
$(document).ready(function() {
    $("#dtsGrales").hide();    
    var objLimite = .25;    
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
                $("#txt_email_pt").val(data.data.datcur_email_pt);
                $("#txt_sexo").val(data.data.datcur_sexo=="M"?"Masculino":"Femenino");
                $("#txt_curp").val(data.data.datcur_curp);
                $("#fh_nac").val(data.data.datcur_fechnac);
                $("#txt_entnac").val(data.data.datcur_entnac);
                $("#txt_secundaria").val(data.data.datcur_secupro);
                $("#txt_op1").val(data.data.datcur_escopc1);
                $("#txt_op2").val(data.data.darcur_escopc2);
                $("#txt_op3").val(data.data.datcur_escopc3);                
                $("#cboObs option[value="+ data.data.datcur_obs +"]").attr("selected",true);            
                $("#datcur_folescban").val(data.data.datcur_folescban);                    
                if (data.data.datcur_tpescuela == "Publica"){
                    $("#txt_secundaria_tp_pub").prop("checked", true);
                }
                else{
                    $("#txt_secundaria_tp_priv").prop("checked", true);
                }                      
                $("#txt_secundaria_num").val(data.data.datcur_numesc);
                //Trayectoria                
                $("#IdTra").val(data.data.IdTra);
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
                $("#cur_tipcur").val(data.data.cur_tipcur);
                                              
                $("#IdAlu").val(data.data.IdAlu);
                $("#IdCurPlan").val(data.data.IdCurPlan);
                $("#curpla_idhor").val(data.data.curpla_idhor);                             
                //Inicia Pago
                $("#IdCosto").val(data.dataPago.IdCos);
                $("#lbl_plantel_pago").html(data.data.plan_desc);
                $("#lbl_curso_pago").html(data.data.cur_desc);
                $("#lbl_costo").html(data.dataPago.costo)                
                //Termina Pago                

                if (data.data.cur_tipcur == "A"){
                    $("#cboAreas").show();
                    setcboAreas(data.areaList);   
                }
                else{
                    $("#cboAreas").hide();
                }
                setcboBancos();		
               	    
            }    
            else{
                $('#mdlEspere').modal('hide');            
                $('#mdlEspere').hide();
			    $('.modal-backdrop').hide();
                swal("Error", "ID de Alumno inválido", "error");        
            }
        })
            .done(function(data,status,xhr) {                
                 
                $("#dtsGrales").show();              
            })
            .fail(function(data,status,xhr) {
                console.log('Error:', error);					                  
                swal("Error", "Error inesperado consulte al administrador", "warning");
            })
            .always(function(data,status,xhr) {
                $('.modal-backdrop').hide();
                $('#mdlEspere').modal('hide');
                $('#mdlEspere').hide();
            });
    }
    
});

$( "#btn_asign_gpo" ).click(function() {    
    var descCurso = $('#lbl_curso_gpo').html();
    var JSONObject = new Object();    
    //descCurso.indexOf('COMIPEMS',0)!=-1
    // if ($("#cur_tipcur").val()=="C")
    // {
        JSONObject.idCurPlan = $("#IdCurPlan").val();
        JSONObject.idHor = $("#curpla_idhor").val();
        JSONObject.idAlumno = $("#IdAlu").val();
        JSONObject.cur_tipcur = $("#cur_tipcur").val();
        JSONObject.gpo_area = $("#cboAreas option:selected").text();
            
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
                  set_Calendario();
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
    // }
});

$( "#btn_asign_cal" ).click(function() {
	$('#cal-modal').modal('show');
});

$( "#btn_selectCal" ).click(function() {
	var queCal = $('input:radio[name=rbIdCal]:checked').val();		
    $('#IdCalSeleccionado').val(queCal);    
	$("#queAnio").html($("#lblAnio_" + queCal).html());	
	$("#queMes").html($("#lblMes_" + queCal).html());
	$("#queCiclo").html($("#lblCiclo_" + queCal).html());
    $('#cal-modal').modal('hide');
});

$("#cboBancos").change(function() {
    cargaSucursal();    		
});

$("#btn_asign_pago").click(function() {
    var JSONObject = new Object();   
    JSONObject.IdPag = 0;
    JSONObject.pag_idtraalu = $("#IdTra").val();
    JSONObject.pag_idcos = $("#IdCosto").val();
    JSONObject.pag_idcal = $("#IdCalSeleccionado").val();
    JSONObject.pag_idsuc = $("#cboSucursal").val();
    JSONObject.pag_folio = $("#datcur_folescban").val();
    JSONObject.pag_folaut = $("#txt_autorizacion").val();
    JSONObject.pag_fechpag = $("#fh_Pago").val();
    JSONObject.pag_fechent = $("#fh_Entrega").val();    
    var ruta = SITEURL +  '/pagos/pago';
    var data = JSON.stringify(JSONObject);
    $('#btn_asign_pago').html('Enviando..');
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        data: data,
        url: ruta,
        type: "POST",
        dataType: 'json',
        contentType: "application/json",
        success: function (data) {
          if (data.success){
              $('#btn_asign_pago').hide();
              $('#btn_asign_cal').hide();
              swal("¡Operación exitosa!", data.message, "success"); 
          }else{
              swal("Error", data.message, "error");
              $('#btn_asign_gpo').html('Asignar Pago');
          }
        },
        error: function (request, message, error) {
            console.log('Error:', error);					  
            $('#btn_asign_pago').html('Asignar Pago');
            swal("Error", "Error inesperado consulte al administrador", "warning");
        }
    });

    

});



function setcboAreas(arealist)
{    				
    $("#cboAreas").append('<option value="0">Seleccione una opción</option>');	
    for (var i = 0; i < arealist.length; i++) {
        var descRow = arealist[i];
        $("#cboAreas")
            .append('<option value="' +	descRow.IdGpo + '">' + descRow.gpo_area + '</option>');																
    }
        

}

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
function set_Calendario()
{
	var url = SITEURL + "/calList";
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
                //result.data.original.recordsTotal
				for (var i = 0; i < result.lst.length; i++) {
                    var calendario = result.lst[i];			
                    var fh_cal = calendario.full_cal.split('-');
                    var Anio = fh_cal[0];
                    var Mes = fh_cal[1];
                    var Ciclo = fh_cal[2];

					var IdCal = "<td>" +  '<input type="radio" id="RbIdCurPlan_' + calendario.IdCal + '" name="rbIdCal"  value="' + calendario.IdCal + '">' + "</td>";
					var nbcalendario = '<td>' + '<div id= "lblCal_' + calendario.IdCal + '">'  + calendario.full_cal + '</div>' + '</td>';
					var _anio = '<td id= "lblAnio_' + calendario.IdCal + '">' + '' + Anio + '' + '</td>';
					var _mes = '<td id= "lblMes_' + calendario.IdCal + '">' + '' + Mes + '' + '</td>';
					var _ciclo = '<td id= "lblCiclo_' + calendario.IdCal + '">' + '' + Ciclo + '' + '</td>';																					
					var row = "<tr>" + IdCal + _anio + _mes + _ciclo + "</tr>"
					$('#tblCalendarioBody').append(row);
                    iCont = iCont + i;                    
				}
			}
		},
		error : function(request, message, error) {
			$("#mdlEspere").modal("hide");
			console.error('WSUsuarioCanal: ' + message);
		}
	});
}

function cargaSucursal(){		
    var idBanco = $("#cboBancos").val();		
    $("#mdlEspere").modal("show");
    

    var url = SITEURL + "/sucList/" + idBanco;
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
                //result.data.original.recordsTotal
                $("#cboSucursal").empty().append('<option value="0">Seleccione una opción</option>');						
                for (var i = 0; i < result.lst.length; i++) {
                    var descRow = result.lst[i];
                    $("#cboSucursal")
                        .append('<option value="' +	descRow.IdSuc + '">' + descRow.suc_desc + '</option>');																
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
};
