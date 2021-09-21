<?
//$db = mysqli_connect("qbaco.colegioiptcedigital.com", "colegioi_qbaco", "Qbaco159753")
//or die ("No fue posible conectar con el servidor colegioiptcedigital.");

//mysqli_select_db($db, "colegioi_qbaco") or die ("No es posible seleccionar qbaco.");


$db = mysqli_connect("localhost", "root", "12345678")
or die ("No fue posible conectar con el servidor localhost.");
mysqli_query($db, "CREATE DATABASE IF NOT EXISTS qbaco");
mysqli_select_db($db, "qbaco") or die ("No es posible seleccionar qbaco.");



?>