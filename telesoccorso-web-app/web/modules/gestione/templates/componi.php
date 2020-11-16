<?php

include "/var/www/mainfile.php";

$tscID = $_GET['ID'];
$tscUser = $_GET['TSCUSER'];
$tscAB_CODI = $_GET['AB_CODI'];
$tscNOMINATIVO = $_GET['NOMINATIVO'];
$strExten = "0".$_GET['PHONENUMBER'];
$strRemAddr = $_SERVER['REMOTE_ADDR'];

// toglie spazi vuoti //
$tscNOMINATIVO = str_replace(" ", "%20", $tscNOMINATIVO);


global $Channel;

//////////////////////////////////////////////////////////////
// genera pipe per determinare sip phone/ip address
//////////////////////////////////////////////////////////////

$path = "/usr/sbin/asterisk -rx \"sip show peers\" | grep ".$strRemAddr." | awk '{ print $1 }'";

//////////////////////
// apre il file
//////////////////////

$handle = popen($path, "r");

//////////////////////
// legge il dato
//////////////////////
$buffer = fgets($handle, 4096);

pclose($handle);

$strChannel = "SIP/".substr($buffer, 0, 3);

#------------------------------------------------------------------------------------------
#edit the below variable values to reflect your system/information
#------------------------------------------------------------------------------------------

#specify the name/ip address of your asterisk box
#if your are hosting this page on your asterisk box, then you can use
#127.0.0.1 as the host IP.  Otherwise, you will need to edit the following
#line in manager.conf, under the Admin user section:
#permit=127.0.0.1/255.255.255.0
#change to:
#permit=127.0.0.1/255.255.255.0,xxx.xxx.xxx.xxx ;(the ip address of the server this page is running on)
$strHost = XOOPS_DB_HOST;

#specify the username you want to login with (these users are defined in /etc/asterisk/manager.conf)
#this user is the default AAH AMP user; you shouldn't need to change, if you're using AAH.
$strUser = "tsc";

#specify the password for the above user
$strSecret = "tsc";

#specify the channel (extension) you want to receive the call requests with
#e.g. SIP/XXX, IAX2/XXXX, ZAP/XXXX, etc
// $strChannel = "SIP/100";

#specify the context to make the outgoing call from.  By default, AAH uses from-internal
#Using from-internal will make you outgoing dialing rules apply
$strContext = "mycustom-outgoing";

#specify the amount of time you want to try calling the specified channel before hangin up
$strWaitTime = "10000";

#specify the priority you wish to place on making this call
$strPriority = "1";

#specify the maximum amount of retries
$strMaxRetry = "2";

#--------------------------------------------------------------------------------------------
#Shouldn't need to edit anything below this point to make this script work
#--------------------------------------------------------------------------------------------
#get the phone number from the posted form

// $strChannel = $Channel;


#specify the caller id for the call
$strCallerId = "Automa. InFamiglia <$strExten>";

$length = strlen($strExten);

if ($length != 0 && is_numeric($strExten))
{
$oSocket = fsockopen($strHost, 5038, $errnum, $errdesc) or die("Connection to host failed");

fputs($oSocket, "Action: login\r\n");
fputs($oSocket, "Events: off\r\n");
fputs($oSocket, "Username: $strUser\r\n");
fputs($oSocket, "Secret: $strSecret\r\n\r\n");

fputs($oSocket, "Action: Originate\r\n");
fputs($oSocket, "Channel: $strChannel\r\n");
fputs($oSocket, "Context: $strContext\r\n");
fputs($oSocket, "Exten: $strExten\r\n");
fputs($oSocket, "Callerid: $strCallerId\r\n");
fputs($oSocket, "Timeout: $strWaitTime\r\n");
fputs($oSocket, "Variable: tsc_id=$tscID|ab_codi=$tscAB_CODI|tscuser=$tscUser|tscNominativo=$tscNOMINATIVO\r\n");
fputs($oSocket, "Priority: $strPriority\r\n\r\n");
#fputs($oSocket, "UserField: $tscID\r\n");
#fputs($oSocket, "Async: yes\r\n\r\n");

#fputs($oSocket, "Action: Logoff\r\n\r\n");
#fputs($oSocket, "Events: off\r\n");
#fputs($oSocket, "Username: $strUser\r\n");
#fputs($oSocket, "Secret: $strSecret\r\n\r\n");




fclose($oSocket);
}

header("location: scheda.php?AB_CODI=".$tscAB_CODI."&ID_ALLARME=".$tscID);
#header("location: scheda.php?AB_CODI=".$tscAB_CODI."&ID_ALLARME=".$tscID);
?>
