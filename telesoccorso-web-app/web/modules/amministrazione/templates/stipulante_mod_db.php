<?php

include "/var/www/modules/mysqli_open_db.php";

$AB_CODI = $_GET['AB_CODI'];

$NOMINATIVO= $_POST["NOMINATIVO"];
$INDIRIZZO= $_POST["INDIRIZZO"];
$COMUNE= $_POST["COMUNE"];
$PROV= $_POST["PROV"];
$CAP= $_POST["CAP"];
$CF= $_POST["CF"];
$PIVA= $_POST["PIVA"];
$TELEFONO= $_POST["TELEFONO"];
$CELLULARE= $_POST["CELLULARE"];
$TEL_UFFICIO= $_POST["TEL_UFFICIO"];
$REFERENTE= $_POST["REFERENTE"];
$IMPONIBILE= $_POST["IMPONIBILE"];
$IVA= $_POST["IVA"];
$IMPORTO_IVA= $_POST["IMPORTO_IVA"];
$TOTALE= $_POST["TOTALE"];
$CONTRATTO= $_POST["CONTRATTO"];
$PAGAMENTO= $_POST["PAGAMENTO"];
$MODO_PAGAMENTO= $_POST["MODO_PAGAMENTO"];
$NOTE= $_POST["NOTE"];
$PARENTELA= $_POST["PARENTELA"];
$EMAIL= $_POST["EMAIL"];

## execute query 
$query = "call sp_u_Stipulante('".$AB_CODI."','".$NOMINATIVO."','".$INDIRIZZO."','".$COMUNE."','".$PROV."','".$CAP."','".$CF."','".$PIVA."','".$TELEFONO."','".$CELLULARE."','".$TEL_UFFICIO."','".$REFERENTE."','".$IMPONIBILE."','".$IVA."','".$IMPORTO_IVA."','".$TOTALE."','".$CONTRATTO."','".$PAGAMENTO."','".$MODO_PAGAMENTO."','".$NOTE."','".$PARENTELA."','".$EMAIL."')";

## Execute query
$ret = $mysqli->query($query);

include "/var/www/modules/mysqli_close_db.php";

header("location: stipulante_mod.php?AB_CODI=$AB_CODI"); 

?>