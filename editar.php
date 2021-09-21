<?
require('conectar.php');

$consulta = mysqli_query($db, "SELECT * FROM productos_enrique");
$num = mysqli_num_rows($consulta);

for($i=0; $i<=$num; $i++){
	 $datos = mysqli_fetch_array($consulta);
	 				 
$id = $_POST['id'][$i];
$producto = $_POST['producto'][$i];
$caracteristicas = $_POST['caracteristicas'][$i];
$precio = $_POST['precio'][$i];

 mysqli_query($db, "UPDATE productos_enrique SET producto = '$producto' WHERE idproducto ='$id'");
 mysqli_query($db, "UPDATE productos_enrique SET caracteristicas = '$caracteristicas' WHERE idproducto ='$id'");
 mysqli_query($db, "UPDATE productos_enrique SET precio = '$precio' WHERE idproducto ='$id'");
}
echo "Productos actualizados con éxito <br><br>
<a href='listado_editar.php' target='_parent'>Volver a Listado para Editar</a>
";


?>