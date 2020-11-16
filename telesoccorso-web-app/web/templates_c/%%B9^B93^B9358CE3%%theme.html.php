<?php /* Smarty version 2.6.5-dev, created on 2006-05-06 10:31:26
         compiled from blue_lagoon/theme.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->_tpl_vars['xoops_langcode']; ?>
" lang="<?php echo $this->_tpl_vars['xoops_langcode']; ?>
">
<Script Language="JavaScript">
<!--
var spSTim11="　";
function time01() {
var dayTim,jiTim,funTim,byoTim,goze;
dayTim=new Date();
jiTim=dayTim.getHours();
funTim=dayTim.getMinutes();
byoTim=dayTim.getSeconds();
if (jiTim<12) goze="午前 ";
else {
goze="午後 ";
jiTim=jiTim-12;
}
document.time01.timeform.value=spSTim11+goze+jiTim+"時"+funTim+"分"+byoTim+"秒";
setTimeout("time01()",1000);
}
// End -->
</Script>
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
<meta name="generator" content="XOOPS" />
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
<table cellspacing="0" cellpadding="0" class="bg">
<tr><td>

<table cellspacing="0" cellpadding="0" class="bg1">
<tr><td class="header" width=170>
<img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/themes/<?php echo $this->_tpl_vars['xoops_theme']; ?>
/images/logo.gif" alt="logo" /></a>
</td>
<td class="header" align=center valign=middle><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/themes/<?php echo $this->_tpl_vars['xoops_theme']; ?>
/images/title.gif"></td>
<td class="header" width=170 align=right>
<FORM NAME="time01"><INPUT TYPE="text" size="20" NAME="timeform" style="border-style:solid;border-width:1px;border-color:#00509E;color:#00509E;background:transparent"></FORM>
<Script Language="JavaScript">
<!-- 
time01();
//-->
</Script>
</td>
</tr>

<tr><td colspan="3" class="topnav">

<!-- navibar set -->
<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/">ホーム</a>
&nbsp;&bull;&nbsp;
<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/news/">ニュース</a>
&nbsp;&bull;&nbsp;
<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/newbb/">フォーラム</a>
&nbsp;&bull;&nbsp;
<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/user.php">アカウント情報</a>
&nbsp;&bull;&nbsp;
<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/search.php">サイト内検索</a>
&nbsp;&bull;&nbsp;
<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/register.php">新規登録</a>

</td></tr></table>

</td></tr>

<tr><td>
<table cellspacing="2" cellpadding="2"><tr><td width=170>

<!-- Start left blocks loop -->

<?php if (count($_from = (array)$this->_tpl_vars['xoops_lblocks'])):
    foreach ($_from as $this->_tpl_vars['block']):
?>
<table class="outline"><tr><td>

<table cellspacing="0" cellpadding="2">
<tr><td class="blockTitle2">&nbsp;<?php echo $this->_tpl_vars['block']['title']; ?>
</td></tr>
<tr><td class="blockContent"><?php echo $this->_tpl_vars['block']['content']; ?>

</td></tr></table>

</td></tr></table>
<img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/themes/<?php echo $this->_tpl_vars['xoops_theme']; ?>
/images/page_flip_l.gif">
<?php endforeach; unset($_from); endif; ?>

<!-- End left blocks loop -->

</td>
<td style="padding: 0px 5px 0px;">

<!-- Display center blocks if any -->

<?php if ($this->_tpl_vars['xoops_showcblock'] == 1): ?>
<table cellspacing="0">
<tr><td width="100%" colspan="2">

<!-- Start center-center blocks loop -->

<?php if (count($_from = (array)$this->_tpl_vars['xoops_ccblocks'])):
    foreach ($_from as $this->_tpl_vars['block']):
?>
<table class="outline"><tr><td>
<table cellspacing="1" cellpadding="5">
<tr><td class="blockTitle">&nbsp;<?php echo $this->_tpl_vars['block']['title']; ?>
</td></tr>
<tr><td class="blockContent"><?php echo $this->_tpl_vars['block']['content']; ?>
</td></tr></table>
</td></tr></table><br />
<?php endforeach; unset($_from); endif; ?>

<!-- End center-center blocks loop -->

</td></tr>
<tr><td width="50%">

<!-- Start center-left blocks loop -->

<?php if (count($_from = (array)$this->_tpl_vars['xoops_clblocks'])):
    foreach ($_from as $this->_tpl_vars['block']):
?>
<table class="outline"><tr><td>
<table cellspacing="1" cellpadding="5">
<tr> <td class="blockTitle">&nbsp;<?php echo $this->_tpl_vars['block']['title']; ?>
</td></tr>
<tr><td class="blockContent"><?php echo $this->_tpl_vars['block']['content']; ?>
</td></tr></table>
</td></tr></table><br />
<?php endforeach; unset($_from); endif; ?>

<!-- End center-left blocks loop -->

</td><td width="50%">

<!-- Start center-right blocks loop -->

<?php if (count($_from = (array)$this->_tpl_vars['xoops_crblocks'])):
    foreach ($_from as $this->_tpl_vars['block']):
?>
<table class="outline"><tr><td>

<table cellspacing="1" cellpadding="5">
<tr> <td class="blockTitle">&nbsp;<?php echo $this->_tpl_vars['block']['title']; ?>
</td></tr>
<tr><td class="blockContent"><?php echo $this->_tpl_vars['block']['content']; ?>
</td></tr></table>
</td></tr></table><br />
<?php endforeach; unset($_from); endif; ?>

<!-- End center-right blocks loop -->

</td></tr></table>
<?php endif; ?>

<!-- End display center blocks -->

<div id="content"><?php echo $this->_tpl_vars['xoops_contents']; ?>
</div></td>
<?php if ($this->_tpl_vars['xoops_showrblock'] == 1): ?>
<td width=170 align=center>

<!-- Start right blocks loop -->

<?php if (count($_from = (array)$this->_tpl_vars['xoops_rblocks'])):
    foreach ($_from as $this->_tpl_vars['block']):
?>
<table class="outline"><tr><td>

<table cellspacing="0" cellpadding="2">
<tr><td class="blockTitle2">&nbsp;<?php echo $this->_tpl_vars['block']['title']; ?>
</td></tr>
<tr><td class="blockContent"><?php echo $this->_tpl_vars['block']['content']; ?>
</td></tr></table>

</td></tr></table>
<img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/themes/<?php echo $this->_tpl_vars['xoops_theme']; ?>
/images/page_flip_r.gif">
<?php endforeach; unset($_from); endif; ?>


<!-- End right blocks loop -->

<?php endif; ?></td></tr></table>
</td></tr>
</table>

<table border=0 cellpadding=0 cellspacing=0>
<tr><td height="30" valign="middle" align="center">
<div style="text-align: center; padding-top: 2px; font-size: 10px"><?php echo $this->_tpl_vars['xoops_footer']; ?>
</div>
<div><a href="http://www.forumimages.com/" target="_blank" title="FI Subsilver">FI Theme</a> :: XOOPS 2 Theme by <a href="http://i-you.org/" target="_blank">ImageSquare</a> :: Costomized by <a href="http://hello.oceannet.jp/" target="_blank">matchan</a></div><br />
</td></tr>
</table>

</body>
</html>