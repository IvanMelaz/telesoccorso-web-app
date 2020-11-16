<?php

include "/var/www/modules/mysqli_open_db.php";

$ID= $_GET['ID'];

## execute query 
$query = "call sp_d_Ente('".$ID."')";

## Execute query
$ret = $mysqli->query($query);

include "/var/www/modules/mysqli_close_db.php";

header("location: ente_mod.php"); 

?>
