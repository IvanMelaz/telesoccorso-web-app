<?php

$FILENAME = $_GET['FILENAME'];



$command="sudo mv /var/spool/asterisk/monitor/".str_replace(' ','\ ',$FILENAME)." /var/www/modules/gestione/monitor/";

#$handle = popen($command, "r");

echo exec($command);

header("location: http://192.168.10.1/xoops/modules/gestione/monitor/$FILENAME"); 
	
?>
