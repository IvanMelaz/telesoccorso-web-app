<?php

header( 'refresh: 15' );

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

## Fetch result
$query = "call sp_v_Prove_nr('".$username."')" ;

$result = $mysqli->query($query);

while ($row = $result->fetch_assoc()) {

$ID= $row['ID'];
$AB_CODI= $row['AB_CODI'];
$FASCIA= $row['FASCIA'];
$USER= $row['USER'];
$GESTIONE= $row['GESTIONE'];
$RICHIAMARE= $row['RICHIAMARE'];

switch ($GESTIONE) 
{
case "OK":
    $Mycolor="#00FF00";
    break;
case "NR":
    $Mycolor="#00FFFF";
    break;
case "OCC":
    $Mycolor="#FF0000";
    break;
case "MSG":
    $Mycolor="#FFFF00";
    break;
case "":
    $Mycolor="#B0D8FF";
    break;
}

$str = "prove_nr.html";
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