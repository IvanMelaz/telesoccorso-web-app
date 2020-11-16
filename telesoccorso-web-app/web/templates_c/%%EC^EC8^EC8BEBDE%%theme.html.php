<?php /* Smarty version 2.6.5-dev, created on 2007-08-11 21:50:20
         compiled from blue/theme.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->_tpl_vars['xoops_langcode']; ?>
" lang="<?php echo $this->_tpl_vars['xoops_langcode']; ?>
">
<head>
<meta http-equiv="content-type" content="text/html; charset=<?php echo $this->_tpl_vars['xoops_charset']; ?>
" />
<meta http-equiv="content-language" content="<?php echo $this->_tpl_vars['xoops_langcode']; ?>
" />
<meta name="robots" content="<?php echo $this->_tpl_vars['xoops_meta_robots']; ?>
" />
<meta name="keywords" content="<?php echo $this->_tpl_vars['xoops_meta_keywords']; ?>
" />
<meta name="description" content="<?php echo $this->_tpl_vars['xoops_meta_description']; ?>
" />
<meta name="rating" content="<?php echo $this->_tpl_vars['xoops_meta_rating']; ?>
" />
<meta name="author" content="<?php echo $this->_tpl_vars['xoops_meta_author']; ?>
" />
<meta name="copyright" content="<?php echo $this->_tpl_vars['xoops_meta_copyright']; ?>
" />
<meta name="generator" content="Microsoft FrontPage 6.0" />
<title><?php echo $this->_tpl_vars['xoops_sitename']; ?>
 - <?php echo $this->_tpl_vars['xoops_pagetitle']; ?>
</title>
<link href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/favicon.ico" rel="SHORTCUT ICON" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/xoops.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo $this->_tpl_vars['xoops_themecss']; ?>
" />

<script type="text/javascript">
<!--
<?php echo $this->_tpl_vars['xoops_js']; ?>

//-->
</script>
</head>



<div align="center">


<table width="100%" cellspacing="0" cellpadding="0">
<tr>
<td></td>
<td>



<style type="text/css">

#csstopmenu, #csstopmenu ul{
padding: 0;
margin: 1;
list-style: none;
}

#csstopmenu li{
float: left;
position: relative;
}

#csstopmenu a{
text-decoration: none;
}

.mainitems{
border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; border-bottom:1px solid black; background-color: #D8FE89
}

.headerlinks a{
margin: auto 18px;
font-weight: bold;
color: black;
}

.submenus{
display: none;
width: 12em;
position: absolute;
top: 1em;
left: 0;
background-color: #EEFFCC;
border: 1px solid black;
}

.submenus li{
width: 100%;
}

.submenus li a{
display: block;
width: 100%;
text-indent: 4px;
}

html>body .submenus li a{ /* non IE browsers */
width: auto;
}

.submenus li a:hover{
background-color: yellow;
color: black;
}

#csstopmenu li>ul {/* non IE browsers */
top: auto;
left: auto;
}

#csstopmenu li:hover ul, li.over ul {
display: block;
}

html>body #clearmenu{ /* non IE browsers */
height: 10px;
}

    </style>

<script type="text/javascript">

startMenu = function() {
if (document.all&&document.getElementById) {
cssmenu = document.getElementById("csstopmenu");
for (i=0; i<cssmenu.childNodes.length; i++) {
node = cssmenu.childNodes[i];
if (node.nodeName=="LI") {
node.onmouseover=function() {
this.className+=" over";
}
node.onmouseout=function(){                  
this.className=this.className.replace(" over", "")
}
}
}
}
}

if (window.attachEvent)
window.attachEvent("onload", startMenu)
else
window.onload=startMenu;

    </script>

<body >
<div align="center">


<ul id="csstopmenu">

<li class="mainitems" style="border-left-width: 1px">
<div class="headerlinks"><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>/modules/gestione/">GESTIONE TSC</a></div>
</li>

<li class="mainitems" style="border-left-width: 1px">
<div class="headerlinks"><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>/modules/scheduler/">SCHEDULER</a></div>
</li>


<li class="mainitems" style="border-left-width: 1px">
<div class="headerlinks"><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>/modules/archive/">ARCHIVIO TSC</a></div>
</li>

<li class="mainitems" style="border-left-width: 1px">
<div class="headerlinks"><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>/modules/prove/">GESTIONE PROVE</a></div>
</li>

<li class="mainitems" style="border-left-width: 1px">
<div class="headerlinks"><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>/modules/gmed/">GUARDIA MEDICA</a></div>
</li>

<li class="mainitems" style="border-left-width: 1px">
<div class="headerlinks"><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>/index.php">HOMEPAGE</a></div>
</li>

</ul>

<div id="clearmenu" style="clear: left"></div>


</div>
<br>
</td>
<td width="15%">
<div align="right">

<iframe width="150" height="20" name="orologio" src="../../modules/orologio/orologio.htm" marginwidth="1" marginheight="0" scrolling="no" frameborder="1" border="1"></iframe>

</div>
</td>
<td></td>
<tr>
<td><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/themes/<?php echo $this->_tpl_vars['xoops_theme']; ?>
/images/tt12_l.gif" /></td>
<td class="tt12_m" width="100%" colspan="2"></td>
<td><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/themes/<?php echo $this->_tpl_vars['xoops_theme']; ?>
/images/tt12_r.gif" /></td>
</tr>
<tr>
<td class="bg" colspan="4"><br />
<table cellspacing="0" cellpadding="0">
<tr>
<td class="wh"></td>
</tr>
<tr><td>
<table cellspacing="0" cellpadding="0" class="whi">
<tr><td width="20%" class="wh">

<!-- Start left blocks loop -->

<?php if (count($_from = (array)$this->_tpl_vars['xoops_lblocks'])):
    foreach ($_from as $this->_tpl_vars['block']):
?>
<table cellspacing="0" cellpadding="0" width="100%">
<tr>
<td><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/themes/<?php echo $this->_tpl_vars['xoops_theme']; ?>
/images/tt12_l.gif" /></td>
<td class="tt12_m" width="100%"></td>
<td><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/themes/<?php echo $this->_tpl_vars['xoops_theme']; ?>
/images/tt12_r.gif" /></td></tr>
<tr><td colspan="3" class="blockTitle2" width="100%"><?php echo $this->_tpl_vars['block']['title']; ?>
</td></tr>
<tr><td colspan="3" class="blockContent" width="100%"><?php echo $this->_tpl_vars['block']['content']; ?>
</td></tr>
<tr><td><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/themes/<?php echo $this->_tpl_vars['xoops_theme']; ?>
/images/tb12_l.gif" /></td>
<td class="tb12_m"></td>
<td><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/themes/<?php echo $this->_tpl_vars['xoops_theme']; ?>
/images/tb12_r.gif" /></td></tr>
</table>

<br />
<?php endforeach; unset($_from); endif; ?>

<!-- End left blocks loop -->

</td>
<td style="padding: 0px 0px 0px;" class="wh">

<!-- Display center blocks if any -->

<?php if ($this->_tpl_vars['xoops_showcblock'] == 1): ?>
<table cellspacing="0">
<tr><td width="100%" colspan="2">

<!-- Start center-center blocks loop -->

<?php if (count($_from = (array)$this->_tpl_vars['xoops_ccblocks'])):
    foreach ($_from as $this->_tpl_vars['block']):
?>

<table width="100%" cellspacing="0">
<tr>
<td><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/themes/<?php echo $this->_tpl_vars['xoops_theme']; ?>
/images/tt12_l.gif" /></td>
<td class="tt12_m" width="100%"></td>
<td><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/themes/<?php echo $this->_tpl_vars['xoops_theme']; ?>
/images/tt12_r.gif" /></td>
</tr>
<tr>
<td colspan="3" class="blockTitle"><?php echo $this->_tpl_vars['block']['title']; ?>
</td>
</tr>
<tr>
<td colspan="3" class="blockContent"><?php echo $this->_tpl_vars['block']['content']; ?>
</td>
</tr>
<tr>
<td><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/themes/<?php echo $this->_tpl_vars['xoops_theme']; ?>
/images/tb12_l.gif" /></td>
<td class="tb12_m" width="100%"></td>
<td><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/themes/<?php echo $this->_tpl_vars['xoops_theme']; ?>
/images/tb12_r.gif" /></td>
</tr>
</table>
<br />

<?php endforeach; unset($_from); endif; ?>

<!-- End center-center blocks loop -->

</td></tr>
<tr><td width="50%">

<!-- Start center-left blocks loop -->

<?php if (count($_from = (array)$this->_tpl_vars['xoops_clblocks'])):
    foreach ($_from as $this->_tpl_vars['block']):
?>

<table cellspacing="0" cellpadding="0">
<tr> <td class="blockTitle"><?php echo $this->_tpl_vars['block']['title']; ?>
</td></tr>
<tr><td class="blockContent"><?php echo $this->_tpl_vars['block']['content']; ?>
</td></tr></table>
<br />
<?php endforeach; unset($_from); endif; ?>

<!-- End center-left blocks loop -->

</td><td width="50%">

<!-- Start center-right blocks loop -->

<?php if (count($_from = (array)$this->_tpl_vars['xoops_crblocks'])):
    foreach ($_from as $this->_tpl_vars['block']):
?>

<table cellspacing="0" cellpadding="0">
<tr> <td class="blockTitle"><?php echo $this->_tpl_vars['block']['title']; ?>
</td></tr>
<tr><td class="blockContent"><?php echo $this->_tpl_vars['block']['content']; ?>
</td></tr></table>
<br />
<?php endforeach; unset($_from); endif; ?>

<!-- End center-right blocks loop -->

</td></tr></table>
<?php endif; ?>

<!-- End display center blocks -->

<div id="content"><?php echo $this->_tpl_vars['xoops_contents']; ?>
</div></td>
<?php if ($this->_tpl_vars['xoops_showrblock'] == 1): ?>
<td class="wh" width=20% align=center class="wh">

<!-- Start right blocks loop -->

<?php if (count($_from = (array)$this->_tpl_vars['xoops_rblocks'])):
    foreach ($_from as $this->_tpl_vars['block']):
?>

<table cellspacing="0" cellpadding="0" width="100%">
<tr>
<td><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/themes/<?php echo $this->_tpl_vars['xoops_theme']; ?>
/images/tt12_l.gif" /></td>
<td class="tt12_m" width="100%"></td>
<td><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/themes/<?php echo $this->_tpl_vars['xoops_theme']; ?>
/images/tt12_r.gif" /></td></tr>
<tr><td colspan="3" class="blockTitle2" width="100%"><?php echo $this->_tpl_vars['block']['title']; ?>
</td></tr>
<tr><td colspan="3" class="blockContent" width="100%"><?php echo $this->_tpl_vars['block']['content']; ?>
</td></tr>
<tr><td><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/themes/<?php echo $this->_tpl_vars['xoops_theme']; ?>
/images/tb12_l.gif" /></td>
<td class="tb12_m"></td>
<td><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/themes/<?php echo $this->_tpl_vars['xoops_theme']; ?>
/images/tb12_r.gif" /></td></tr>
</table>


<br /><?php endforeach; unset($_from); endif; ?>


<!-- End right blocks loop -->

<?php endif; ?></td></tr></table>
</td></tr>
<tr><td height="30" valign="middle"2 align="center">
<p style="text-align: cener; padding-top: 5px;"><?php echo $this->_tpl_vars['xoops_banner']; ?>
</p>
<div style="text-align: center; padding-top: 2px; font-size: 10px"><?php echo $this->_tpl_vars['xoops_footer']; ?>
</div>
</td></tr>
</table>
</td></tr>
<td><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/themes/<?php echo $this->_tpl_vars['xoops_theme']; ?>
/images/tb12_l.gif" /></td>
<td class="tb12_m" width="100%" colspan="2"></td>
<td><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/themes/<?php echo $this->_tpl_vars['xoops_theme']; ?>
/images/tb12_r.gif" /></td>
</tr>
</table>
</body>
</html>