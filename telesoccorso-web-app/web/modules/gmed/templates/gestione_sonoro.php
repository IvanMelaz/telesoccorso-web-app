<?php

header( 'refresh: 5' );

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
$query = "call sp_v_CodaEveSound('".$username."')" ;

$result = $mysqli->query($query);

while ($row = $result->fetch_assoc()) {
	$ALLARM_COUNT = $row['ALLARM_COUNT'];
	
}

/* *****************
Controlla se esistono allarmi aperti
ALLARM_COUNT > 0
****************** */


if ($ALLARM_COUNT == 0) {
	// Allarme chiuso , no sonoro
       $str = "sonoro_disattivo.html";
	eval("PrintTemplate(\"".GetTemplate($str)."\");");
	echo "sonoro disattivo";
} else {
	// Allarme aperto, sonoro luminoso
       $str = "sonoro_attivo.html";
	eval("PrintTemplate(\"".GetTemplate($str)."\");");
	echo "sonoro attivo";
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