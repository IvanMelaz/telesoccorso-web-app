<?php

include "/var/www/modules/mysqli_open_db.php";

$ID= $_GET['ID'];


$REFERTO= $_POST["REFERTO"];


## execute query 
$query = "call sp_u_Pediatrica('".$ID."','".$REFERTO."')";

## Execute query
$ret = $mysqli->query($query);

include "/var/www/modules/mysqli_close_db.php";

header("location: gestione_gmed.php"); 

?>