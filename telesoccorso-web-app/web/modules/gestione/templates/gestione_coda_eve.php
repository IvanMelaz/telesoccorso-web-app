<?php

include "/var/www/modules/mysqli_open_db.php";

$AB_CODI = $_GET['AB_CODI'];
$ID_ALLARME = $_GET['ID_ALLARME'];


///////////////////////////////////////////////////////
//////
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

## no Fetch result
$query = "call sp_u_SetUser_in_CodaEve('".$ID_ALLARME."','".$username."')";


## Execute query
$ret = $mysqli->query($query);

/* free result set */
// $ret->close();

include "/var/www/modules/mysqli_close_db.php";

// REDIRECT //

header("location: scheda.php?AB_CODI=$AB_CODI&ID_ALLARME=$ID_ALLARME"); 

?>