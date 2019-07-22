
@extends("layouts.templateglobal")
@section('headres')
@endsection
@section('cabeceras')
    <!--cabeceras-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('/css/w3.css')}}">        
    <title>
        Impresión de credenciales
    </title>
@endsection
@section('estilos')
    <style>
        .card {
            margin: 0 auto; /* Added */
            float: none; /* Added */
            margin-bottom: 10px; /* Added */
        }
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
        td{
            text-align:center;
        }
        .pointer { cursor: pointer; }
        span:hover {cursor: hand; cursor: pointer;}        
        .input-group.md-form.form-sm.form-1 input{
            border: 1px solid #bdbdbd;
            border-top-right-radius: 0.25rem;
            border-bottom-right-radius: 0.25rem;
        }
        .input-group.md-form.form-sm.form-2 input {
            border: 1px solid #bdbdbd;
            border-top-left-radius: 0.25rem;
            border-bottom-left-radius: 0.25rem;
        }
        .input-group.md-form.form-sm.form-2 input.red-border {
            border: 1px solid #ef9a9a;
        }
        .input-group.md-form.form-sm.form-2 input.lime-border {
            border: 1px solid #cddc39;
        }
        .input-group.md-form.form-sm.form-2 input.amber-border {
            border: 1px solid #ffca28;
        }
        .input-group.md-form.form-sm.form-2 input.blue-border {
            border: 1px solid #2196F3;
        }
        
    </style>        
@endsection

@section('menu')
	
@endsection
@section('encabezado')		
	<div class="row justify-content-center">
		<h1>Impresión de Credenciales</h1>	
    </div>    
	<hr>
@endsection

@section('cuerpo')	            
        <div class="w3-container w3-yellow"> 
            <h2 id="Titulo">Búesque de alumnos</h2>              
        </div>
        <div id="card_buscar" class="card border-black mb-2 text-center">
            <div style="font-weight: bold;color:#000" class="card-header">
                Ingrese el Id del alumno                
            </div>
            <div class="card-body">                
                {{-- <p class="card-text">IdAlumno: </p> --}}
                <div class="input-group md-form form-sm form-2 pl-0">
                    <input class="form-control my-0 py-1 blue-border" type="text" id="txt_idalumno" placeholder="Indique el Id del Alumno" aria-label="Búsqueda">
                    <div style="cursor: hand;" class="input-group-append">
                        <span style="background-color: #2196F3;color:#ffffff;cursor: hand;" class="input-group-text lighten-3" id="btn_buscar">
                            <i style="cursor: hand;" class="fas fa-search text-grey" aria-hidden="true"></i>
                        </span>
                    </div>
                    </div>
            </div>
            <div class="card-footer">
            </div>
        </div>     
        
@endsection

@section('loadingdata')
@endsection

@section('pie')

@endsection
@section("scripts")
<style>
       
        .my-custom-scrollbar {
            position: relative;
            height: 250px;
            overflow: auto;
        }
            .table-wrapper-scroll-y {
            display: block;
        }
        
        input:invalid {
 
            border: 1px solid red;
        
        }
        
        /* Estilo por defecto */
        
        input:valid {
        
            border: 1px solid green;
        
        }
        /* Estilo por defecto */
 
        input:required:invalid {
        
            border: 1px solid red;
        
        }
        
        input:required:valid {
        
            border: 1px solid green;
        
        }
        
        .text-error{
            /* border: 1px solid red; */
            padding: 3px;
            /* border-radius: 25px; */
            background-color:red;
            color: white;
            margin-top: 3px;
        }
        .masc_upc {
            text-transform:uppercase;
        }
        .modal-title{
            font: 18px arial, sans-serif;
            font-weight: bold;
        }
    </style>
<script src="{{asset('/js/ui-impcredenciales.js')}}"></script>
<script type="text/javascript">
    var SITEURL = '{{URL::to('')}}';
   
    
</script>
@endsection