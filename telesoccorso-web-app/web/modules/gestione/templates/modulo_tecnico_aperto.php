<?php

$AB_CODI = $_GET['AB_CODI'];
$ID_ALLARME = $_GET['ID_ALLARME'];

include "/var/www/modules/mysqli_open_db.php";

## Fetch result
$query = "call sp_v_Moduloallarmi('".$ID_ALLARME."')" ;

## Execute query
$ret = $mysqli->query($query);

while ($result = $ret->fetch_assoc()) {

$AB_CODI= $result["AB_CODI"];
$EVENTO= $result["EVENTO"];
$DATA= $result["DATA"];
$ORA= $result["ORA"];
$USER= $result["USER"];
$ESITO= $result["ESITO"];
$CONCLUSIONI= $result["CONCLUSIONI"];
$DATA_CHIUSO= $result["DATA_CHIUSO"];
$ORA_CHIUSO= $result["ORA_CHIUSO"];


$str = "modulo_tecnico_aperto.html";
eval("PrintTemplate(\"".GetTemplate($str)."\");");

}



   $ret->close();


include "/var/www/modules/mysqli_close_db.php";


?>