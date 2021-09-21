<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Repuestos Forsaken</title>

    <meta name="description" content="Código fuente generado para super tienda una empresa virtual">
    <meta name="author" content="Enrique Avila">
	
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	 <link rel="stylesheet" href="styles/main.css" />
    <link rel="stylesheet" href="styles/normalize.css" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
	
	
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
								<li class="nav-item">
									<a class="nav-link" href="carrito.php"><i class="fas fa-wrench"></i> Repuestos <span class="sr-only">(current)</span></a>
								</li>
								
								<li class="nav-item">
									<a class="nav-link" target="_parent" href="nosotros.php"><i class="fas fa-address-book"></i> Nosotros</a>
								</li>
								<li class="nav-item">
								<a class="nav-link" target="_parent" href="producto_individual.php"><i class="fas fa-search"></i> Buscar Repuesto</a>
							    </li>
					
								<li class="nav-item">
									<a class="nav-link" target="_parent" href="contacto.php"> <i class="fas fa-phone-alt"></i> Contacto</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" target="_parent" href="cerrar.php"><i class="fas fa-window-close"></i> Cerrar Sesión</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-bs-toggle="modal" data-bs-target="#modal_cart" style="color: white;"><i class="fas fa-shopping-cart"></i> <?php echo $totalcantidad; ?></a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
		<br>
		<br>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8">
			<div class="page-header">
				<h1>
					Repuestos forsaken...<small>te da la bienvenida a su sitio web</small>
				</h1>
				<br>
			</div>
			<h2>
				Solo con nosotros
			</h2>
			<p>
				Podemos complacerte con nuestra calidad de repuestos, solo con nosotros puedes tener la confianza
				de garantizar el mejor servicio de reparación, con los mejores productos importados desde Taiwan.
			</p>
			<p>
				<a class="btn" href="carrito.php">Ver más»</a>
				
			</p>
			<center>
			<img alt="Bootstrap Image Preview" src="imagenes/banner.jpg"> 
			<br>
			<br>
			</center>
		</div>
		<br>
		<div class="col-md-4">
			<div class="jumbotron">
				<h2>
					Hola, conocenos!
				</h2>
				<p>
					Como negocio que ha estado en el mercado por más de 25 años, tenemos una calidad alta
					para todos nuestros clientes, tanto en los mejores precios como el mejor trato hacía nuestros 
					clientes que siempre salen beneficiados.
				</p>
				<p>
					<a class="btn btn-primary btn-large" href="nosotros.php">Leer más.</a>
				</p>
			</div>
		</div>
	</div>
	
	<hr>
	<br>
	<div class="row">
		<div class="col-md-12">
			<div class="carousel slide" id="carousel-752019">
				<ol class="carousel-indicators">
					<li data-slide-to="0" data-target="#carousel-752019" class="active">
					</li>
					<li data-slide-to="1" data-target="#carousel-752019">
					</li>
					<li data-slide-to="2" data-target="#carousel-752019">
					</li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" alt="Carousel Bootstrap First" src="imagenes/carro1.jpg">
						<div class="carousel-caption">
							<h4>
								Más seguridad
							</h4>
							<p>
								Somos tu mejor opción, tu reparación estará completa y puntualmente.
							</p>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" alt="Carousel Bootstrap Second" src="imagenes/carro2.jpg">
						<div class="carousel-caption">
							<h4>
								Años de experiencia 
							</h4>
							<p>
								Sabemos donde va cada pieza y como debe de repararse.
								
							</p>
						</div>
					</div>
					
					<div class="carousel-item">
						<img class="d-block w-100" alt="Carousel Bootstrap Third" src="imagenes/carro3.jpg">
						<div class="carousel-caption">
							<h4>
								Precios convenientes
							</h4>
							<p>
								Damos los mejores precios para que siempre nos prefieran y nos recomienden.
							</p>
						</div>
					</div>
				</div> <a class="carousel-control-prev" href="#carousel-752019" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" href="#carousel-752019" data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
			</div>
		</div>
	</div>
	<br>
	<div align="center"	class="page-header">
				<h1>
					 <dt>NUESTROS</dt> PRODUCTOS
				</h1>
				<br>
			</div>
	<br>
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-4">
					<div class="card">
						<img class="card-img-top" alt="Bootstrap Thumbnail First" src="imagenes/cables1.jpg">
						<div class="card-block">
							<h4 class="card-title">
								Cables
							</h4>
							<p class="card-text">
								Par de cables con forro, contiene 1 trasero y 1 delantero, color negro tamaño estandar para todo tipo 
								de tamaño que garantiza un frenado suave.
							</p>
							<p>
								<a class="btn btn-primary" href="carrito.php">Ver más.</a> <a class="btn" href="#"></a>
							</p>
						</div>
					</div>
					<br>
				</div>
				<div class="col-md-4">
					<div class="card">
						<img class="card-img-top" alt="Bootstrap Thumbnail Second" src="imagenes/pedales.jpg">
						<div class="card-block">
							<h4 class="card-title">
								Pedales
							</h4>
							<p class="card-text">
								Juego de pedales de plastico resistente, tamaño mediano, color negro con reflectores a los lados, rosca gruesa 
								para biela de eje cuadrado, incluye lado L y lado R.
							</p>
							<p>
								<a class="btn btn-primary" href="carrito.php">Ver más.</a> <a class="btn" href="#"></a>
							</p>
						</div>
					</div>
				</div>
				<br>
				<div class="col-md-4">
					<div class="card">
						<img class="card-img-top" alt="Bootstrap Thumbnail Third" src="imagenes/manecillas2.jpg">
						<div class="card-block">
							<h4 class="card-title">
								Manecillas
							</h4>
							<p class="card-text">
								Manecillas de aluminio grandes, para bicicletas numero 20, 24 y 26, que aseguran 
								un frenado seguro y rápido gracias a su suavidad gracias a los materiales, duraderas ante las caídas. 
							</p>
							<p>
								<a class="btn btn-primary" href="carrito.php">Ver más.</a> <a class="btn" href="#"></a>
							</p>
						</div>
					</div>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-4">
					<div class="card">
						<img class="card-img-top" alt="Bootstrap Thumbnail First" src="imagenes/producto3.jpg">
						<div class="card-block">
							<h4 class="card-title">
								Quijadas
							</h4>
							<p class="card-text">
								Mordazas o quijadas de aluminio y carbono, con excelente frenado gracias a sus pastillas especiales que abarcan gran parte 
								del aro metalico para asegurar su frenado, incluyen las 4 piezas para atrás y adelante, con sus respectivos tornillos para una fácil
								instalación.
							</p>
							<p>
								<a class="btn btn-primary" href="carrito.php">Ver más.</a> <a class="btn" href="#"></a>
							</p>
						</div>
					</div>
				</div>
				<br>
				<div class="col-md-4">
					<div class="card">
						<img class="card-img-top" alt="Bootstrap Thumbnail Second" src="imagenes/sillones.jpg">
						<div class="card-block">
							<h4 class="card-title">
								Sillón
							</h4>
							<p class="card-text">
								Asiento de cuero cómodo color negro, adaptable para cualquier bicicleta de todos los tamaños, con una suavidad especial para los
								usuarios que ofrece un forro duradero que no se desgasta con el uso, ni con el clima que lo rodea.
							</p>
							<p>
								<a class="btn btn-primary" href="carrito.php">Ver más.</a> <a class="btn" href="#"></a>
							</p>
						</div>
					</div>
				</div>
				<br>
				<br>
				<div class="col-md-4">
					<div class="card">
						<img class="card-img-top" alt="Bootstrap Thumbnail Third" src="imagenes/ejes3.jpg">
						<div class="card-block">
							<h4 class="card-title">
								Ejes
							</h4>
							<p class="card-text">
								Ofrecemos ejes para cualquier parte de la bicicleta ya sea delantero, trasero y central que incluyen sus respectivas tuercas,
								existen variables de color negro y cromado, también ofrecemos de diferentes tamaños a elección del cliente.
					
							</p>
							<p>
								<a class="btn btn-primary" href="carrito.php">Ver más.</a> <a class="btn" href="#"></a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
	<hr>
	<br>
	<div class="row">
		<div class="col-md-6">
			<h3 align="center">
				<dt>SERVICIOS</dt>
			</h3>
			<ul>
				<li class="list-item">
					Pinchazos 
				</li>
				<li class="list-item">
					Cambio de tubo
				</li>
				<li class="list-item">
					Mantenimiento 
				</li>
				<li class="list-item">
					Ajuste de velocidades 
				</li>
				<li class="list-item">
					Ajuste de frenos 
				</li>
				<li class="list-item">
					Cambio de cojinetes centrales, delanteros y traseros
				</li>
				<li class="list-item">
					Lubricación de piezas
				</li>
				<li class="list-item">
					Reparaciones en general 
				</li>
			</ul>
		</div>
		<div class="col-md-6">
			<img style="border: 2px solid; color: black;"alt="Bootstrap Image Preview" width="50%" src="imagenes/rayos.jpg"> 
			<br>
			<br>
			<br>
			<img style="border: 2px solid; color: black;" alt="Bootstrap Image Preview" width="50%" src="imagenes/caballo.jpg">
			
			
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
