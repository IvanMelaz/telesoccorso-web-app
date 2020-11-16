<?php

$AB_CODI = $_GET['AB_CODI'];
$ID_ALLARME = $_GET['ID_ALLARME'];

include "/var/www/modules/mysqli_open_db.php";

## Fetch result
$query = "call sp_v_Moduloallarmi('".$ID_ALLARME."')" ;

## Execute query
$ret = $mysqli->query($query);

while ($result = $ret->fetch_assoc()) {

$DATA_CHIUSO= $result["DATA_CHIUSO"];
$ORA_CHIUSO= $result["ORA_CHIUSO"];


$str = "modulo_allarme_chiuso.html";
eval("PrintTemplate(\"".GetTemplate($str)."\");");

}



   $ret->close();


include "/var/www/modules/mysqli_close_db.php";


?>