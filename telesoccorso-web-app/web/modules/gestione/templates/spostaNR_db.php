<?php

include "/var/www/modules/mysqli_open_db.php";

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
$query = "call sp_c_SpostaProveDay_in_NR('".$username."')";

## Execute query
$ret = $mysqli->query($query);

/* free result set */
// $ret->close();

include "/var/www/modules/mysqli_close_db.php";

// REDIRECT //

header("location: prove_day.php"); 

?>