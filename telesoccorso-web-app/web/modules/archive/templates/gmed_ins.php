<?php

include "/var/www/modules/mysqli_open_db.php";

## Fetch result
$query = "CALL sp_v_Anagrafica('".$querystring."')" ;

$ret = $mysqli->query($query);

while ($result = $ret->fetch_assoc()) {

## PROVE

$str = "gmed_ins.html";
eval("PrintTemplate(\"".GetTemplate($str)."\");");

}

   /* free result set */
   $ret->close();

include "/var/www/modules/mysqli_close_db.php";

?>