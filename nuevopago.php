<?
session_start();
if ($_SESSION['estado'] == "arjona") {
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sistema de Pagos</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-1">
		</div>
		<div align="center" class="col-md-10">
			<h1>
				Nuevo pago
			</h1>
			<div class="row">
				<div class="col-md-10">
					<ul class="nav">
						<li class="nav-item">
							<a class="nav-link active" href="cerrar.php" data-toggle="modal">Cerrar</a>
					</li>
						<li class="nav-item">
							<a class="nav-link disabled" href="#">Nuevo pago</a>
						</li><br>
						<li class="nav-item">
							<a class="nav-link" href="nuevocliente.php">Nuevo Cliente</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="nuevousuario.php">Nuevo usuario</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="rdiario">Reporte diario</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="rcliente">Reporte por cliente</a>
						</li>
					</ul>
				</div>
				<div class="col-md-10">
				</div>
			</div>
			
			
			<div class="row">
			<div class="col-md-1">
			</div>
				<div class="col-md-10">
			<br><br>
					<form action="buscarcliente.php" method="POST">
						<input type="text" name="codigo" class="form-control" placeholder="Escriba el codigo del cliente"><br>
						<button type="sumit" class="btn btn-primary">
							Buscar datos 
						</button>
					</form>
				</div>
				<div class="col-md-1">
				</div>
			</div>
		</div>
		<div class="col-md-1">
		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>
<?
}else {
	?>
		<script type="text/javascript">
			window.alert("Debe ser un ususario registrado.")
			function redireccionar() {
				location.href="index.php";
			}
			SetTimeout("redireccionar()", 1000);
		</script>
	<?
}
?>