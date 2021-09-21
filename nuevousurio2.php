<?
require("conectar.php");

$producto = $_POST['producto'];
$caracteristicas = $_POST['caracteristicas'];
$precio = $_POST['precio'];

mysqli_query($db, "CREATE TABLE IF NOT EXISTS productos_enrique
			(idproducto INT(3) NOT NULL AUTO_INCREMENT PRIMARY KEY,
			producto VARCHAR(100), caracteristicas VARCHAR(100), 
			precio VARCHAR(8))") or die ("No es posible crear la tabla
			de datos productos_enrique en este momento, intente más tarde.");

$agregar = mysqli_query($db, "INSERT INTO productos_enrique (producto, 
			caracteristicas, precio) VALUES('$producto', '$caracteristicas',
			'$precio')") or die ("Ahora no es posible guardar este registro, 
			por favor intente más tarde.");

echo "El nuevo producto <b>$producto</b> fue guardado con éxito.<br><br>
		<a href='nuevopro.php' target='_parent'>Volver a Registro de Nuevos Productos</a>
	";

?>