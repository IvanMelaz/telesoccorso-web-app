<?php

include "/var/www/modules/mysqli_open_db.php";

$ID= $_GET['ID'];

$ENTE= $_POST["ENTE"];
$DESCRIZIONE= $_POST["DESCRIZIONE"];
$REFERENTE= $_POST["REFERENTE"];
$TEL_1= $_POST["TEL_1"];
$TEL_2= $_POST["TEL_2"];
$COMUNE= $_POST["COMUNE"];
$INDIRIZZO= $_POST["INDIRIZZO"];
$CAP= $_POST["CAP"];

## execute query 
$query = "call sp_u_Enti('".$ID."','".$ENTE."','".$DESCRIZIONE."','".$REFERENTE."','".$TEL_1."','".$TEL_2."','".$INDIRIZZO."','".$COMUNE."','".$CAP."')";

## Execute query
$ret = $mysqli->query($query);

include "/var/www/modules/mysqli_close_db.php";

header("location: ente_mod.php"); 

?>
