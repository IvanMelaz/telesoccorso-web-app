<?php

include "/var/www/modules/mysqli_open_db.php";


## execute query 
$query = "call fn_GetDayOfWeek_IT`() FROM DUAL";

## Execute query
$ret = $mysqli->query($query);

{

$str = "genera_proveday.html";
eval("PrintTemplate(\"".GetTemplate($str)."\");

echo $query;

}

   /* free result set */
   $ret->close();

include "/var/www/modules/mysqli_close_db.php";

?>
