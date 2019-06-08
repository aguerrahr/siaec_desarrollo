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
                $pdf->line(35,675,295,675,$color,2);
                $pdf->line(305,675,570,675,$color,2);
              
            }
    </script>
    <div>      
        <table>
            <tr>                
                <td>                                                            
                    <img src="{{ public_path('/images/logo-coapa-azul.png') }}" alt="Logo" height="45px" width="175px" >
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
                        <input type="text" class="form-control form-control-sm" id="txt_monto_i" value="$ 1,900.00 M/N">                              
                    </td>
                    <td>                                                        
                        <label for="txt_plantel_i">Plantel:</label> 
                        <input type="text" class="form-control form-control-sm" id="txt_plantel_i" value="Coapa">                              
                    </td>
                    <td>
                        <label for="txt_curso_i">Curso:</label> 
                        <input type="text" class="form-control form-control-sm" id="txt_curso_i" value="COMIPEMS">                              
                    </td>
                    <td>
                        <label for="txt_periodo_i">Periodo:</label> 
                        <input type="text" class="form-control form-control-sm" id="txt_periodo_i" value="2019-01">      
                    </td>
                    <td>
                        <label for="txt_horario_i">Horario:</label> 
                        <input type="text" class="form-control form-control-sm" id="txt_horario_i" value="8:00-11:00">      
                    </td>
            </tr>
            <tr>
                    <td>
                        <div class="col-sm-12">
                            <label for="txt_id_alumno_i">ID:</label>                             
                            <input type="text" class="form-control form-control-sm" id="txt_id_alumno_i" value="19GUHA75">    
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
                        <input type="text" class="form-control form-control-sm" id="txt_ap_paterno_i" value="Guerra">    
                    </div>                                                
                </td>
                <td>
                    <div class="col-sm-12">
                        <label for="txt_ap_materno_i">Apellido Materno:</label>
                        <input type="text" class="form-control form-control-sm" id="txt_ap_materno_i" value="Hernández">
                    </div>
                </td>
                <td>
                    <div class="col-sm-12">
                        <label for="txt_nombre_i">Nombre:</label>
                        <input type="text" class="form-control form-control-sm" id="txt_nombre_i" value="Andrés Gilberto">
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
                <td>
                    <br>
                </td>
                <td>
                    <div class="col-sm-12">
                            <label for="txt_fh_emision">Fecha de emisión:</label>
                            <input type="text" class="form-control form-control-sm" id="txt_fh_emision" placeholder="" value="17-02-2019">
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
                <td colspan="2">
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
                    <div class="col-sm-12">
                        <label for="txt_fh_recibo">Fecha de Recibido:</label>
                        <input type="text" class="form-control form-control-sm" id="txt_fh_recibo" placeholder="" value="17-02-2019">
                    </div>                           
                </td>
                <td>
                    <label style="margin-top: 13px;text-align: center;" for="txt_op3">Nombre y Firma de quien recibe</label>
                </td>
            </tr>            
        </table> 
    </div>
</body>
</html>