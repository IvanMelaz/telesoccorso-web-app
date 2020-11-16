<?php

include "/var/www/modules/mysqli_open_db.php";

$AB_CODI = $_GET['AB_CODI'];
$MATRICOLA = $_POST['MATRICOLA'];
$NOMINATIVO = $_POST['NOMINATIVO'];
$SESSO = $_POST['SESSO'];
$CENTRALE = $_POST['CENTRALE'];
$TELEFONO = $_POST['TELEFONO'];
$CELLULARE = $_POST['CELLULARE'];

## execute query 
$query = "call sp_u_Anagrafica('".$AB_CODI."','".$MATRICOLA."','".$NOMINATIVO."','".$SESSO."','".$CENTRALE."','".$TELEFONO."','".$CELLULARE."')";

## Execute query
$ret = $mysqli->query($query);

include "/var/www/modules/mysqli_close_db.php";

header("location: scheda_mod.php?AB_CODI=$AB_CODI"); 

?>