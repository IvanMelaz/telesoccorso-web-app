<?php

include "/var/www/modules/mysqli_open_db.php";

$ID= $_GET['ID'];
$AB_CODI= $_GET['AB_CODI'];

$TIPO= str_replace("'","''",$_POST["TIPO"]);
$TEL_1= $_POST["TEL_1"];
$TEL_2= $_POST["TEL_2"];
$NUMERO= $_POST["NUMERO"];
$CELLULARE= $_POST["CELLULARE"];


## execute query 
$query = "call sp_u_Soccpubb(
'".$ID."',
'".$TIPO."',
'".$TEL_1."',
'".$TEL_2."',
'".$NUMERO."',
'".$CELLULARE."'
)";

## Execute query
$ret = $mysqli->query($query);

include "/var/www/modules/mysqli_close_db.php";

header("location: socc_pubb_mod.php?AB_CODI=$AB_CODI"); 

?>