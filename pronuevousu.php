<?
require("conectar.php");

$usuario = $_POST['usuario'];
$password = $_POST['password'];
$clave = $_POST['confirma'];

if($password != $clave) {
	echo "El Password y la confirmación no coinciden.  Vuelva a intentarlo.<br><br>
		<a href='index.html' target='_parent'>Volver a Registro de Nuevos Usuarios</a>
		";
	exit;
}

$password = MD5($password);

mysqli_query($db, "CREATE TABLE IF NOT EXISTS usuario_6515
			(idusuario INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
			usuario VARCHAR(25), password VARCHAR(40), 
			clave VARCHAR(6))") or die ("No es posible crear la tabla
			de datos usuario6515 en este momento, intente más tarde.");

$agregar = mysqli_query($db, "INSERT INTO usuario_6515 (usuario, 
			password, clave) VALUES('$usuario', '$password',
			'$clave')") or die ("Ahora no es posible guardar este registro, 
			por favor intente más tarde.");

echo "El nuevo usuario <b>$usuario</b> fue guardado con éxito.<br><br>
		<a href='index.php' target='_parent'>Ir al inicio</a>
	";

?>