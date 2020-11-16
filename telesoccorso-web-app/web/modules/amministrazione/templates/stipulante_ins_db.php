<?php

include "/var/www/modules/mysqli_open_db.php";

$UTENTE_STIPULANTE= $_POST["$UTENTE_STIPULANTE"];

    $AB_CODI=$_POST["AB_CODI"];
	$NOMINATIVO = $_POST["NOMINATIVO"];
	$INDIRIZZO = $_POST["INDIRIZZO"];
	$COMUNE = $_POST["COMUNE"];
	$PROVINCIA = $_POST["PROV"];
	$CAP = $_POST["CAP"];
	$TELEFONO = $_POST["TELEFONO"];
	$CELLULARE = $_POST["CELLULARE"];
	
	
switch ($UTENTE_STIPULANTE) 
{

case "SI":

## execute query 
$query = "call sp_i_Stipulante(
'".$AB_CODI."',
'".$NOMINATIVO."',
'".$INDIRIZZO."',
'".$COMUNE."',
'".$PROV."',
'".$CAP."',
'".$TELEFONO."',
'".$CELLULARE."'
)";
    break;
    
case "NO":

## execute query 
$query = "call sp_i_Stipulante('".$AB_CODI."','','','','','','','')";

    break;
}




## Execute query
$ret = $mysqli->query($query);


include "/var/www/modules/mysqli_close_db.php";

?>