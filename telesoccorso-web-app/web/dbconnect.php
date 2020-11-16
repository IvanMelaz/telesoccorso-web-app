<?php

include "/var/www/mainfile.php";

$host = getenv('MYSQL_DATABASE') ;
$user = getenv('MYSQL_USER');
$pw = getenv('MYSQL_PASSWORD');
$db = "telesoccorso";

echo "Database name: ".getenv('MYSQL_DATABASE')."user: ".$user;

$mysqli = mysqli_connect($host, $user, $pw, $db);

if (!$mysqli) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

## Fetch result
$query = "call sp_v_Coda_Eve('matteo')" ;
$result = $mysqli->query($query);
/* free result set */
mysqli_free_result($result);


echo "<br>Success: A proper connection to MySQL was made! The my_db database is great.</br>";
echo "<br>Host information: " . mysqli_get_host_info($mysqli) . "</br>";

mysqli_close($mysqli);
?>