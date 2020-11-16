<?php

include "/var/www/modules/mysqli_open_db.php";

$ID= $_GET['ID'];
$AB_CODI= $_GET['AB_CODI'];

$NOMINATIVO = $_POST["NOMINATIVO"];
$TEL_1 = $_POST["TEL_1"];
$TEL_2 = $_POST["TEL_2"];
$NUMERO = $_POST["NUMERO"];
$REFERENTE = $_POST["REFERENTE"];
$CELLULARE = $_POST["CELLULARE"];
$TIPO = $_POST["TIPO"];
$NOTE = $_POST["NOTE"];
$ORARIO = $_POST["ORARIO"];

## execute query 
$query = "call sp_u_Gmed(
'".$ID."',
'".$NOMINATIVO."',
'".$TEL_1."',
'".$TEL_2."',
'".$NUMERO."',
'".$REFERENTE."',
'".$CELLULARE."',
'".$TIPO."',
'".$NOTE."',
'".$ORARIO."'
)";

## Execute query
$ret = $mysqli->query($query);

include "/var/www/modules/mysqli_close_db.php";

header("location: gmed_mod.php?AB_CODI=$AB_CODI"); 

?>