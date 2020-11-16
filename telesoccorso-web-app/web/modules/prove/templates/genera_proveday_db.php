<?php

include "/var/www/modules/mysqli_open_db.php";

/********************************************
                SQL TEMPLATE
 ********************************************/

## execute query 
$query = "call sp_c_CreaFogliProvaDay()" ;

## Execute query
$ret = $mysqli->query($query);

include "/var/www/modules/mysqli_close_db.php";

header("location: home.html"); 

?>
