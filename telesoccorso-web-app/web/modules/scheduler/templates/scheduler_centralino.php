<?php

include "header_scheduler_centralino.html";

include "/var/www/modules/mysqli_open_db.php";

## Fetch result
$query = "CALL sp_v_Context()" ;

$ret = $mysqli->query($query);

while ($result = $ret->fetch_assoc()) {

$calldate= $result["calldate"];
$clid= $result["clid"];
$src= $result["src"]; 
$dst= $result["dst"];
$dcontext= $result["dcontext"];
$channel= $result["channel"];
$dstchannel= $result["dstchannel"];
$duration= $result["duration"];
$billsec= $result["billsec"];
$disposition= $result["disposition"];

$str = "scheduler_centralino.html";
eval("PrintTemplate(\"".GetTemplate($str)."\");");

}

/*
	RENDER TEMPLATE
*/

function GetTemplate($template) {

return str_replace("\"","\\\"",implode("",file($template)));

}

   /* free result set */
   $ret->close();

## QUESTA FUNZIONE STAMPA A VIDEO IL TEMPLATE RISULTANTE DALLA FUNZIONE PRECEDENTE
function PrintTemplate($template) {

echo $template;

}

include "/var/www/modules/mysqli_close_db.php";

?>