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
                //$pdf->line(35,400,295,400,$color,2);
                $pdf->line(250,420,450,420,$color,2);
              
            }
    </script>
    <div>      
        <table>
            <tr>                
                <td>                                                            
                    <img src="http://cursounamcoapa.com/images/logo-coapa-azul.png" alt="Logo" height="45px" width="175px" >
                </td>>
                <td style = "text-align: right;"  colspan="4">
                    <h1>Formato de pago
                </td>
            </tr>
            <tr>
                <td colspan="5"> 
                    <hr style=" border: 2px solid #ffc107;">
                </td>
            </tr>
            <tr>
                    <td>                                                        
                        <label for="txt_monto_i">Monto de Pago:</label> 
                        <input type="text" class="form-control form-control-sm" id="txt_monto_i" value="{{$dtsalu->costo}}">                              
                    </td>
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
                    <td colspan="4">
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
                     <br>  
                </td>
                <td>
                    <br>
                </td>
                <td>
                    <br>
                </td>   
            </tr>        
            <tr>
                <td>
                    <br>
                </td>
                <td>
                    <br>
                </td>
                <td>
                    <br>
                </td>                     
            </tr>
            <tr>
                <td>
                    <div class="col-sm-12">
                            <label for="txt_num_suc">Núm de Suc:</label>
                            <input type="text"  style="text-align:center;color:#000000" class="form-control form-control-sm" id="txt_num_suc" placeholder=""  value="144824">
                    </div>
                </td>
                <td>
                    <div class="col-sm-12">
                            <label for="txt_suc">Suc:</label>
                            <input type="text"  style="text-align:center;color:#000000" class="form-control form-control-sm" id="txt_suc" placeholder=""  value="4087">
                    </div>
                </td>
                <td>
                    <div class="col-sm-12">
                            <label for="txt_fh_emision">Fecha de emisión:</label>
                            <input type="text" class="form-control form-control-sm" id="txt_fh_emision" placeholder="" value="{{$dtsalu->dt_emi}}">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <br>
                </td>
                <td>
                    <br>    
                </td>
                <td>
                    <br>
                </td>
            </tr>
            <tr>
                <td>
                    <br>
                </td>
                <td>
                    <br>
                </td>
                <td>
                    <br>
                </td>                
            </tr>
            <tr>
                <td>
                    <br>
                </td>
                <td colspan="2"></td>
            </tr>
           
            <tr>                
                <td>
                    <div class="col-sm-8">
                        <label for="txt_fh_recibo">Fecha de Recibido:</label>
                        <input type="text" style="text-align:center;color:#ffffff" class="form-control form-control-sm" id="txt_fh_recibo" placeholder="" value="________________________">
                    </div>                           
                </td>
                <td>
                    <label style="margin-top: 18px;text-align: center;" for="txt_op3">Nombre y Firma de quien recibe</label>                    
                </td>
                <td>
                    <label style="margin-top: 18px;text-align: center;" for="txt_op3">Junto con este formato se deberá entregar el voucher/comprobante de pago</label>
                </td>
            </tr>
            <tr>
                <td>
                    <br>
                </td>
            </tr>
            <tr>
                <td colspan="3"></td>
            </tr>
            <tr>
                    <td>
                        <br>
                    </td>
                </tr>            
            <tr>
                    <td style = "text-align: center;">
                        <img src="http://cursounamcoapa.com/images/banamex.png" alt="Logo" height="45px" width="165px" >
                    </td>
                    <td style = "text-align: left;">
                        {{-- <img src="http://cursounamcoapa.com/images/banorte.jpg" alt="Logo" height="45px" width="175px" > --}}                        
                        <pre  style = "margin-left: -1.5cm; text-align: left; font-family: Arial, Helvetica, sans-serif;font-size: 10px; font-weight: bold;">
                        TRANSFERENCIA INTERBANCARIA
                        CLAVE: 002180408701448245
                            -Con los datos del alumno
                            -Llevar impreso el comprobante
                        REENVIAR COMPROBANTE AL SIGUINETE CORREO:
                        institutocoapatransferencias@gmail.com
                        </pre>
                    </td>
                    <td colspan="2"></td>
                    {{-- <td>
                        <img src="http://cursounamcoapa.com/images/bbva.jpg" alt="Logo" height="45px" width="175px" >
                    </td>
                    <td>
                        <img src="http://cursounamcoapa.com/images/santander.jpg" alt="Logo" height="45px" width="175px" >
                    </td> --}}
                </tr>            
        </table> 
    </div>
</body>
</html>