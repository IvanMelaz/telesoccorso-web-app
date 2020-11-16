<?php

include "/var/www/modules/mysqli_open_db.php";

$AB_CODI = $_GET['AB_CODI'];
$MATRICOLA = $_GET['MATRICOLA'];


/********************************************
                SQL TEMPLATE
 ********************************************/


## execute query 
$query = "call sp_i_GeneraAllarme('".$AB_CODI."','".$MATRICOLA."','MUX_G','1','GENERATO')" ;

## Execute query
$ret = $mysqli->query($query);

include "/var/www/modules/mysqli_close_db.php";

header("location: home.html"); 

?>
