<?php
$xoops_admin_menu_js = "function popUpL1() {
shutdown();
popUp(\"L1\",true);
}
";
$xoops_admin_menu_ml[1] = "setleft('L1',105);
settop('L1',150);
";
$xoops_admin_menu_sd[1] = "popUp('L1',false);
";
$xoops_admin_menu_ft[1] = "<a href='".XOOPS_URL."/modules/system/admin.php' onmouseover='moveLayerY(\"L1\", currentY,event) ; popUpL1();'><img src='".XOOPS_URL."/modules/system/images/system_slogo.png' alt='' /></a><br />
";
$xoops_admin_menu_ft[11] = "<a href='".XOOPS_URL."/modules/archive/' onmouseover='shutdown();'><img src='".XOOPS_URL."/modules/archive/archivio.png' alt='' /></a><br />
";
$xoops_admin_menu_ft[14] = "<a href='".XOOPS_URL."/modules/amministrazione/' onmouseover='shutdown();'><img src='".XOOPS_URL."/modules/amministrazione/amministrazione.png' alt='' /></a><br />
";
$xoops_admin_menu_ft[15] = "<a href='".XOOPS_URL."/modules/scheduler/' onmouseover='shutdown();'><img src='".XOOPS_URL."/modules/scheduler/scheduler.png' alt='' /></a><br />
";
$xoops_admin_menu_ft[16] = "<a href='".XOOPS_URL."/modules/webmaster/' onmouseover='shutdown();'><img src='".XOOPS_URL."/modules/webmaster/webmaster.png' alt='' /></a><br />
";
$xoops_admin_menu_ft[19] = "<a href='".XOOPS_URL."/modules/gestione/' onmouseover='shutdown();'><img src='".XOOPS_URL."/modules/gestione/gestione.png' alt='' /></a><br />
";
$xoops_admin_menu_ft[20] = "<a href='".XOOPS_URL."/modules/gmed/' onmouseover='shutdown();'><img src='".XOOPS_URL."/modules/gmed/guardia medica.png' alt='' /></a><br />
";
$xoops_admin_menu_ft[21] = "<a href='".XOOPS_URL."/modules/statistiche/' onmouseover='shutdown();'><img src='".XOOPS_URL."/modules/statistiche/statistiche.png' alt='' /></a><br />
";
$xoops_admin_menu_ft[26] = "<a href='".XOOPS_URL."/modules/prove/' onmouseover='shutdown();'><img src='".XOOPS_URL."/modules/prove/prove.png' alt='' /></a><br />
";
$xoops_admin_menu_dv = "<div id='L1' style='position: absolute; visibility: hidden; z-index:1000;'><table class='outer' width='150' cellspacing='1'><tr><th nowrap='nowrap'>Sistema</th></tr><tr><td class='even' nowrap='nowrap'><img src='".XOOPS_URL."/images/pointer.gif' width='8' height='8' alt='' />&nbsp;<a href='".XOOPS_URL."/modules/system/admin.php?fct=banners' onmouseover='popUpL1();'>Banners</a><br />
<img src='".XOOPS_URL."/images/pointer.gif' width='8' height='8' alt='' />&nbsp;<a href='".XOOPS_URL."/modules/system/admin.php?fct=blocksadmin' onmouseover='popUpL1();'>Blocchi</a><br />
<img src='".XOOPS_URL."/images/pointer.gif' width='8' height='8' alt='' />&nbsp;<a href='".XOOPS_URL."/modules/system/admin.php?fct=groups' onmouseover='popUpL1();'>Gruppi</a><br />
<img src='".XOOPS_URL."/images/pointer.gif' width='8' height='8' alt='' />&nbsp;<a href='".XOOPS_URL."/modules/system/admin.php?fct=images' onmouseover='popUpL1();'>Immagini</a><br />
<img src='".XOOPS_URL."/images/pointer.gif' width='8' height='8' alt='' />&nbsp;<a href='".XOOPS_URL."/modules/system/admin.php?fct=modulesadmin' onmouseover='popUpL1();'>Moduli</a><br />
<img src='".XOOPS_URL."/images/pointer.gif' width='8' height='8' alt='' />&nbsp;<a href='".XOOPS_URL."/modules/system/admin.php?fct=preferences' onmouseover='popUpL1();'>Preferenze</a><br />
<img src='".XOOPS_URL."/images/pointer.gif' width='8' height='8' alt='' />&nbsp;<a href='".XOOPS_URL."/modules/system/admin.php?fct=smilies' onmouseover='popUpL1();'>Faccine</a><br />
<img src='".XOOPS_URL."/images/pointer.gif' width='8' height='8' alt='' />&nbsp;<a href='".XOOPS_URL."/modules/system/admin.php?fct=userrank' onmouseover='popUpL1();'>Livello utenti</a><br />
<img src='".XOOPS_URL."/images/pointer.gif' width='8' height='8' alt='' />&nbsp;<a href='".XOOPS_URL."/modules/system/admin.php?fct=users' onmouseover='popUpL1();'>Modifica utenti</a><br />
<img src='".XOOPS_URL."/images/pointer.gif' width='8' height='8' alt='' />&nbsp;<a href='".XOOPS_URL."/modules/system/admin.php?fct=findusers' onmouseover='popUpL1();'>Trova utenti</a><br />
<img src='".XOOPS_URL."/images/pointer.gif' width='8' height='8' alt='' />&nbsp;<a href='".XOOPS_URL."/modules/system/admin.php?fct=mailusers' onmouseover='popUpL1();'>Mail agli utenti</a><br />
<img src='".XOOPS_URL."/images/pointer.gif' width='8' height='8' alt='' />&nbsp;<a href='".XOOPS_URL."/modules/system/admin.php?fct=avatars' onmouseover='popUpL1();'>Avatars</a><br />
<img src='".XOOPS_URL."/images/pointer.gif' width='8' height='8' alt='' />&nbsp;<a href='".XOOPS_URL."/modules/system/admin.php?fct=tplsets' onmouseover='popUpL1();'>Temi</a><br />
<img src='".XOOPS_URL."/images/pointer.gif' width='8' height='8' alt='' />&nbsp;<a href='".XOOPS_URL."/modules/system/admin.php?fct=comments' onmouseover='popUpL1();'>Commenti</a><br />
<div style='margin-top: 5px; font-size: smaller; text-align: right;'><a href='#' onmouseover='shutdown();'>[Chiudi]</a></div></td></tr><tr><th style='font-size: smaller; text-align: left;'><img src='".XOOPS_URL."/modules/system/images/system_slogo.png' alt='' /><br /><b>"._VERSION.":</b> 1<br /><b>"._DESCRIPTION.":</b> Per l'amministrazione delle impostazioni chiave del sito.</th></tr></table></div>
<script language='JavaScript'>
<!--
moveLayers();
loaded = 1;
// -->
</script>
";

?>