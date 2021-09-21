<?

$db = mysqli_connect("localhost", "root", "12345678")
or die ("No fue posible conectar con el servidor localhost.");
mysqli_query($db, "CREATE DATABASE IF NOT EXISTS qbaco");
mysqli_select_db($db, "qbaco") or die ("No es posible seleccionar qbaco.");



?>
