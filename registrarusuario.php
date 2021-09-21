<?
require("conectar.php");

$codigo = $_POST['codigo'];
$cliente = $_POST['cliente'];
$deuda = $_POST['deuda'];
$cancelado = $_POST['cancelado'];

mysqli_query($db, "CREATE TABLE IF NOT EXISTS clientes_sp_avila
			(idclientes INT(3) NOT NULL AUTO_INCREMENT PRIMARY KEY,
			cliente VARCHAR(100), codigo VARCHAR(10), deuda VARCHAR(8),
			cancelado VARCHAR(2))");
			
$insertar = mysqli_query($db, "INSERT INTO clientes_sp_avila 
			(cliente, codigo, deuda, cancelado) VALUES
			('$cliente', '$codigo', '$deuda', '$cancelado')");
			
if(!$insertar) {
	?>
		<script type="text/javascript">
			window.alert('Imposible guardar datos en este momento, intente mas tarde.')
			function redireccionar() {
				location.href = "nuevopago.php";
			}
			setTimeout("redireccionar()", 1000);
		</script>
	<?
	exit;
} else {
	?>
		<script type="text/javascript">
			window.alert('Los datos del nuevo cliente se guardaron con éxito.')
			function redireccionar() {
				location.href = "nuevopago.php";
			}
			setTimeout("redireccionar()", 1000);
		</script>
	<?
}

?>