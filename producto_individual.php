<?php session_start();?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Repuestos</title>

    <meta name="description" content="Código fuente generado para tienda  virtual">
    <meta name="author" content="Enrique Avila">

    <link href="css/bootstrap.min.css" rel="stylesheet">
	 <link rel="stylesheet" href="css/normalize.css" />
    <link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

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
								<li class="nav-item">
									<a class="nav-link" href="carrito.php"><i class="fas fa-wrench"></i> Repuestos <span class="sr-only">(current)</span></a>
								</li>
								
								<li class="nav-item">
									<a class="nav-link" target="_parent" href="nosotros.php"> <i class="fas fa-address-book"></i> Nosotros</a>
								</li>
								<li class="nav-item active">
								<a class="nav-link" target="_parent" href="producto_individual.php"><i class="fas fa-search"></i> Buscar Repuesto</a>
							     </li>
								
								
								
								
								<li class="nav-item">
									<a class="nav-link" target="_parent" href="contacto.php"> <i class="fas fa-phone-alt"></i> Contacto</a>
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
		</div>
		<div class="col-md-1">
		</div>
	</div>
		    <?
			if(!$_POST) {
			?>
				<form role="form" action="<? $_POST ?>" method="POST">
				<div class="form-group">
					<div width="50%" align="center"><h3>Escriba el nombre del repuesto que busca:</h3></div>
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
				 
				 $consulta = mysqli_query($db, "SELECT * FROM productos_tienda1 WHERE producto LIKE '$termino%'");
				 $num = mysqli_num_rows($consulta);
				 
				 echo "
				     <center>
					 <table border=2 aling=center width=87%>
					 <tr><th>NO.</th><th>Producto</th><th>Características</th><th>    Precio</th>
					 <center>
				 ";
				 for($i=1; $i<=$num; $i++){
					 $datos = mysqli_fetch_array($consulta);
					 $producto = $datos['producto'];
					 $caracteristicas = $datos['caracteristicas'];
					 $precio = $datos['precio'];
					 $precio = "Q.".number_format($precio, 2);
				echo "
					 <tr><td>$i</td><td>$producto</td><td>$caracteristicas</td><td>$precio</td>
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
	<?php 

$carrito_mio=$_SESSION['carrito'];
$_SESSION['carrito']=$carrito_mio;

// contamos nuestro carrito
if(isset($_SESSION['carrito'])){
    for($i=0;$i<=count($carrito_mio)-1;$i ++){
    if($carrito_mio[$i]!=NULL){ 
    $total_cantidad = $carrito_mio['cantidad'];
    $total_cantidad ++ ;
    $totalcantidad += $total_cantidad;
    }}}
?>
<div class="modal fade" id="modal_cart" tabindex="-1"  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mis Compras</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
   
   
     
			<div class="modal-body">
				<div>
					<div class="p-2">
						<ul class="list-group mb-3">
							<?php
							if(isset($_SESSION['carrito'])){
							$total=0;
							for($i=0;$i<=count($carrito_mio)-1;$i ++){
							if($carrito_mio[$i]!=NULL){
						
            ?>
							<li class="list-group-item d-flex justify-content-between lh-condensed">
								<div class="row col-12" >
									<div class="col-6 p-0" style="text-align: left; color: #000000;"><h6 class="my-0">Cantidad: <?php echo $carrito_mio[$i]['cantidad'] ?> : <?php echo $carrito_mio[$i]['titulo']; // echo substr($carrito_mio[$i]['titulo'],0,10); echo utf8_decode($titulomostrado)."..."; ?></h6>
									</div>
									<div class="col-6 p-0"  style="text-align: right; color: #000000;" >
									<span   style="text-align: right; color: #000000;"><?php echo $carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad'];    ?> Q</span>
									</div>
								</div>
							</li>
							<?php
							$total=$total + ($carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad']);
							}
							}
							}
							?>
							<li class="list-group-item d-flex justify-content-between">
							<span  style="text-align: left; color: #000000;">Total (Q)</span>
							<strong  style="text-align: left; color: #000000;"><?php
							if(isset($_SESSION['carrito'])){
							$total=0;
							for($i=0;$i<=count($carrito_mio)-1;$i ++){
							if($carrito_mio[$i]!=NULL){ 
							$total=$total + ($carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad']);
							}}}
							echo $total; ?> Q</strong>
							</li>
						</ul>
					</div>
				</div>
			</div>
			</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
		<a type="button" class="btn btn-secondary" href="contacto.php">Finalizar compra</a>
        <a type="button" class="btn btn-primary" href="borrarcarro.php">Vaciar carrito</a>
      </div>
    </div>
  </div>
</div>
	
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.min.js"></script>
  </body>
</html>
