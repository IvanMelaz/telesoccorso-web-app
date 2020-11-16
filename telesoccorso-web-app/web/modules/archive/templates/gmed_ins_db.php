<?php

include "/var/www/modules/mysqli_open_db.php";


$AB_CODI=$_GET["AB_CODI"];

$NOMINATIVO = str_replace("'","''",$_POST["NOMINATIVO"]);
$TEL_1 = $_POST["TEL_1"];
$TEL_2 = $_POST["TEL_2"];
$NUMERO = $_POST["NUMERO"];
$REFERENTE = str_replace("'","''",$_POST["REFERENTE"]);
$CELLULARE = $_POST["CELLULARE"];
$TIPO = str_replace("'","''",$_POST["TIPO"]);
$NOTE = str_replace("'","''",$_POST["NOTE"]);
$ORARIO = str_replace("'","''",$_POST["ORARIO"]);

## execute query 
$query = "call sp_i_Gmed(
'".$AB_CODI."',
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

header("location: gmed_mod.php?AB_CODI=".$AB_CODI); 
?>