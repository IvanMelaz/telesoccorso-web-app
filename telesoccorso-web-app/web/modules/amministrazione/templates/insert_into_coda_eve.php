<?php

include "/var/www/modules/mysqli_open_db.php";

$id = $_GET['ID'];
$ab_codi = $_GET['AB_CODI'];
$evento = $_GET['EVENTO'];
$matricola = $_GET['MATRICOLA'];
$qs_data = $_GET['DATA'];
$qs_ora = $_GET['ORA'];

/********************************************
                SQL TEMPLATE
 ********************************************/


$add_all = 'INSERT INTO $table values('$uname','$ucomment','$ip','$time','')';
mysql_query($add_all) or die(mysql_error());

$sql = 'INSERT INTO CODA_EVE (ID,AB_CODI,EVENTO,MATRICOLA,DATA,ORA) VALUES ('$id','$ab_codi','$evento','$matricola','$data','$ora')' ;


## ESECUZIONE DELLA QUERY
mysql_query($sql) or die("Esecuzione Query fallita !");

$str = "inserisci_allarme.html";
eval("PrintTemplate(\"".GetTemplate($str)."\");");

}

/*
	RENDER TEMPLATE
*/

function GetTemplate($template) {

return str_replace("\"","\\\"",implode("",file($template)));

}

include "/var/www/modules/mysqli_close_db.php";

?>
