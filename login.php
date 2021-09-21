<?
require("conectar.php");
	$usuario = $_POST['usuario'];
	$password = $_POST['password'];
	
	$password = MD5($password);
	
	$consulta = mysqli_query($db, "SELECT * FROM usuario_6515 WHERE usuario = '$usuario' and password = '$password'");
	$num = mysqli_num_rows($consulta);
	
	if ($num == 0){
		?>
		<script type="text/javascript">
		window.alert('El nombre de usuario o el password es incorrecto.')
		function redireccionar (){
			location.href="index.html";
		}
		   setTimeout ("redireccionar()", 500);
		   </script>
		<?
	} 
	else {
		session_start();
		$_SESSION['estado'] = "losgraduandosdequitobaco";
        ?>
		<script type="text/javascript">  
		function redireccionar (){
			location.href="index.php";
		}
		   setTimeout ("redireccionar()", 500);
		   </script>
		<?
	}
	
	

?>