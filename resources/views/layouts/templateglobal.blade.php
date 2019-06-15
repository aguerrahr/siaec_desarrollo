<!DOCTYPE html>
	<html>
	<html lang="es">
	<head>
		@yield('headers')
		<meta charset="utf-8">
		<meta name="viewport" content="width=500, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		
		
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

		<!-- DataTables -->
	    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
	    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
		<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
		<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
		<!--icon Fonts-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		@yield('cabeceras')
		
		@yield('estilos')
		<style>
			.btnrec {
				background-color: DodgerBlue;
				border: none;
				color: white;
				padding: 12px 16px;
				font-size: 16px;
				cursor: pointer;
			}			
			.btnrec:hover {
				ackground-color: RoyalBlue;
			}		
			.dropdown-submenu {
				position: relative;
			}

			.dropdown-submenu .dropdown-menu {
				top: 0;
				left: 100%;
				margin-top: -1px;
			}
				
		</style>

	</head>
	<body>
		<div>
			@yield("menu")
			<nav class="navbar navbar-expand-md fixed-top navbar-light bg-warning">
			{{-- <nav class="navbar navbar-expand-lg navbar-light nav-bk"> --}}
				<a class="navbar-brand" href="{{ url("/")}}">
				  <img src="/images/logo-coapa-azul.png" height="45" width="180">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="siaec-navbar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>				  
					<div class="collapse navbar-collapse justify-content-between" id="siaec-navbar">						
						<div class="navbar-nav">		
								<ul class="navbar-nav mr-auto">					
									@hasanyrole('administracion|super-usuario')
									<li class="nav-item dropdown">								
										<a href="" id="menu" data-toggle="dropdown" class="nav-link dropdown-toggle text-dark">SIAEC</a>
										<ul class="dropdown-menu">
											<a class="dropdown-item" href="">Acceso por primera vez o bloqueo</a>
											<li class="dropdown-item dropdown-submenu">
													<a href="#" data-toggle="dropdown" class="dropdown-toggle">Acceso</a>
													<ul class="dropdown-menu">
															<li class="dropdown-item">
																	<a href="{{ url("accesos") }}">Usuarios</a>
															</li>
															<li class="dropdown-item">
																	<a href="#">Roles</a>
															</li>														
													</ul>
											</li>
											<li class="dropdown-item dropdown-submenu">
													<a href="#" data-toggle="dropdown" class="dropdown-toggle">Administración de Catálogos</a>
													<ul class="dropdown-menu">
															<li class="dropdown-item">
															<a href="{{ url("catalogos/estatus")}}">Estatus</a>
															</li>
															<li class="dropdown-item">
																	<a href="{{ url("catalogos/planteles") }}">Planteles</a>
															</li>			
															<li class="dropdown-item">
																<a href="{{ url("catalogos/cursos") }}">Cursos</a>
															</li>												
															<li class="dropdown-item">
																<a href="{{ url("catalogos/periodoescolar") }}">Periodo escolar</a>
															</li>												
															<li class="dropdown-item">
																<a href="{{ url("catalogos/horarios") }}">Horario escolar</a>
															</li>
															<li class="dropdown-item">
																<a href="{{ url("catalogos/planescolar") }}">Plan escolar</a>
															</li>												

													</ul>
											</li>
											<a class="dropdown-item" href="">Provedores y Adquisiciones</a>
											<a class="dropdown-item" href="">Acceso - Plantel</a>
											<div class="dropdown-divider"></div>
											<li class="dropdown-item dropdown-submenu">
													<a href="#" data-toggle="dropdown" class="dropdown-toggle">Control Escolar</a>
													<ul class="dropdown-menu">
															<li class="dropdown-item">
																	<a href="#">Inscripciones</a>
															</li>
															<li class="dropdown-item">
																	<a href="#">Datos Generales del Alumno</a>
															</li>
															<li class="dropdown-item">
																	<a href="#">Grupo - Listas</a>
															</li>
															<li class="dropdown-item">
																	<a href="#">Pagos</a>
															</li>
															<li class="dropdown-item">
																	<a href="#">Resultado Exámenes</a>
															</li>
															<li class="dropdown-item">
																	<a href="#">Credenciales</a>
															</li>
													</ul>
											</li>
											<li class="dropdown-item dropdown-submenu">
													<a href="#" data-toggle="dropdown" class="dropdown-toggle">Utilerias</a>
													<ul class="dropdown-menu">
															<li class="dropdown-item">
																	<a href="#">Importación Exámenes Cursos</a>
															</li>
															<li class="dropdown-item">
																	<a href="#">Exportación Exámenes Cursos</a>
															</li>												
													</ul>
											</li>
											<li class="dropdown-item dropdown-submenu">
													<a href="#" data-toggle="dropdown" class="dropdown-toggle">Reportes</a>
													<ul class="dropdown-menu">
															<li class="dropdown-item">
																	<a href="#">Formatos</a>
															</li>
															<li class="dropdown-item">
																	<a href="#">Otros</a>
															</li>												
													</ul>
											</li>									
										</ul>
									</li>
									@endhasanyrole
									@hasanyrole('super-usuario|Pre-alumno')
									<li class="nav-item dropdown">						  
										<a href="#" id="menu" data-toggle="dropdown" class="nav-link dropdown-toggle text-dark">PRE-REGISTRO</a>
										<div class="dropdown-menu" aria-labelledby="navbarSiaec">
											<a class="dropdown-item" href="">Instrucciones</a>
											<a class="dropdown-item" href="">Datos Generales</a>
											<a class="dropdown-item" href="">Impresión Formato Pre-registro</a>								
											<a class="dropdown-item" href="">Impresión Formato Pago</a>
											<a class="dropdown-item" href="">Re-impresión</a>								
										</div>
									</li>
									<li class="nav-item dropdown">
											<a href="#" id="menu" data-toggle="dropdown" class="nav-link dropdown-toggle text-dark">ALUMNOS</a>
										<div class="dropdown-menu" aria-labelledby="navbarSiaec">
												<a class="dropdown-item" href="">Acceso por primera vez o bloqueo</a>
												<a class="dropdown-item" href="">Acceso</a>
												<a class="dropdown-item" href="">Datos Generales</a>					
												<a class="dropdown-item" href="">Trayectoria</a>
												<a class="dropdown-item" href="">Resultado de Exámenes</a>
												<a class="dropdown-item" href="">Pagos</a>
										</div>
									</li>
									<li class="nav-item dropdown">
											<a href="#" id="menu" data-toggle="dropdown" class="nav-link dropdown-toggle text-dark">PROFESORES</a>
										<div class="dropdown-menu" aria-labelledby="navbarProfesoeres">
												<a class="dropdown-item" href="">Acceso por primera vez o bloqueo</a>
												<a class="dropdown-item" href="">Acceso</a>
												<a class="dropdown-item" href="">Grupos-Listas</a>					
												<a class="dropdown-item" href="">Resultado de Exámenes</a>
												<a class="dropdown-item" href="">Retroalimentación</a>
										</div>
									</li>
									@endhasanyrole									
								</ul>
						</div>
						<div class="navbar-nav">
								<ul class="navbar-nav ml-auto">
										<!-- Authentication Links -->
										@guest
												<li class="nav-item">
														<a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a>
												</li>
												@if (Route::has('register'))
														<li class="nav-item">
																<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
														</li>
												@endif
										@else
												<li class="nav-item dropdown">
														<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
																{{ Auth::user()->name }} <span class="caret"></span>
														</a>

														<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
																<a class="dropdown-item" href="{{ route('logout') }}"
																	 onclick="event.preventDefault();
																								 document.getElementById('logout-form').submit();">
																		{{ __('Cerrar Sesión') }}
																</a>

																<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
																		@csrf
																</form>
														</div>
												</li>
										@endguest
								</ul>
						</div>
					</div>
			</nav>
		</div>
		<div class="container">
			<div style="height: 100px;"></div>
			@yield("encabezado")			
		</div>
		<div class="container">
			@yield("cuerpo")
		</div>
		<div class="container">
			@yield("pie")
		</div>
		<div class="modal fade" id="mdlEspere" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false"  style="z-index:1000000000">
		@yield("loadingdata")
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Espere por favor</h4>
					</div>
					<div class="modal-body">
						<div class="progress" id="progbar">
							<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:100%">
								Procesando su solicitud...
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		@yield("scripts")
		<script type="text/javascript">
			$('.dropdown-submenu > a').on("click", function(e) {
					var submenu = $(this);
					$('.dropdown-submenu .dropdown-menu').removeClass('show');
					submenu.next('.dropdown-menu').addClass('show');
					e.stopPropagation();
			});

			$('.dropdown').on("hidden.bs.dropdown", function() {
					// hide any open menus when parent closes
					$('.dropdown-menu.show').removeClass('show');
			});


		</script>
	</body>
	</html>