<?php

$AB_CODI = $_GET['AB_CODI'];

include "/var/www/modules/mysqli_open_db.php";

## Fetch result
$query = "call sp_v_Assenza('".$AB_CODI."')";

## Execute query
$ret = $mysqli->query($query);

while ($result = $ret->fetch_assoc()) {

$ID= $result["ID"];
$AB_CODI= $result["AB_CODI"];
$TIPO= $result["TIPO"];
$DATA_ASSENZA= $result["DATA_ASSENZA"];
$NOTE= $result["NOTE"];


$str = "assenza.html";
eval("PrintTemplate(\"".GetTemplate($str)."\");");

}

   /* free result set */
   $ret->close();

include "/var/www/modules/mysqli_close_db.php";

?>
