<?php

include "/var/www/modules/mysqli_open_db.php";

$AB_CODI= $_GET['AB_CODI'];

$MOTIVO_DISINSTALLAZIONE= $_POST["MOTIVO_DISINSTALLAZIONE"];

## execute query 
$query = "call sp_u_Disinstallazione('".$AB_CODI."','".$MOTIVO_DISINSTALLAZIONE."')";

## Execute query
$ret = $mysqli->query($query);

include "/var/www/modules/mysqli_close_db.php";

header("location: scheda.php?AB_CODI=$AB_CODI"); 

?>
