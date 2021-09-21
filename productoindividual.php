
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Repuestos</title>

    <meta name="description" content="Código fuente generado para tienda virtual">
    <meta name="author" content="Enrique Avila">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <style>
   .bg-nav{
	  background-color:#084876;
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
							<a class="navbar-brand" href="index.php">Tienda Virtual</a>
							<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
								<li class="nav-item active">
									<a class="nav-link" href="nuevopro.php">Nuevo Producto <span class="sr-only">(current)</span></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" target="_parent" href="usuarionuevo.php">Nuevo Usuario</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" target="_parent" href="listado.php">Listado General</a>
								</li>
								<li class="nav-item active">
								<a class="nav-link" target="_parent" href="productoindividual.php">Listado por Producto</a>
							     </li>
								<li class="nav-item">
									<a class="nav-link" target="_parent" href="listadoeditar.php">Listado Editar</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" target="_parent" href="cerrar.php">CERRAR SESIÓN</a>
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
		</div>
		<div class="col-md-1">
		</div>
	</div>
		    <?
			if(!$_POST) {
			?>
				<form role="form" action="<? $_POST ?>" method="POST">
				<div class="form-group">
					<div align="center"><h3>Escriba el nombre o caracteríscas del producto:</h3></div>
					<input type="text" class="form-control" name="termino">
				</div>
				<center>
				<button type="submit" class="btn btn-primary"><font style="vertical-align: inherit;"> 
				<font style="vertical-align: inherit;">
					Buscar
				</font></font></button>
				</center>
				</form>
			<?
			} else {
				 require('conectar.php');
				 
				 $termino = $_POST ['termino'];
				 
				 $consulta = mysqli_query($db, "SELECT * FROM productos_6515 WHERE producto LIKE '$termino%'");
				 $num = mysqli_num_rows($consulta);
				 
				 echo "
				     <center>
					 <table border=0 aling=center width=87%>
					 <tr><th>NO.</th><th>Producto</th><th>Características</th><th>Precio</th>
					 <center>
				 ";
				 for($i=1; $i<=$num; $i++){
					 $datos = mysqli_fetch_array($consulta);
					 $producto = $datos['producto'];
					 $caracteristicas = $datos['caracteristicas'];
					 $precio = $datos['precio'];
					 $precio = "Q.".number_format($precio, 2);
				echo "
					 <tr><td>$i</td><td>$producto</td><td>$caracteristicas</td><td align=right>$precio</td>
					 ";
				 }
				 echo "
					 <table><br>
					 <a href='producto_individual.php' target='_parent'>Volver a Buscar Productos</a>
		
				 ";
			}
			
		    ?>
			
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
	
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>

