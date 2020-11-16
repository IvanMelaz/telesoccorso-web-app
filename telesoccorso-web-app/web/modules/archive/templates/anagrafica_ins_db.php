<?php

include "/var/www/modules/mysqli_open_db.php";

$AB_CODI=$_POST['AB_CODI'];
$MATRICOLA = $_POST['MATRICOLA'];
$NOMINATIVO = str_replace("'","''",$_POST['NOMINATIVO']);
$SESSO = $_POST['SESSO'];
$CENTRALE = $_POST['CENTRALE'];
$TELEFONO = $_POST['TELEFONO'];
$CELLULARE = $_POST['CELLULARE'];
$INDIRIZZO= str_replace("'","''",$_POST["INDIRIZZO"]);
$COMUNE= str_replace("'","''",$_POST["COMUNE"]);
$PROVINCIA= $_POST["PROVINCIA"];
$CAP= $_POST["CAP"];
$TAVOLA= $_POST["TAVOLA"];
$ZONA= $_POST["ZONA"];
$DATA_NASCITA= $_POST["DATA_NASCITA"];
$LUOGO_NASCITA= str_replace("'","''",$_POST["LUOGO_NASCITA"]);
$ALTEZZA= $_POST["ALTEZZA"];
$PESO= $_POST["PESO"];
$PATOLOGIA= str_replace("'","''",$_POST["PATOLOGIA"]);
$TERAPIA= str_replace("'","''",$_POST["TERAPIA"]);
$EVIDENZIA= str_replace("'","''",$_POST["EVIDENZIA"]);
$NOTE= str_replace("'","''",$_POST["NOTE"]);
$ALTRO= str_replace("'","''",$_POST["ALTRO"]);
$DATI_ABITA= str_replace("'","''",$_POST["DATI_ABITA"]);
$SOPRAVVIVENZA= $_POST["SOPRAVVIVENZA"];
$DATI_TECNICI= str_replace("'","''",$_POST["DATI_TECNICI"]);
$ENTE= $_POST["ENTE"];

## execute query 
$query = "call sp_i_Anagrafica(
'".$AB_CODI."',
'".$MATRICOLA."',
'".$NOMINATIVO."',
'".$SESSO."',
'".$CENTRALE."',
'".$TELEFONO."',
'".$CELLULARE."',
'".$INDIRIZZO."',
'".$COMUNE."',
'".$PROVINCIA."',
'".$CAP."',
'".$TAVOLA."',
'".$ZONA."',
'".$DATA_NASCITA."',
'".$LUOGO_NASCITA."',
'".$ALTEZZA."',
'".$PESO."',
'".$PATOLOGIA."',
'".$TERAPIA."',
'".$EVIDENZIA."',
'".$NOTE."',
'".$ALTRO."',
'".$DATI_ABITA."',
'".$SOPRAVVIVENZA."',
'".$DATI_TECNICI."',
'".$ENTE."'
)";

## Execute query
$ret = $mysqli->query($query);

include "stipulante_ins_db.php";

include "/var/www/modules/mysqli_close_db.php";

header("location: scheda_mod.php?AB_CODI=".$AB_CODI); 
?>