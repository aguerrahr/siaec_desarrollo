<!DOCTYPE html>
	<html>
	<html lang="es">
	<head>
		@yield('headers')
		<meta charset="utf-8">
		<meta name="viewport" content="width=500, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		
		
		<!-- SwetAlert -->
		<link rel="stylesheet" href="js/sweetalert/sweetalert.css">
		<script type="text/javascript" src="/js/sweetalert/sweetalert.js"></script>
		
		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
		
		<!-- jQuery	-->
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
		
		<style>
			.btn {
			background-color: DodgerBlue;
			border: none;
			color: white;
			padding: 12px 16px;
			font-size: 16px;
			cursor: pointer;
			}

			/* Darker background on mouse-over */
			.btn:hover {
			background-color: RoyalBlue;
			}
		</style>

	</head>
	<body>
		<div class="container">
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

	</body>
	</html>