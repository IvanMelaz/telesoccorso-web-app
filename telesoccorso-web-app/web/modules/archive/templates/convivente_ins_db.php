<?php

include "/var/www/modules/mysqli_open_db.php";

$AB_CODI= $_GET['AB_CODI'];
$NOME= str_replace("'","''",$_POST["NOME"]);
$COINTESTATARIO= $_POST["COINTESTATARIO"];
$SESSO= $_POST["SESSO"];
$CELLULARE= $_POST["CELLULARE"];
$DATA_NASCITA= $_POST["DATA_NASCITA"];
$LUOGO_NASCITA= $_POST["LUOGO_NASCITA"];
$ALTEZZA= $_POST["ALTEZZA"];
$PESO= $_POST["PESO"];
$PATOLOGIA= str_replace("'","''",$_POST["PATOLOGIA"]);
$TERAPIA= str_replace("'","''",$_POST["TERAPIA"]);
$EVIDENZIA= str_replace("'","''",$_POST["EVIDENZIA"]);
$NOTE= str_replace("'","''",$_POST["NOTE"]);
$PARENTELA= str_replace("'","''",$_POST["PARENTELA"]);

## execute query 
$query = "call sp_i_Convivente('".$AB_CODI."','".$NOME."','".$COINTESTATARIO."','".$CELLULARE."','".$SESSO."','".$DATA_NASCITA."','".$LUOGO_NASCITA."','".$ALTEZZA."','".$PESO."','".$PATOLOGIA."','".$TERAPIA."','".$EVIDENZIA."','".$NOTE."','".$PARENTELA."')";

## Execute query
$ret = $mysqli->query($query);

include "/var/www/modules/mysqli_close_db.php";

header("location: convivente_mod.php?AB_CODI=$AB_CODI"); 

?>
