<?php

include "/var/www/modules/mysqli_open_db.php";


$ENTE=$_POST["ENTE"];
$DESCRIZIONE= str_replace("'","''",$_POST["DESCRIZIONE"]);
$TEL_1 = $_POST["TEL_1"];
$TEL_2 = $_POST["TEL_2"];
$REFERENTE = str_replace("'","''",$_POST["REFERENTE"]);
$COMUNE= str_replace("'","''",$_POST["COMUNE"]);
$INDIRIZZO= str_replace("'","''",$_POST["INDIRIZZO"]);
$CAP= $_POST["CAP"];

## execute query 
$query = "call sp_i_Ente(
'".$ENTE."',
'".$DESCRIZIONE."',
'".$TEL_1."',
'".$TEL_2."',
'".$REFERENTE."',
'".$COMUNE."',
'".$INDIRIZZO."',
'".$CAP."'
)";

## Execute query
$ret = $mysqli->query($query);


include "/var/www/modules/mysqli_close_db.php";

header("location: ente_mod.php"); 
?>