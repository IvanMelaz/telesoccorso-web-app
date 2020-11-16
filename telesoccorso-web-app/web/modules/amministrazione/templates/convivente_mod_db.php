<?php

include "/var/www/modules/mysqli_open_db.php";

$AB_CODI= $_GET['AB_CODI'];
$ID= $_GET['ID'];
$NOME= $_POST["NOME"];
$COINTESTATARIO= $_POST["COINTESTATARIO"];
$SESSO= $_POST["SESSO"];
$CELLULARE= $_POST["CELLULARE"];
$DATA_NASCITA= $_POST["DATA_NASCITA"];
$LUOGO_NASCITA= $_POST["LUOGO_NASCITA"];
$ALTEZZA= $_POST["ALTEZZA"];
$PESO= $_POST["PESO"];
$PATOLOGIA= $_POST["PATOLOGIA"];
$TERAPIA= $_POST["TERAPIA"];
$EVIDENZIA= $_POST["EVIDENZIA"];
$NOTE= $_POST["NOTE"];
$PARENTELA= $_POST["PARENTELA"];

## execute query 
$query = "call sp_u_Convivente('".$ID."','".$AB_CODI."','".$NOME."','".$COINTESTATARIO."','".$CELLULARE."','".$SESSO."','".$DATA_NASCITA."','".$LUOGO_NASCITA."','".$ALTEZZA."','".$PESO."','".$PATOLOGIA."','".$TERAPIA."','".$EVIDENZIA."','".$NOTE."','".$PARENTELA."')";

## Execute query
$ret = $mysqli->query($query);

include "/var/www/modules/mysqli_close_db.php";

header("location: convivente_mod.php?AB_CODI=$AB_CODI"); 

?>
