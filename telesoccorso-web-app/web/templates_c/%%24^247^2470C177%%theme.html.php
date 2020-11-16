<?php /* Smarty version 2.6.5-dev, created on 2006-05-11 07:56:33
         compiled from fiappleblue/theme.html */ ?>
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
<meta name="generator" content="Microsoft FrontPage 5.0" />
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
<body>
<table width="100%" cellspacing="0" cellpadding="0">
<tr>
<td></td>
<td><style type="text/css">

.hovermenu ul{
font: bold 16px arial;
padding-left: 0;
margin-left: 0;
height: 20px;
}

.hovermenu ul li{
list-style: none;
display: inline;
}

.hovermenu ul li a{
padding: 2px 0.5em;
text-decoration: none;
float: left;
color: white;
background-color: #0099FF;
border: 1px solid #FFFFFF;
}

.hovermenu ul li a:hover{
background-color: #66CCFF;
border-style: outset;
}

html>body .hovermenu ul li a:active{ /* Apply mousedown effect only to NON IE browsers */
border-style: inset;
}
    </style>
<div align="center">
<div class="hovermenu">
<ul>
<li><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/">Gestione Eventi</a></li>
<li><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/archive/">Archivio Utenti</a></li>
<li><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/scheduler/">Schedulatore</a></li>
<li><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/archive/">Allarmi Aperti</a></li>
<li><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/amministrazione/">Amministrazione</a></li>
<li><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/calendario/">Calendario Eventi</a></li>
<li><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/webmaster/">WebMaster</a></li>
<li><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/ricerche/">Ricerche</a></li>
</ul>
</div>
</div>
</td>
<td></td>
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
<td class="bg" colspan="3"><br />
<table cellspacing="0" cellpadding="0">
<tr>
<td class="wh">
<br />
</td></tr>
<tr><td>
<table cellspacing="2" cellpadding="2" class="whi">
<tr><td width="20%" class="wh">

<!-- Start left blocks loop -->

<?php if (count($_from = (array)$this->_tpl_vars['xoops_lblocks'])):
    foreach ($_from as $this->_tpl_vars['block']):
?>
<table cellspacing="0" cellpadding="2" width="100%">
<tr>
<td><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/themes/<?php echo $this->_tpl_vars['xoops_theme']; ?>
/images/tt12_l.gif" /></td>
<td class="tt12_m" width="100%"></td>
<td><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/themes/<?php echo $this->_tpl_vars['xoops_theme']; ?>
/images/tt12_r.gif" /></td></tr>
<tr><td colspan="3" class="blockTitle2" width="100%">&nbsp;<?php echo $this->_tpl_vars['block']['title']; ?>
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
<td style="padding: 0px 5px 0px;" class="wh">

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
<td colspan="3" class="blockTitle">&nbsp;<?php echo $this->_tpl_vars['block']['title']; ?>
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

<table cellspacing="1" cellpadding="5">
<tr> <td class="blockTitle">&nbsp;<?php echo $this->_tpl_vars['block']['title']; ?>
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

<table cellspacing="1" cellpadding="5">
<tr> <td class="blockTitle">&nbsp;<?php echo $this->_tpl_vars['block']['title']; ?>
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

<table cellspacing="0" cellpadding="2" width="100%">
<tr>
<td><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/themes/<?php echo $this->_tpl_vars['xoops_theme']; ?>
/images/tt12_l.gif" /></td>
<td class="tt12_m" width="100%"></td>
<td><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/themes/<?php echo $this->_tpl_vars['xoops_theme']; ?>
/images/tt12_r.gif" /></td></tr>
<tr><td colspan="3" class="blockTitle2" width="100%">&nbsp;<?php echo $this->_tpl_vars['block']['title']; ?>
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
<td class="tb12_m" width="100%"></td>
<td><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/themes/<?php echo $this->_tpl_vars['xoops_theme']; ?>
/images/tb12_r.gif" /></td>
</tr>
</table>
</body>
</html>