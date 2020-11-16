<?php

header( 'refresh: 5' );

include "/var/www/modules/mysqli_open_db.php";

## QUERY CON STORED PROCEDURE
$sql = "CALL sp_v_codaprove()";


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

## Fetch result
$query = "call sp_v_codaprove('".$username."')" ;

$result = $mysqli->query($query);

while ($row = $result->fetch_assoc()) {

$AB_CODI= $row['AB_CODI'];
$ORA= $row['ORA'];
$USER= $row['USER'];
$RICHIAMARE = $row['RICHIAMARE'];

$str = "coda_prove.html";
eval("PrintTemplate(\"".GetTemplate($str)."\");");

}

/* free result set */
mysqli_free_result($result);

/*
	TEMPLATE
*/

function GetTemplate($template) {

return str_replace("\"","\\\"",implode("",file($template)));

}

## QUESTA FUNZIONE STAMPA A VIDEO IL TEMPLATE RISULTANTE DALLA FUNZIONE PRECEDENTE
function PrintTemplate($template) {

echo $template;

}

include "/var/www/modules/mysqli_close_db.php";

?>