<?php

include "/var/www/modules/mysqli_open_db.php";

$ID_ALLARME = $_GET['ID_ALLARME'];
$ALLARM_TYPE = $_GET['ALLARM_TYPE'];
$AB_CODI = $_GET['AB_CODI'];

///////////////////////////////////////////////////////
///////////////////////////////////////////////////////

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

///////////////////////////////////////////////////////
///////////////////////////////////////////////////////

## execute query 
$query = "call sp_u_GestioneAllarme('".$ID_ALLARME."','".$ALLARM_TYPE."','".$username."')";

## Execute query
$ret = $mysqli->query($query);      


include "/var/www/modules/mysqli_close_db.php";


if ( $ALLARM_TYPE == "R" || $ALLARM_TYPE == "RT" || $ALLARM_TYPE == "S" || $ALLARM_TYPE == "ST") {
	header("location: modulo_info_allarme.php?AB_CODI=$AB_CODI&ID_ALLARME=$ID_ALLARME"); 
	exit();
}

if ( $ALLARM_TYPE == "C") {
	header("location: richiama.php?AB_CODI=$AB_CODI&ID_ALLARME=$ID_ALLARME"); 
	exit();
}

if ( $ALLARM_TYPE == "T" || $ALLARM_TYPE == "P"|| $ALLARM_TYPE == "Cc" || $ALLARM_TYPE == "E") {
	header("location: home.html"); 
	exit();
}

if ( $ALLARM_TYPE == "A") {
	header("location: home.html"); 
	exit();
}

?> 
