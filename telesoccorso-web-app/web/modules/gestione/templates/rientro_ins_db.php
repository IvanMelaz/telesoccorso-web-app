<?php

include "/var/www/modules/mysqli_open_db.php";

$AB_CODI = $_GET['AB_CODI'];
$ID_ALLARME = $_GET['ID_ALLARME'];
$ID = $_GET['ID'];


## execute query 
$query = "call sp_u_Rientro('".$ID."')";

## Execute query
$ret = $mysqli->query($query);

include "/var/www/modules/mysqli_close_db.php";

header("location: scheda.php?AB_CODI=$AB_CODI&ID_ALLARME=$ID_ALLARME"); 

?>