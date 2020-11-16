<?php

include "/var/www/modules/mysqli_open_db.php";

## Fetch result
$query = "call sp_v_Anagrafica('".$querystring."')" ;

## Execute query
$ret = $mysqli->query($query);

while ($result = $ret->fetch_assoc()) {

$AB_CODI= $result["AB_CODI"];
$MATRICOLA= $result["MATRICOLA"];
$NOMINATIVO= $result["NOMINATIVO"];
$TELEFONO= $result["TELEFONO"];
$CELLULARE= $result["CELLULARE"];
$SESSO= $result["SESSO"];
$CENTRALE= $result["CENTRALE"];


$str = "anagrafica_mod.html";
eval("PrintTemplate(\"".GetTemplate($str)."\");");

}

   /* free result set */
   $ret->close();

include "/var/www/modules/mysqli_close_db.php";

?>