<!DOCTYPE html>
	<html>
	<html lang="es">
	<head>		
		<meta charset="utf-8">
		<meta name="viewport" content="width=500, initial-scale=1">
		<!-- SwetAlert -->
		<link rel="stylesheet" href="/js/sweetalert/sweetalert.css">
		<script type="text/javascript" src="/js/sweetalert/sweetalert.js"></script>
		
		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
		
		<!-- jQuery	-->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>

		
		<!--icon Fonts-->		
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('/css/w3.css')}}"> 
		
		<style>          
            h1	{
                color: #000000;
                font-family: arial, sans-serif;
                font-size: 30px;
                font-weight: bold;
                margin-top: 0px;
                margin-bottom: 1px;
            }
            h2	{
                color: #909090;
                font-family: arial, sans-serif;
                font-size: 25px;
                font-weight: bold;
                margin-top: 5px;
                margin-bottom: 5px;
            }
            h3	{
                color: #2196F3;
                font-family: arial, sans-serif;
                font-size: 20px;
                font-weight: bold;
                margin-top: 5px;
                margin-bottom: 5px;
            }
            .row > div {border:10px solid white}
            .B {background:blue; height:200px}
            .G {background:green; height:100px}
            .O {background:orange; height:100px}
		</style>

	</head>
	<body>   
        <div class="container">
            <nav class="navbar navbar-expand-md fixed-top navbar-light bg-warning">                
                <a class="navbar-brand" href="{{ url("/")}}">
                    <img src="/images/logo-coapa-azul.png" height="45" width="180">
                </a>
            </nav>
            <div style="height: 100px;"></div>
            <div style="margin-top:auto" class="row">
                <h1>Inscripciones</h1>	
            </div>    
            <hr>                
            <div  class="row d-block">
                <div style="padding-top:1.5em;" class="col-md-8 col-lg-6 float-left B">
                    <div id="btn_preinscripcion" class="btn">
                        <i style="color:white;" class="fas fa-user-edit fa-9x"></i>
                        <span style="color:white;font-family: Arial, Helvetica, sans-serif;font-size: 40px;"> Preinscripciones</span>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 float-left G">
                    <div id="btn_reimpresion" class="btn">
                        <i style="color:white;" class="fas fa-print fa-4x"></i>
                        <span style="color:white;font-family: Arial, Helvetica, sans-serif;font-size: 20px;"> Reimpresión</span>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 float-left G">
                    <div id="btn_inscripcion" class="btn">
                        <i style="color:white;" class="fas fa-user-graduate fa-4x"></i>
                        <span style="color:white;font-family: Arial, Helvetica, sans-serif;font-size: 20px;"> Inscripción</span>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 float-left d-flex flex-row justify-content-center align-items-center O">                    
                    <div id="btn_siaec" class="btn">
                        <i style="color:white;" class="fas fa-tasks fa-4x"></i>
                        <span style="color:white;font-family: Arial, Helvetica, sans-serif;font-size: 20px;"> SIAEC</span>
                    </div>                                    
                </div>
            </div>                
                     
        </div>
        <script type="text/javascript">
            var SITEURL = '{{URL::to('')}}';       

            $(document).ready(function() {
                $("#btn_preinscripcion").click(function() {
                    var url = SITEURL + "/alumnos/preregistrocursos";
                    $(location).attr('href',url);
                });
                $("#btn_reimpresion").click(function() {
                    var url = SITEURL + "/alumnos/preregreimp";
                    $(location).attr('href',url);
                });
                $("#btn_inscripcion").click(function() {
                    var url = SITEURL + "/alumnos/inscripciones";
                    $(location).attr('href',url);
                });
                $("#btn_siaec").click(function() {
                    var url = SITEURL + "/";
                    $(location).attr('href',url);
                });

            });


        </script>
	</body>
	</html>