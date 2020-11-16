<?php

include "/var/www/modules/mysqli_open_db.php";

$ID= $_GET['ID'];
$AB_CODI= $_GET['AB_CODI'];

## execute query 
$query = "call sp_d_Soccamici('".$ID."')";

## Execute query
$ret = $mysqli->query($query);

include "/var/www/modules/mysqli_close_db.php";

header("location: socc_amici_mod.php?AB_CODI=$AB_CODI"); 

?>
