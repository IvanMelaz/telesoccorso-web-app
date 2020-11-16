<?php

include "/var/www/modules/mysqli_open_db.php";

$ID= $_GET['ID'];
$AB_CODI= $_GET['AB_CODI'];

$MEDICO= str_replace("'","''",$_POST["MEDICO"]);
$INDIRIZZO= str_replace("'","''",$_POST["INDIRIZZO"]);
$COMUNE= str_replace("'","''",$_POST["COMUNE"]);
$TEL_AMB= $_POST["TEL_AMB"];
$TEL_CASA= $_POST["TEL_CASA"];
$TEL_CELL= $_POST["TEL_CELL"];
$SPECIALISTA= str_replace("'","''",$_POST["SPECIALISTA"]);
$ORARIO= str_replace("'","''",$_POST["ORARIO"]);
$NUMERO= $_POST["NUMERO"];

## execute query 
$query = "call sp_u_mdb(
'".$ID."',
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

header("location: mdb_mod.php?AB_CODI=$AB_CODI"); 

?>