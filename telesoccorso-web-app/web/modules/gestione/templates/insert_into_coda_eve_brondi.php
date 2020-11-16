<?php

include "/var/www/modules/mysqli_open_db.php";

$phone_number = $_GET['PHONE_NUMBER'];
$filename = trim($_GET['FILENAME']);
$centrale = "MILANO";

/********************************************
                SQL TEMPLATE
 ********************************************/


## execute query 
$query = "call sp_i_InsertAllarmi_in_CodaEve_Brondi('".$phone_number."','".$filename."','".$centrale."')" ;
echo $query; 

## Execute query
$ret = $mysqli->query($query);

include "/var/www/modules/mysqli_close_db.php";

?>
