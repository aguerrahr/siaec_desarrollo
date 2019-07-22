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
    <title>Credenciales</title>    
    <style type="text/css">
        /*size: 19cm 7.5cm; */
        @page {
            size: 8.5cm 19cm landscape; 
            margin-top: .5cm;
            margin-left: .2cm;
            margin-right: .2cm;
            margin-bottom: .14cm;            
        }
        h1{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 25px;            
        }
        h4{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 10px;
            font-weight: bold;
        }
        h5{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 12px;
            font-weight: bold;
        }
        .foto-cred{
            width: 2.5cm;
            height: 3cm;
            border: solid 1px black;
        }
        .ren-esc{
            border: none;            
        }
        .div-alumno{
            width: 100%;
            height: 3cm;
            text-align: center;
            /*border: solid 1px black;*/            
        }
        .dt-alumno{            
            font-family: Arial, Helvetica, sans-serif;
            font-size: 10px;          
            font-weight: normal;            
        }
        .firma{            
            font-family: Arial, Helvetica, sans-serif;
            font-size: 10px;          
            font-weight: normal;
        }
        table{
            border: 2px solid #252850;
            /*border-color: #0000ff #0000ff #0000ff #0000ff;*/
            table-layout: fixed;
            width: 100%;        
            overflow: hidden;
        }

        th, td {
            /*border: 1px solid blue;*/
            /*border-color: #000000 #000000 #000000 #000000;*/
            /*width: 500px;*/
            
            font-family: Arial, Helvetica, sans-serif;
            font-size: 15px;
        }

        table th, table td {
            overflow: hidden;
        }
        label {
            word-wrap: break-word;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 10px;
            font-weight: bold;
        }

        .fechas{
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 15px;
            font-weight: bold;
            color:#ffffff;
            width: 70px;   
            background-color: #252850;            

        }
        .alinea-i{
            float:left;
        }
        .alinea-d{
            float:left;
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
                $pdf->line(270,16,270,210,$color,2);
                //$pdf->line(x1,y1,x2,y2,$color,2);
                
                //$image1= {{ base_path() }}/public/images/l.png"; //"{{ base_path() }}/images/logo-coapa-azul.png";
                //$pdf->image($image1,"png", 0, 0, 50, 25);
               
            }
    </script>     
    <table>
        <tr>                               
            <td colspan="2">
                <table class="ren-esc">
                    <tr>
                        <td style="text-align: center;">
                            <h4> BACHILLERATO INSTITUTO CULTURAL Y EDUCATIVO COAPA
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">                                
                            <h4>C.C.T. 09PBH3854Z                             
                        </td>
                    </tr>
                </table>                
            </td> 
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style = "padding-left: 50px;" colspan="1">                    
                <img src="http://cursounamcoapa.com/images/logocred.png" alt="Logo" height="45px" width="50px" >
            </td>
            <td></td>
            <td class="firma" style="text-align:center;padding-top:20px">
                Firma del Estudiante
            </td>
            <td class="firma" style="text-align: center;padding-top:10px">
                Jorge Angel Morales SantaMaria
                Responsable de control escolar
            </td>
        </tr>           
        <tr>                
            <td style = "padding-left: 25px;">
                <div class="foto-cred"></div>
            </td>
            <td>
                <div class="div-alumno">
                    <h5>ALUMNO(A)
                    <div class="dt-alumno" style="padding-top: 5px;">
                        {{$dtsalu->alu_apepat}}
                    </div>
                    <div class="dt-alumno" style="padding-top: 5px;">
                        {{$dtsalu->alu_apemat}}
                    </div>
                    <div class="dt-alumno" style="padding-top: 5px;">
                        {{$dtsalu->alu_nom}}
                    </div>
                    <br>
                    <br>
                    <div class="dt-alumno">
                        CLAVE: {{$dtsalu->alu_idalu}}
                    </div>
                </div>     
            </td>
            <td style="" colspan="2">     
                <div style="
                            margin-top:-30px;
                            font-family: Arial, Helvetica, sans-serif;
                            font-size: 12px;          
                            font-weight: bold;
                            text-align: center;">
                    Ingreso: lunes, 22 de octubre de 2018
                </div>    
                <div style="text-align:center">
                    <div style="margin-left:90px;margin-top:10px;" class="fechas alinea-i">
                        2016
                    </div>                   
                    <div style="margin-left:20px;margin-top:10px;" class="fechas alinea-i">
                        2018
                    </div>
                </div>
            </td>                    
        </tr>            
        <tr>
            <td colspan="2">
               <label style="padding-left:20px">CURP: {{$dtsalu->datcur_curp}} </label>
            </td>
            <td colspan="2">
                    <div style="margin-bottom:10px;
                    font-family: Arial, Helvetica, sans-serif;
                    font-size: 10px;          
                    font-weight: bold;
                    text-align:center;
                    /*background-color: #00ff00;*/
                    with:100%;
                        ">
                    Dalias 118 esq. Delfín Madrigal, Del. Coyocán, C.P. 04369 Tel. 56103475 www.cursounam.com
                </div>  
            </td>
        </tr>            
    </table>
</body>
</html>