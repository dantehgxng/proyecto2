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
	
	<link rel="stylesheet" href="css/sweetalert2.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
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
								<li class="nav-item active">
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
						
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>

<header>
        <div class="container">
            
                                <img src="img/cart.jpeg" class="nav-link dropdown-toggle img-fluid" height="70px"
                                    width="70px" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"></img>
                                <div id="carrito" class="dropdown-menu" aria-labelledby="navbarCollapse">
                                    <table id="lista-carrito" class="table">
                                        <thead>
                                            <tr>
                                                <th>Imagen</th>
                                                <th>Nombre</th>
                                                <th>Precio</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                    </table>

                                    <a href="#" id="vaciar-carrito" class="btn btn-primary btn-block">Vaciar Carrito</a>
                                    <a href="#" id="procesar-pedido" class="btn btn-danger btn-block">Procesar
                                        Compra</a>
                                </div>
                           
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav mr-auto">
                            
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <main>
        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 my-4 mx-auto text-center">
            <h1 class="display-4 mt-4">Lista de Productos</h1>
            <p class="lead">Selecciona uno de nuestros productos y se agregarán al carrito</p>
        </div>

        <div class="container" id="lista-productos">
            
            <div class="card-deck mb-3 text-center">
                
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Multiplicadora</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/multi.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">Q. <span class="">60</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>Multiplicadora</li>
                            <li>2 discos</li>
                            <li>aluminio eje cuadrado</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="1"><i class="fas fa-shopping-cart"></i> Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Freno de disco</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/disco.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">Q. <span class="">150</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>Disco de acero inoxidable</li>
                            <li>para el freno</li>
                            <li></li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="2"><i class="fas fa-shopping-cart"></i> Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Quijadas</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/quijada.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">Q. <span class="">65</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>Quijadas shimano </li>
                            <li>de carbono con </li>
                            <li>excelente control de frenado</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="3"><i class="fas fa-shopping-cart"></i> Comprar</a>
                    </div>
                </div>

            </div>

            <div class="card-deck mb-3 text-center">
                
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Manecillas</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/manesillas.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">Q. <span class="">40</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>Manecillas de aluminio</li>
                            <li> que garantizan un</li>
                            <li>frenado rápido y eficaz</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="4"><i class="fas fa-shopping-cart"></i> Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Cables</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/cables.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">Q. <span class="">14</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>Par de cables de freno</li>
                            <li>con forro negro</li>
                            <li></li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="5"><i class="fas fa-shopping-cart"></i> Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Ejes</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/ejes.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">Q. <span class="">15</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>Eje trasero o</li>
                            <li>trasero cromado</li>
                            <li>estándar con sus tuerca</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="6"><i class="fas fa-shopping-cart"></i> Comprar</a>
                    </div>
                </div>

            </div>

            <div class="card-deck mb-3 text-center">
                
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Aro Rin 20'</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/aro20.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">Q. <span class="">95</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>Aro metálico armado</li>
                            <li>Cin número 20 delantero</li>
                            <li></li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="7"><i class="fas fa-shopping-cart"></i> Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Aron Rin 16'</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/aro16.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">Q. <span class="">55</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>Aro metálico armado</li>
                            <li>rin número 16 trasero</li>
                            <li></li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="8"><i class="fas fa-shopping-cart"></i> Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Mangos</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/mangos.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">Q. <span class="">12</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>Par de mangos negros</li>
                            <li>con textura para mejor agarre,</li>
                            <li>manubrio de goma antideslizante</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="9"><i class="fas fa-shopping-cart"></i> Comprar</a>
                    </div>
                </div>
            </div>
		<div class="card-deck mb-3 text-center">
             
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Cadena</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/cadena.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">Q. <span class="">30</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>Cadena Shimano resistente,</li>
                            <li>para bicicleta sin velocidades</li>
                            <li></li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="10"><i class="fas fa-shopping-cart"></i> Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Piñón</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/piñon.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">Q. <span class="">55</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>Piñón Shimano</li>
                            <li>de 7 velocidades</li>
                            <li></li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="11"><i class="fas fa-shopping-cart"></i> Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Piñón Pequeño</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/piñon1.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">Q. <span class="">40</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>Piñón hecho en Taiwán</li>
                            <li>16 dientes, 1 velocidad</li>
                            <li></li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="12"><i class="fas fa-shopping-cart"></i> Comprar</a>
                    </div>
                </div>

            </div>

        </div>
    </main>
<hr>
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
</div>

</div>

	<script src="js/jquery-3.4.1.min.js"></script>
    
    <script src="js/sweetalert2.min.js"></script>
    <script src="js/carrito.js"></script>
    <script src="js/pedido.js"></script>
	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
</body>
</html>