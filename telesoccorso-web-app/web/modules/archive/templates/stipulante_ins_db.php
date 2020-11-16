<?php

include "/var/www/modules/mysqli_open_db.php";


       $AB_CODI=$_POST["AB_CODI"];
	$NOMINATIVO = $_POST["NOMINATIVO"];
	$INDIRIZZO = $_POST["INDIRIZZO"];
	$COMUNE = $_POST["COMUNE"];
	$PROVINCIA = $_POST["PROV"];
	$CAP = $_POST["CAP"];
	$TELEFONO = $_POST["TELEFONO"];
	$CELLULARE = $_POST["CELLULARE"];
	
	
{

## execute query 
$query = "call sp_i_Stipulante('".$AB_CODI."','','','','','','','')";

}




## Execute query
$ret = $mysqli->query($query);


include "/var/www/modules/mysqli_close_db.php";

?>