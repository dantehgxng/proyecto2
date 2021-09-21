
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Repuestos</title>

    <meta name="description" content="Código fuente generado para super tienda una empresa virtual">
    <meta name="author" content="Enrique Avila">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"/>

  </head>
  <style>
   .bg-nav{
	  background-color:#2C88DF;
	}  
	</style>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-1">
		</div>
		<div class="col-md-10">
			<div class="col-md-10" style="margin-bottom: 75px;">
				<div class="container">
					<nav class="navbar fixed-top navbar-inverse bg-nav navbar-toggleable-sm">
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
							<a class="navbar-brand" href="index.php"><i class="fas fa-home"></i> Inicio</a>
							<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
								<li class="nav-item active">
									<a class="nav-link" href="carrito.php"><i class="fas fa-wrench"></i> Repuestos <span class="sr-only">(current)</span></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" target="_parent" href="nuevousuario.php">Nuevo Usuario</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" target="_parent" href="listado.php">Listado General</a>
								</li>
								<li class="nav-item">
								<a class="nav-link" target="_parent" href="producto_individual.php">Buscar Repuesto</a>
							    </li>
								<li class="nav-item">
									<a class="nav-link" target="_parent" href="listado_editar.php">Listado Editar</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" target="_parent" href="cerrar.php"><i class="fas fa-window-close"></i> Cerrar Sesión</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
		<div class="col-md-1">
		</div>
	</div>
	<div class="row">
		<div class="col-md-1">
		</div>
		<div class="col-md-10">
			<form role="form" action="pronuevopro.php" method="POST">
				<div class="form-group">
					<div align="center"><h3>Registro de Nuevos Productos</h3></div>
					<label for="exampleInputEmail1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						Producto:
					</font></font></label>
					<input type="text" class="form-control" name="producto">
				</div>
				<div class="form-group">
					<label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						Características:
					</font></font></label>
					<input type="text" name="caracteristicas" class="form-control">
				</div>
				<div class="form-group">
					<label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						Precio:
					</font></font></label>
					<input type="text" name="precio" class="form-control" >
				</div>

				<button type="submit" class="btn btn-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
					Registrar
				</font></font></button>
			</form>
		</div>
		<div class="col-md-1">
		</div>
	</div>
	<div class="row">
		<div class="col-md-1">
		</div>
		<div class="col-md-10">
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
