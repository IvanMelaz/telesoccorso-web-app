<?php

$querystring = $_GET['AB_CODI'];

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


///////////////////////////////////////////////////////
//////
///////////////////////////////////////////////////////

## Fetch result
$query = "call sp_v_Anagrafica('".$querystring."')" ;

## Execute query
$ret = $mysqli->query($query);

while ($result = $ret->fetch_assoc()) {

$AB_CODI= $result["AB_CODI"];
$MATRICOLA= $result["MATRICOLA"];
$NOMINATIVO= $result["NOMINATIVO"];
$TELEFONO= $result["TELEFONO"];
$CELLULARE= $result["CELLULARE"];
$SESSO= $result["SESSO"];
$CENTRALE= $result["CENTRALE"];
$ENTE= $result["ENTE"];

$str = "anagrafica.html";
eval("PrintTemplate(\"".GetTemplate($str)."\");");

}

   /* free result set */
   $ret->close();

include "/var/www/modules/mysqli_close_db.php";

?>