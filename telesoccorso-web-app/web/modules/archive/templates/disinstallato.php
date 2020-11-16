<?php

$AB_CODI = $_GET['AB_CODI'];

include "/var/www/modules/mysqli_open_db.php";

## Fetch result
$query = "call sp_v_Disinstallato('".$AB_CODI."')";

## Execute query
$ret = $mysqli->query($query);

while ($result = $ret->fetch_assoc()) {


$AB_CODI= $result["AB_CODI"];
$DATA_DISINSTALLAZIONE= $result["DATA_DISINSTALLAZIONE"];



$str = "disinstallato.html";
eval("PrintTemplate(\"".GetTemplate($str)."\");");

}

   /* free result set */
   $ret->close();

include "/var/www/modules/mysqli_close_db.php";

?>
