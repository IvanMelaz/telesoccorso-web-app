<?php

include "/var/www/mainfile.php";

$host = getenv('MYSQL_DATABASE') ;
$user = getenv('MYSQL_USER');
$pw = getenv('MYSQL_PASSWORD');
$db = "telesoccorso";

$mysqli = new mysqli($host,$user,$pw,$db);

/* check connection */ 
if (mysqli_connect_errno()) {
   printf("Database error failed: %s\n", mysqli_connect_errno());
   printf("Connect failed: %s\n", mysqli_connect_error());
   exit();
}

?>
