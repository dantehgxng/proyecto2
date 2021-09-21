<?php session_start();?>
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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	

  </head>
  <style>
   .bg-nav{
	  background-color:#2C88DF;
	}  
	.link { color: black; 
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
								<li class="nav-item ">
									<a class="nav-link" href="carrito.php"><i class="fas fa-wrench"></i> Repuestos <span class="sr-only">(current)</span></a>
								</li>
								<li class="nav-item active">
									<a class="nav-link" target="_parent" href="nuevousuario.php"> <i class="fas fa-user-plus"></i> Nuevo Usuario</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" target="_parent" href="nosotros.php"> <i class="fas fa-address-book"></i> Nosotros</a>
								</li>
								<li class="nav-item">
								<a class="nav-link" target="_parent" href="producto_individual.php"><i class="fas fa-search"></i> Buscar Repuesto</a>
							    </li>
							
								<li class="nav-item">
								<li class="nav-item">
									<a class="nav-link" target="_parent" href="contacto.php"> <i class="fas fa-phone-alt"></i> Contacto</a>
								</li>
									<a class="nav-link" target="_parent" href="cerrar.php"><i class="fas fa-window-close"></i> Cerrar Sesión</a>
								<li class="nav-item">
									<a class="nav-link" data-bs-toggle="modal" data-bs-target="#modal_cart" style="color: white;"><i class="fas fa-shopping-cart"></i> <?php echo $totalcantidad; ?></a>
								</li>
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
			<form role="form" action="pronuevousu.php" method="POST">
				<div class="form-group">
					<div align="center"><h3>Registro de Nuevos Usuarios</h3></div>
					<label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						Usuario:
					</font></font></label>
					<input type="text" class="form-control" name="usuario">
				</div>
				<div class="form-group">
					<label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						Password:
					</font></font></label>
					<input type="password" name="password" class="form-control">
				</div>
				<div class="form-group">
					<label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						Vuelva a escribir su password:
					</font></font></label>
					<input type="password" name="confirma" class="form-control" >
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
<br>
	<hr>
	<br>
	<div class="row">
		<div class="col-md-4">
			<ul>
				<dt>
					<i class="far fa-clock"></i> Horarios
				</dt>
				<li class="list-item">
					Lunes a viernes
				</li>
				<dd>
					8 am - 7 pm 
				</dd>
				<li class="list-item">
					Sábado y domingo 
				</li>
				<dd>
					8 am - 4:30 pm
				</dd>
				
			</ul>
		</div>
		
		<div class="col-md-4">
			<dl>
				<dt>
					<i class="fas fa-info"></i> Conócenos
				</dt>
				<dd>
					<a class="link" href="nosotros.php" >¿Quiénes somos? </a>
				</dd>
				<dt>
					Servicio al cliente: 
				</dt>
				<dd>
					+502 58169855 
				</dd>
				<dd>
					
				</dd>
				<dt>
					Email: 
				</dt>
				<dd>
					enriquexxxavila2019@gmail.com
				</dd>
				<dt>
					
				</dt>
				<dd>
					
				</dd>
			</dl>
		</div>
		<div class="col-md-4">
			 
			<address>
				 <strong><i class="fas fa-info"></i> Repuestos Forsaken</strong><br>Copyright © <br>Ciudad de Guatemala, Guatemala, zona 7<br> <abbr title="Phone">Teléfono:</abbr> 47577379
			</address>
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
