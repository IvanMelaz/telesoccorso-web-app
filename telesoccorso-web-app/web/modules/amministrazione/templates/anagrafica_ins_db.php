<?php

include "/var/www/modules/mysqli_open_db.php";

$AB_CODI=$_POST['AB_CODI'];
$MATRICOLA = $_POST['MATRICOLA'];
$NOMINATIVO = $_POST['NOMINATIVO'];
$SESSO = $_POST['SESSO'];
$CENTRALE = $_POST['CENTRALE'];
$TELEFONO = $_POST['TELEFONO'];
$CELLULARE = $_POST['CELLULARE'];
$INDIRIZZO= $_POST["INDIRIZZO"];
$COMUNE= $_POST["COMUNE"];
$PROVINCIA= $_POST["PROVINCIA"];
$CAP= $_POST["CAP"];
$TAVOLA= $_POST["TAVOLA"];
$ZONA= $_POST["ZONA"];
$DATA_NASCITA= $_POST["DATA_NASCITA"];
$LUOGO_NASCITA= $_POST["LUOGO_NASCITA"];
$ALTEZZA= $_POST["ALTEZZA"];
$PESO= $_POST["PESO"];
$PATOLOGIA= $_POST["PATOLOGIA"];
$TERAPIA= $_POST["TERAPIA"];
$EVIDENZIA= $_POST["EVIDENZIA"];
$NOTE= $_POST["NOTE"];
$ALTRO= $_POST["ALTRO"];
$DATI_ABITA= $_POST["DATI_ABITA"];
$SOPRAVVIVENZA= $_POST["SOPRAVVIVENZA"];
$DATI_TECNICI= $_POST["DATI_TECNICI"];
$UTENTE_STIPULANTE= $_POST["$UTENTE_STIPULANTE"];

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
'".$DATI_TECNICI."'
)";

## Execute query
$ret = $mysqli->query($query);

include "stipulante_ins_db.php";

include "/var/www/modules/mysqli_close_db.php";

header("location: scheda_mod.php?AB_CODI=".$AB_CODI); 
?>