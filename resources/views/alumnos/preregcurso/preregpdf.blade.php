<?php
    ini_set('memory_limit','-1');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">        
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    
    <title>Pre-registro</title>    
    <style type="text/css">
        @page {
            /* size: 21cm 29.7cm; */
            margin-top: 1cm;
            margin-left: 1cm;
            margin-bottom: 0cm;
            
        }
        h1{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 25px;            
        }
        table{
            table-layout: fixed;
            width: 100%;        
            word-wrap: break-word;
        }

        th, td {
            /* border: 1px solid blue;  */
            width: 500px;
            word-wrap: break-word;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 15px;
        }

        table th, table td {
            overflow: hidden;
        }

    </style>
</head>
<body>
    <script type="text/php">
            if (isset($pdf)) {
                $x = 250;
                $y = 10;
                //$text = "{{asset('/images/logo-coapa-azul.png')}}";//"{{ base_path() }}/public/images/logo-coapa-azul.png"; //"Página {PAGE_NUM} de {PAGE_COUNT}";
                //$font = null;
                $font = $fontMetrics->getFont("helvetica", "bold");
                $size = 14;
                $color = array(255,0,0);
                $word_space = 0.0;  //  default
                $char_space = 0.0;  //  default
                $angle = 0.0;   //  default
                //$pdf->page_text($x, $y, $text, $font, $size, $color, $word_space, $char_space, $angle);
                $color = array(0,0,0);
                $pdf->line(35,700,295,700,$color,2);
                $pdf->line(305,700,570,700,$color,2);
                //$image1= {{ base_path() }}/public/images/l.png"; //"{{ base_path() }}/images/logo-coapa-azul.png";
                //$pdf->image($image1,"png", 0, 0, 50, 25);
               
            }
    </script>
    <div>        
        <table>
            <tr>                
                <td>                    
                    <img src="http://cursounamcoapa.com/images/logo-coapa-azul.png" alt="Logo" height="45px" width="175px" >
                </td>>
                <td style = " padding-left: 100px;"  colspan="3">
                    <h1>Pre-registro
                </td>
            </tr>
            <tr>
                <td colspan="5"> 
                    <hr style=" border: 2px solid #ffc107;">
                </td>
            </tr>
            <tr>
                    <td>                                                        
                        <label for="txt_plantel_i">Plantel:</label> 
                        <input type="text" class="form-control form-control-sm" id="txt_plantel_i" value="{{$dtsalu->plan_desc}}">                              
                    </td>
                    <td>
                        <label for="txt_curso_i">Curso:</label> 
                        <input type="text" class="form-control form-control-sm" id="txt_curso_i" value="{{$dtsalu->cur_desc}}">                              
                    </td>
                    <td>
                        <label for="txt_periodo_i">Periodo:</label> 
                        <input type="text" class="form-control form-control-sm" id="txt_periodo_i" value="{{$dtsalu->per_desc}}">      
                    </td>
                    <td>
                        <label for="txt_horario_i">Horario:</label> 
                        <input type="text" class="form-control form-control-sm" id="txt_horario_i" value="{{$dtsalu->hor_desc}}">      
                    </td>
            </tr>
            <tr>
                    <td>
                        <div class="col-sm-12">
                            <label for="txt_id_alumno_i">ID:</label>                             
                            <input type="text" class="form-control form-control-sm" id="txt_id_alumno_i" value="{{$dtsalu->alu_idalu}}">    
                        </div>        
                    </td>
                    <td colspan="3">
                </tr>
        </table>
        <br>
        <table>                                    
            
            <tr>
                <td>    
                    <div class="col-sm-12">
                        <label for="txt_ap_paterno_i">Apellido Paterno:</label>                             
                        <input type="text" class="form-control form-control-sm" id="txt_ap_paterno_i" value="{{$dtsalu->alu_apepat}}">    
                    </div>                                                
                </td>
                <td>
                    <div class="col-sm-12">
                        <label for="txt_ap_materno_i">Apellido Materno:</label>
                        <input type="text" class="form-control form-control-sm" id="txt_ap_materno_i" value="{{$dtsalu->alu_apemat}}">
                    </div>
                </td>
                <td>
                    <div class="col-sm-12">
                        <label for="txt_nombre_i">Nombre:</label>
                        <input type="text" class="form-control form-control-sm" id="txt_nombre_i" value="{{$dtsalu->alu_nom}}">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                        <div class="col-sm-12">
                                <label for="txt_calle_i">Calle:</label>
                                <input type="text" class="form-control form-control-sm" id="txt_calle_i" placeholder="" value="{{$dtsalu->datcur_nomcalle}}">
                        </div>
                </td>
                <td>
                        <div class="col-sm-12">
                                <label for="txt_numero_i">Numero:</label>
                                <input type="text" class="form-control form-control-sm" id="txt_numero_i" placeholder="" value="{{$dtsalu->datcur_numcalle}}">
                        </div>

                </td>
                <td>
                        <div class="col-sm-12">
                                <label for="txt_colonia_i">Colonia:</label>
                                <input type="text" class="form-control form-control-sm" id="txt_colonia_i" placeholder="" value="{{$dtsalu->datcur_colonia}}">
                        </div>
                </td>   
            </tr>        
            <tr>
                <td>
                        <div class="col-sm-12">
                                <label for="txt_alcaldia_i">Alcaldía:</label>                                    
                                <input type="text" class="form-control form-control-sm" id="txt_alcaldia_i" placeholder="" value="{{$dtsalu->datcur_alcaldia}}">                            
                        </div>
                </td>
                <td>
                        <div class="col-sm-12">
                                <label for="txt_entidad_i">Entidad Federativa:</label>
                                <input type="text" class="form-control form-control-sm" id="txt_entidad_i" placeholder="" value="{{$dtsalu->datcur_entidadfed}}">
                        </div>
                </td>
                <td>
                        <div class="col-sm-12">
                                <label for="txt_cp_i">Código Postal:</label>
                                <input type="text" class="form-control form-control-sm" id="txt_cp_i" placeholder="" value="{{$dtsalu->datcur_cp}}">
                        </div>    
                </td>                     
            </tr>
            <tr>
                <td>
                        <div class="col-sm-12">
                                <label for="txt_tel_i">Teléfono de casa:</label>
                                <input type="text" class="form-control form-control-sm" id="txt_tel_i" placeholder="" value="{{$dtsalu->datcur_telcasa}}">                            
                        </div>
                </td>
                <td>
                        <div class="col-sm-12">
                                <label for="txt_celular_i">Número Celular:</label>
                                <input type="text" class="form-control form-control-sm" id="txt_celular_i" placeholder="" value="{{$dtsalu->datcur_celular}}">
                        </div>
                </td>
                <td>
                        <div class="col-sm-12">
                                <label for="txt_tutor_i">Teléfono padre/tutor:</label>
                                <input type="text" class="form-control form-control-sm" id="txt_tutor_i" placeholder="" value="{{$dtsalu->datcur_teltutor}}">
                        </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="col-sm-12">
                            <label for="txt_email_i">E-mail:</label>
                            <input type="text" class="form-control form-control-sm" id="txt_email_i" placeholder="" value="{{$dtsalu->datcur_email}}">                      
                    </div>                        
                </td>
                <td>
                    <div class="col-sm-12">
                            <label for="txt_email_pt_i">E-mail padre/tutor:</label>
                            <input type="text" class="form-control form-control-sm" id="txt_email_pt_i" placeholder="" value="{{$dtsalu->datcur_email_pt}}">                      
                    </div>
                        
                </td>
                <td>
                    <div class="col-sm-12">
                            <label for="txt_sexo_i">Sexo:</label>
                            <input type="text" class="form-control form-control-sm" id="txt_sexo_i" placeholder="" value="{{$dtsalu->datcur_sexo}}">
                    </div>     
                </td>
            </tr>
            <tr>
                <td>
                    <div class="col-sm-12">
                            <label for="txt_curp_i">CURP:</label>
                            <input type="text" class="form-control form-control-sm" id="txt_curp_i" placeholder="" value="{{$dtsalu->datcur_curp}}">
                    </div>
                </td>
                <td>
                    <div class="col-sm-12">
                            <label >Fecha de nacimiento</label>
                            <input type="text" class="form-control form-control-sm" id="txt_fh_nac" placeholder="" value="{{$dtsalu->datcur_fechnac}}">
                    </div>
                </td>
                <td>
                    <div class="col-sm-12">
                            <label for="txt_entnac_i">Entidad de nacimiento:</label>
                            <input type="text" class="form-control form-control-sm" id="txt_entnac_i" placeholder="" value="{{$dtsalu->datcur_entnac}}">
                    </div>                
                </td>                
            </tr>
            <tr>
                <td>
                    <div class="col-sm-12">
                        <label for="txt_secundaria_tp_i">Tipo de secundaria:</label>
                        <input type="text" class="form-control form-control-sm" id="txt_secundaria_tp_i" placeholder="" value="{{$dtsalu->datcur_tpescuela}}">
                    </div>   
                </td>
                <td>
                    <div class="col-sm-12">
                        <label for="txt_secundaria">Secundaria de Procedencia:</label>
                        <input type="text" class="form-control form-control-sm" id="txt_secundaria_i" placeholder="" value="{{$dtsalu->datcur_secupro}}">
                    </div>    
                </td> 
                <td>
                    <div class="col-sm-12">
                        <label for="txt_secundaria_num_i">No. Secundaria:</label>
                        <input type="text" class="form-control form-control-sm" id="txt_secundaria_num_i" placeholder="" value="{{$dtsalu->datcur_numesc}}">
                    </div>     
                </td>                
            </tr>
            <tr>
                <td colspan="2">
                    <div class="col-sm-12">
                        <label>Escuela a la que desea ingresar:</label>
                    </div>
                </td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td>
                    <div class="col-sm-12">
                        <label for="txt_op1_i">Opción 1:</label>
                        <input type="text" class="form-control form-control-sm" id="txt_op1_i" placeholder="" value="{{$dtsalu->datcur_escopc1}}">
                    </div>
                </td>
                <td>
                    <div class="col-sm-12">
                        <label for="txt_op2_i">Opción 2:</label>
                        <input type="text" class="form-control form-control-sm" id="txt_op2_i" placeholder="" value="{{$dtsalu->darcur_escopc2}}">
                    </div>                           
                </td>
                <td>
                    <div class="col-sm-12">
                        <label for="txt_op3">Opción 3:</label>
                        <input type="text" class="form-control form-control-sm" id="txt_op3_i" placeholder="" value="{{$dtsalu->datcur_escopc3}}">
                    </div>
                </td>
            </tr>        
            <tr>
                <td colspan="3">
                    <div class="col-sm-6">
                        <label for="txt_op1_i">Cómo se enteró del centro de asesioría:</label>
                        <input type="text" class="form-control form-control-sm" id="txt_obs" placeholder="" value="{{$dtsalu->datcur_obs}}">
                    </div>
                </td>
            </tr>    
        </table> 
        <br>
        <table style="margin-top: 50px;">                
                <tr>
                    {{-- <td style="width: 100px; border: 1px solid blue;"></td> --}}
                    <td style="width: 700px;text-align: center;">
                        Nombre y firma del responsable del Instituto
                    </td>
                    <td style="width: 700px;text-align: center;">
                        Nombre y firma del responsable del Alumno
                    </td>
                    {{-- <td style="width: 100px; border: 1px solid blue;"></td> --}}
                </tr>
        </table>       
    </div>
</body>
</html>