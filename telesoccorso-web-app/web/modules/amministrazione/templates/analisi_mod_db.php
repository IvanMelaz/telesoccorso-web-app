<?php

include "/var/www/modules/mysqli_open_db.php";

$ID= $_GET['ID'];
$AB_CODI= $_GET['AB_CODI'];

$NOMINATIVO= $_POST["NOMINATIVO"];
$NUMERO= $_POST["NUMERO"];
$TEL_1= $_POST["TEL_1"];
$TEL_2= $_POST["TEL_2"];
$FAX= $_POST["FAX"];
$REFERENTE= $_POST["REFERENTE"];
$CELLULARE= $_POST["CELLULARE"];
$ORARIO= $_POST["ORARIO"];
$NOTE= $_POST["NOTE"];
$INDIRIZZO= $_POST["INDIRIZZO"];
$COMUNE= $_POST["COMUNE"];
$PROV= $_POST["PROV"];
$CAP= $_POST["CAP"];

## execute query 
$query = "call sp_u_Analisi(
'".$ID."',
'".$NOMINATIVO."',
'".$NUMERO."',
'".$TEL_1."',
'".$TEL_2."',
'".$FAX."',
'".$REFERENTE."',
'".$CELLULARE."',
'".$ORARIO."',
'".$NOTE."',
'".$INDIRIZZO."',
'".$COMUNE."',
'".$PROV."',
'".$CAP."'
)";

## Execute query
$ret = $mysqli->query($query);

include "/var/www/modules/mysqli_close_db.php";

header("location: analisi_mod.php?AB_CODI=$AB_CODI"); 

?>