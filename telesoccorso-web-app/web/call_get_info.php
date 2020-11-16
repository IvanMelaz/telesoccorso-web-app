<?php

$ip_address = $_SERVER['REMOTE_ADDR'];

$path = "/usr/sbin/asterisk -rx \"sip show peers\" | grep ".$ip_address." | awk '{ print $1 }'";
// echo $path;

//////////////////////
// apre il file
//////////////////////

$handle = popen($path, "r");

//////////////////////
// legge il dato
//////////////////////
$buffer = fgets($handle, 4096);

pclose($handle);

echo substr($buffer, 0, 3);



?>
