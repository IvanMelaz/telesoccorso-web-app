<?php

header( 'refresh: 5' );

include "/var/www/modules/mysqli_open_db.php";

///////////////////////////////////////////////////////
///////////////  RICAVA USER DA XOOPS  ////////////////
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

include "/var/www/modules/gestione/templates/login_mini_header.html";

## execute query 
$query = "call sp_v_Login('".$username."')";

$result = $mysqli->query($query);

while ($row = $result->fetch_assoc()) {

$USER= $row['USER'];
$FOGLIO= $row[FOGLIO_PROVE];
$ID= $row[ID_LOGIN];

$str = "login_mini.html";
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

/* free result set */
//$result->close();

include "/var/www/modules/mysqli_close_db.php";

include "/var/www/modules/gestione/templates/login_mini_fooder.html";
?>
