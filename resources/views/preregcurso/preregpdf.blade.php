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
            font-size: 35px;
        }
        table{
            table-layout: fixed;
            width: 100%;        
            word-wrap: break-word;
        }

        th, td {
            /* border: 1px solid blue; */
            width: 500px;
            word-wrap: break-word;
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
                $text = "Página {PAGE_NUM} de {PAGE_COUNT}";
                //$font = null;
                $font = $fontMetrics->getFont("helvetica", "bold");
                $size = 14;
                $color = array(255,0,0);
                $word_space = 0.0;  //  default
                $char_space = 0.0;  //  default
                $angle = 0.0;   //  default
                //$pdf->page_text($x, $y, $text, $font, $size, $color, $word_space, $char_space, $angle);
                $color = array(0,0,0);
                $pdf->line(70,540,350,540,$color,2);
                $pdf->line(430,540,710,540,$color,2);
               
            }
    </script>
    <div>
        <h1 style="text-align: center;">Pre-registro
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
                        <div class="col-sm-12">
                                <label for="txt_calle_i">Calle:</label>
                                <input type="text" class="form-control form-control-sm" id="txt_calle_i" placeholder="" value="Cándido Aviles">
                        </div>
                </td>
                <td>
                        <div class="col-sm-12">
                                <label for="txt_numero_i">Numero:</label>
                                <input type="text" class="form-control form-control-sm" id="txt_numero_i" placeholder="" value="10">
                        </div>

                </td>
                <td>
                        <div class="col-sm-12">
                                <label for="txt_colonia_i">Colonia:</label>
                                <input type="text" class="form-control form-control-sm" id="txt_colonia_i" placeholder="" value="Constitución de 1917">
                        </div>
                </td>   
            </tr>        
            <tr>
                <td>
                        <div class="col-sm-12">
                                <label for="txt_alcaldia_i">Alcaldía:</label>                                    
                                <input type="text" class="form-control form-control-sm" id="txt_alcaldia_i" placeholder="" value="Magdalena Contreras">                            
                        </div>
                </td>
                <td>
                        <div class="col-sm-12">
                                <label for="txt_entidad_i">Entidad Federativa:</label>
                                <input type="text" class="form-control form-control-sm" id="txt_entidad_i" placeholder="" value="Ciudad de México">
                        </div>
                </td>
                <td>
                        <div class="col-sm-12">
                                <label for="txt_cp_i">Código Postal:</label>
                                <input type="text" class="form-control form-control-sm" id="txt_cp_i" placeholder="" value="09574">
                        </div>    
                </td>                     
            </tr>
            <tr>
                <td>
                        <div class="col-sm-12">
                                <label for="txt_tel_i">Teléfono de casa:</label>
                                <input type="text" class="form-control form-control-sm" id="txt_tel_i" placeholder="" value="56134872">                            
                        </div>
                </td>
                <td>
                        <div class="col-sm-12">
                                <label for="txt_celular_i">Número Celular:</label>
                                <input type="text" class="form-control form-control-sm" id="txt_celular_i" placeholder="" value="044 55 56126398">
                        </div>
                </td>
                <td>
                        <div class="col-sm-12">
                                <label for="txt_tutor_i">Teléfono padre/tutor:</label>
                                <input type="text" class="form-control form-control-sm" id="txt_tutor_i" placeholder="" value="044 55 82238594">
                        </div>
                </td>
            </tr>
            <tr>
                <td>
                        <div class="col-sm-12">
                                <label for="txt_email_i">E-mail:</label>
                                <input type="text" class="form-control form-control-sm" id="txt_email_i" placeholder="" value="ejemplo@uno.dos.com">                      
                        </div>
                        
                </td>
                <td>
                        <div class="col-sm-12">
                                <label for="txt_sexo_i">Sexo:</label>
                                <input type="text" class="form-control form-control-sm" id="txt_sexo_i" placeholder="" value="Masculino">
                        </div>
                        
                </td>
                <td>
                        <div class="col-sm-12">
                                <label for="txt_curp_i">CURP:</label>
                                <input type="text" class="form-control form-control-sm" id="txt_curp_i" placeholder="" value="GHUHA750131HDFRR04S">
                        </div>
                </td>
            </tr>
            <tr>
                <td>
                        <div class="col-sm-12">
                                <label >Fecha de nacimiento</label>
                                <input type="text" class="form-control form-control-sm" id="txt_fh_nac" placeholder="" value="15/07/1981">
                        </div>
                </td>
                <td>
                        <div class="col-sm-12">
                                <label for="txt_entnac_i">Entidad de nacimiento:</label>
                                <input type="text" class="form-control form-control-sm" id="txt_entnac_i" placeholder="" value="Ciudad de México">
                        </div>
                </td>                
            </tr>
            <tr>
                <td>
                        <div class="col-sm-12">
                                <label for="txt_secundaria">Secundaria de Procedencia:</label>
                                <input type="text" class="form-control form-control-sm" id="txt_secundaria_i" placeholder="" value="José Clemento Orozco">
                        </div>     
                </td>
            </tr>
            <tr>
                <td>
                        <div class="col-sm-12">
                                <label>Escuela a la que desea ingresar:</label>
                        </div>
                </td>
            </tr>
            <tr>
                <td>
                        <div class="col-sm-12">
                                <label for="txt_op1_i">Opción 1:</label>
                                <input type="text" class="form-control form-control-sm" id="txt_op1_i" placeholder="" value="Opción 1">
                        </div>
                </td>
                <td>
                        <div class="col-sm-12">
                                <label for="txt_op2">Opción 2:</label>
                                <input type="text" class="form-control form-control-sm" id="txt_op2_i" placeholder="" value="Opción 2">
                        </div>                           
                </td>
                <td>
                        <div class="col-sm-12">
                                <label for="txt_op3">Opción 3:</label>
                                <input type="text" class="form-control form-control-sm" id="txt_op3_i" placeholder="" value="Opción 3">
                        </div>
                </td>
            </tr>            
        </table> 
        <table style="margin-top: 80px;">                
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