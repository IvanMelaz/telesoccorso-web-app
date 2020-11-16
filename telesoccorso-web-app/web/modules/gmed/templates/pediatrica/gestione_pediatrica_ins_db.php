<?php

include "/var/www/modules/mysqli_open_db.php";

$xoopsOption['pagetype'] = 'user';
include '/var/www/mainfile.php';
include_once XOOPS_ROOT_PATH.'/class/module.textsanitizer.php';
include_once XOOPS_ROOT_PATH .'/modules/system/constants.php';


$gperm_handler = & xoops_gethandler( 'groupperm' );
$groups = is_object($xoopsUser) ? $xoopsUser->getGroups() : XOOPS_GROUP_ANONYMOUS;
$username = $xoopsUser->getVar('uname');
$uid == $xoopsUser->getVar('uid');

if ($username == "") {
    redirect_header('index.php', 3, _US_SELECTNG);
     exit();
}


$CONVENZIONE= $_POST["CONVENZIONE"];
$DOSSIER= $_POST["DOSSIER"];
$NOMINATIVO= $_POST["NOMINATIVO"];
$INDIRIZZO= $_POST["INDIRIZZO"];
$COMUNE= $_POST["COMUNE"];
$TELEFONO= $_POST["TELEFONO"];
$MEDICO= $_POST["MEDICO"];
$TEMPO= $_POST["TEMPO"];
$USCITA= $_POST["USCITA"];
$NOTE= $_POST["NOTE"];


## execute query 
$query = "call sp_i_Pediatrica(
'".$CONVENZIONE."',
'".$DOSSIER."',
'".$NOMINATIVO."',
'".$INDIRIZZO."',
'".$COMUNE."',
'".$TELEFONO."',
'".$MEDICO."',
'".$TEMPO."',
'".$USCITA."',
'".$NOTE."',
'".$username."'
)";

## Execute query
$ret = $mysqli->query($query);


include "/var/www/modules/mysqli_close_db.php";

header("location: gestione_pediatrica.php"); 
?>