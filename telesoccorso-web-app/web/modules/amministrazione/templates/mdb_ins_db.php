<?php

include "/var/www/modules/mysqli_open_db.php";


$AB_CODI=$_GET["AB_CODI"];

$MEDICO = $_POST["MEDICO"];
$INDIRIZZO = $_POST["INDIRIZZO"];
$COMUNE = $_POST["COMUNE"];
$TEL_AMB = $_POST["TEL_AMB"];
$TEL_CASA = $_POST["TEL_CASA"];
$TEL_CELL = $_POST["TEL_CELL"];
$NUMERO = $_POST["NUMERO"];
$SPECIALISTA = $_POST["SPECIALISTA"];
$ORARIO = $_POST["ORARIO"];


## execute query 
$query = "call sp_i_Mdb(
'".$AB_CODI."',
'".$MEDICO."',
'".$INDIRIZZO."',
'".$COMUNE."',
'".$TEL_AMB."',
'".$TEL_CASA."',
'".$TEL_CELL."',
'".$NUMERO."',
'".$SPECIALISTA."',
'".$ORARIO."'
)";

## Execute query
$ret = $mysqli->query($query);


include "/var/www/modules/mysqli_close_db.php";

header("location: mdb_mod.php?AB_CODI=".$AB_CODI); 
?>