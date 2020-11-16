<?php

include "/var/www/modules/mysqli_open_db.php";

$ID= $_GET['ID'];
$AB_CODI= $_GET['AB_CODI'];

$GIORNO= $_POST["GIORNO"];
$FOGLIO= $_POST["FOGLIO"];
$FASCIA= $_POST["FASCIA"];
$NOTE= $_POST["NOTE"];
$RICHIAMARE= $_POST["RICHIAMARE"];

## execute query 
$query = "call sp_u_Prove('".$ID."','".$GIORNO."','".$FOGLIO."','".$FASCIA."','".$NOTE."','".$RICHIAMARE."')";

## Execute query
$ret = $mysqli->query($query);

include "/var/www/modules/mysqli_close_db.php";

header("location: prove_mod.php?AB_CODI=$AB_CODI"); 

?>
