<?php

$evento = $_GET['TIPO_EV'];
$matricola = $_GET['MATR'];
$data_arr= $_GET['DATA_ARR'];
$ora_arr = $_GET['ORA_ARR'];
$centrale = $_GET['CENTRALE'];
$mux = $_GET['MUX'];
$ritardo = $_GET['RITARDO'];
$progr = $_GET['PROGR'];
$queue = $_GET['QUEUE'];
$hist = $_GET['HIST'];

### cablo centrale e ritardo ###
$centrale = "MILANO";
$ritardo ="0";

include "/var/www/modules/mysqli_open_db.php";

/********************************************
                SQL TEMPLATE
 ********************************************/


## execute query 
$query = "call sp_i_InsertAllarmi_in_CodaEve_Italtel('".$matricola."','".$evento."','".$centrale."','".$mux."','".$ritardo."')" ;
#echo $query;
$result = $mysqli->query($query);

while ($row = $result->fetch_assoc()) {
	$AB_CODI= $row['AB_CODI'];
}

/* free result set */
mysqli_free_result($result);

include "/var/www/modules/mysqli_close_db.php";


#$redirect_url = "http://192.168.10.17/insert_into_coda_eve.asp?MUX=".$mux."&CENTRALE=".$centrale."&MATR=".$matricola."&TIPO_EV=".$evento."&RITARDO=".$ritardo."&PROGR=".$progr."&QUEUE=".$queue."&HIST=".$hist."&DATA_ARR=".$data_arr."&ORA_ARR=".$ora_arr;

#header("location: ".$redirect_url);//redirect
exit;

?>
