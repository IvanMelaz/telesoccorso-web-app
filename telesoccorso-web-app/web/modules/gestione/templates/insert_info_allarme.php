<?php

include "open_db.php";

$idallarme= $_GET['ID_ALLARME'];
$uid= $_GET['UID'];
$ab_codi= $_GET['AB_CODI'];
$nominativo= $_GET['NOMINATIVO'];
$tscuser= $_GET['TSCUSER'];

include "/var/www/modules/mysqli_open_db.php";

/********************************************
                SQL TEMPLATE
 ********************************************/


## execute query 
$query = "call sp_u_InfoAllarme('".$uid."','".$idallarme."','".$ab_codi."','".$nominativo."','".$tscuser."')" ;
echo $query;

## Execute query
$ret = $mysqli->query($query);

include "/var/www/modules/mysqli_close_db.php";

?>
