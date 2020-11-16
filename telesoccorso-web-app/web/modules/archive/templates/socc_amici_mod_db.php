<?php

include "/var/www/modules/mysqli_open_db.php";

$ID= $_GET['ID'];
$AB_CODI= $_GET['AB_CODI'];

$NOMINATIVO= str_replace("'","''",$_POST["NOMINATIVO"]);
$TEL_CASA= $_POST["TEL_CASA"];
$TEL_UFF= $_POST["TEL_UFF"];
$TEL_CELL= $_POST["TEL_CELL"];
$TEMPO_CASA= str_replace("'","''",$_POST["TEMPO_CASA"]);
$TEMPO_UFF= str_replace("'","''",$_POST["TEMPO_UFF"]);
$CHIAVI= $_POST["CHIAVI"];
$COINQUILINO= $_POST["COINQUILINO"];
$PARENTE= str_replace("'","''",$_POST["PARENTE"]);
$NUMERO= $_POST["NUMERO"];

## execute query 
$query = "call sp_u_Soccamici(
'".$ID."',
'".$NOMINATIVO."',
'".$TEL_CASA."',
'".$TEL_UFF."',
'".$TEL_CELL."',
'".$TEMPO_CASA."',
'".$TEMPO_UFF."',
'".$CHIAVI."',
'".$COINQUILINO."',
'".$PARENTE."',
'".$NUMERO."'
)";

## Execute query
$ret = $mysqli->query($query);

include "/var/www/modules/mysqli_close_db.php";

header("location: socc_amici_mod.php?AB_CODI=$AB_CODI"); 

?>