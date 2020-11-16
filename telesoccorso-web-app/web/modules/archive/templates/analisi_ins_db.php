<?php

$AB_CODI=$_GET["AB_CODI"];

include "/var/www/modules/mysqli_open_db.php";

$NOMINATIVO= str_replace("'","''",$_POST["NOMINATIVO"]);
$NUMERO= $_POST["NUMERO"];
$TEL_1= $_POST["TEL_1"];
$TEL_2= $_POST["TEL_2"];
$FAX= $_POST["FAX"];
$REFERENTE= str_replace("'","''",$_POST["REFERENTE"]);
$CELLULARE= $_POST["CELLULARE"];
$ORARIO= str_replace("'","''",$_POST["ORARIO"]);
$NOTE= str_replace("'","''",$_POST["NOTE"]);
$INDIRIZZO= str_replace("'","''",$_POST["INDIRIZZO"]);
$COMUNE= str_replace("'","''",$_POST["COMUNE"]);
$PROV= $_POST["PROV"];
$CAP= $_POST["CAP"];



## execute query 
$query = "call sp_i_Analisi(
'".$AB_CODI."',
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

header("location: analisi_mod.php?AB_CODI=".$AB_CODI); 
?>