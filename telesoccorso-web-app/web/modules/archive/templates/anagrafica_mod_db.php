<?php

include "/var/www/modules/mysqli_open_db.php";

$AB_CODI = $_GET['AB_CODI'];
$MATRICOLA = $_POST['MATRICOLA'];
$NOMINATIVO = str_replace("'","''",$_POST['NOMINATIVO']);
$SESSO = $_POST['SESSO'];
$CENTRALE = str_replace("'","''",$_POST['CENTRALE']);
$TELEFONO = $_POST['TELEFONO'];
$CELLULARE = $_POST['CELLULARE'];
$ENTE= $_POST['ENTE'];

## execute query 
$query = "call sp_u_Anagrafica('".$AB_CODI."','".$MATRICOLA."','".$NOMINATIVO."','".$SESSO."','".$CENTRALE."','".$TELEFONO."','".$CELLULARE."','".$ENTE."')";

## Execute query
$ret = $mysqli->query($query);

include "/var/www/modules/mysqli_close_db.php";

header("location: scheda_mod.php?AB_CODI=$AB_CODI"); 

?>