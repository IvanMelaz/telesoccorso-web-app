<?php

include "/var/www/modules/mysqli_open_db.php";

$AB_CODI= $_GET['AB_CODI'];

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
$DATA_INSERIMENTO= $_POST["DATA_INSERIMENTO"];
$DATA_INSTALLAZIONE= $_POST["DATA_INSTALLAZIONE"];
$DATA_DISINSTALLAZIONE= $_POST["DATA_DISINSTALLAZIONE"];
$MOTIVO_DISINSTALLAZIONE= $_POST["MOTIVO_DISINSTALLAZIONE"];

## execute query 
$query = "call sp_u_Scheda('".$AB_CODI."','".$INDIRIZZO."','".$COMUNE."','".$PROVINCIA."','".$CAP."','".$TAVOLA."','".$ZONA."','".$DATA_NASCITA."','".$LUOGO_NASCITA."','".$ALTEZZA."','".$PESO."','".$PATOLOGIA."','".$TERAPIA."','".$EVIDENZIA."','".$NOTE."','".$ALTRO."','".$DATI_ABITA."','".$SOPRAVVIVENZA."','".$DATI_TECNICI."','".$DATA_INSERIMENTO."','".$DATA_INSTALLAZIONE."','".$DATA_DISINSTALLAZIONE."','".$MOTIVO_DISINSTALLAZIONE."')";

## Execute query
$ret = $mysqli->query($query);

include "/var/www/modules/mysqli_close_db.php";

header("location: scheda_mod.php?AB_CODI=$AB_CODI"); 

?>