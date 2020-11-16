<?php /* Smarty version 2.6.5-dev, created on 2006-05-06 10:00:27
         compiled from ND_BlueVibe/theme.html */ ?>
<?php require_once(SMARTY_DIR . 'core' . DIRECTORY_SEPARATOR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'ND_BlueVibe/theme.html', 74, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->_tpl_vars['xoops_langcode']; ?>
" lang="<?php echo $this->_tpl_vars['xoops_langcode']; ?>
">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<meta http-equiv="Content-Language" content="<?php echo $this->_tpl_vars['xoops_langcode']; ?>
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
<!-- RMV: added module header -->
<?php echo $this->_tpl_vars['xoops_module_header']; ?>

<script type="text/javascript">
<!--
<?php echo $this->_tpl_vars['xoops_js']; ?>

//-->
</script>
</head>
<body bgcolor="#F2F4F7">
</body>
<div align="center">
	<object classid="clsid:D27CDB6E-AE6D-11CF-96B8-444553540000" id="obj1" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0" border="0" width="900" height="99">
		<param name="movie" value="<?php echo $this->_tpl_vars['xoops_url']; ?>
/themes/ND_BlueVibe/images/arkeo.swf">
		<param name="quality" value="High">
		<embed src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/themes/ND_BlueVibe/images/arkeo.swf" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" name="obj1" width="900" height="99" quality="High"></object>
</div>
<body bgcolor="#F2F4F7">
<div align="center">
<table border="0" cellpadding="0" cellspacing="0" id="okvir" width="894">
  <tr>
    <td>
		<table  width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr> 
          <td id="headerlogo">
		  <table  class="head_main" width="100%" border="0" cellpadding="0" cellspacing="0">
		   <tr> 
          <td >&nbsp;</td>
<td class="bok"> &nbsp;&nbsp;<?php if ($this->_tpl_vars['xoops_isuser']): ?> Bonjour <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/user.php"><?php echo $this->_tpl_vars['xoops_uname']; ?>
</a>&nbsp;&nbsp;&nbsp;<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/user.php"><span lang="fr">Votre 
Compte</span> </a>&nbsp; <?php else: ?> <a href="<
{$xoops_url}%3E/register.php">
<span lang="fr">S'enregistrer</span> </a>- <?php endif; ?> <span class="right"> <?php if ($this->_tpl_vars['xoops_isuser']): ?> 
                  <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/user.php?op=logout"></a> <?php else: ?><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/user.php">Login</a> &nbsp;
                  <?php endif; ?> </span></td>
        </tr></table>
		<table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td class="menu_top">
		<!-- Start Custom Top Navigation -->
		<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/index.php"><span lang="fr">Accueil</span></a> | 
		<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/ipboard/"><span lang="fr">Forum</span></a> | 
		<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/mydownloads/"><span lang="fr">
		Téléchargement</span></a> | 
		<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/wfsnippets/"><span lang="fr">Guides</span></a>  | 
		<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/contact/"><span lang="fr">C</span>ontact</a> 
		<!-- End Custom Top Navigation -->
		</td>
        <td class="menu_top_ura"><span id="clock"></span> <script language="JavaScript" type="text/javascript" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/themes/ND_BlueVibe
/images/clock.js">
      </script> &nbsp;</td>
      </tr>
    </table>
		</td>
        </tr>
      </table>
    <table border="0" cellpadding="0" cellspacing="0" >
<td width="171" id="leftcolumn"> 
          <!-- Start left blocks loop -->
          <?php if (count($_from = (array)$this->_tpl_vars['xoops_lblocks'])):
    foreach ($_from as $this->_tpl_vars['block']):
?> <div class="<?php echo smarty_function_cycle(array('values' => 'blockTitle'), $this);?>
"><?php echo $this->_tpl_vars['block']['title']; ?>
</div>
          <div class="blockContent"><?php echo $this->_tpl_vars['block']['content']; ?>
</div>
		  <img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
images/160.gif" width="160" height="1" alt="" />
          <?php endforeach; unset($_from); endif; ?> 
          <!-- End left blocks loop -->
          <br /> <br />
          </td>
        <td width="369" id="centercolumn"> 
          <p align="left"> 
          <!-- Display center blocks if any -->
          <?php if ($this->_tpl_vars['xoops_showcblock'] == 1): ?> </p>
			<table class="sadrzaj" cellspacing="0">
            <tr> 
              <td id="centerCcolumn" colspan="2"> 
                <!-- Start center-center blocks loop -->
                <?php if (count($_from = (array)$this->_tpl_vars['xoops_ccblocks'])):
    foreach ($_from as $this->_tpl_vars['block']):
?> <table align="center" cellpadding="0" cellspacing="2">
                  <tr> 
                    <td> <div class="blockTitle"><?php echo $this->_tpl_vars['block']['title']; ?>
</div>
                      <div class="blockContent"><?php echo $this->_tpl_vars['block']['content']; ?>
</div></td>
                  </tr>
                </table>
                <?php endforeach; unset($_from); endif; ?> 
                <!-- End center-center blocks loop -->
              </td>
            </tr>
            <tr> 
              <td id="centerLcolumn"> 
                <!-- Start center-left blocks loop -->
                <?php if (count($_from = (array)$this->_tpl_vars['xoops_clblocks'])):
    foreach ($_from as $this->_tpl_vars['block']):
?> <table class="blok" align="center" cellpadding="3" cellspacing="2">
                  <tr> 
                    <td> <div class="blockTitle"><?php echo $this->_tpl_vars['block']['title']; ?>
</div>
                      <div class="blockContent"><?php echo $this->_tpl_vars['block']['content']; ?>
</div></td>
                  </tr>
                </table>
                <?php endforeach; unset($_from); endif; ?> 
                <!-- End center-left blocks loop -->
              </td>
              <td id="centerRcolumn"> 
                <!-- Start center-right blocks loop -->
                <?php if (count($_from = (array)$this->_tpl_vars['xoops_crblocks'])):
    foreach ($_from as $this->_tpl_vars['block']):
?> <table class="blok" align="center" cellpadding="3" cellspacing="2">
                  <tr> 
                    <td> <div class="blockTitle"><?php echo $this->_tpl_vars['block']['title']; ?>
</div>
                      <div class="blockContent"><?php echo $this->_tpl_vars['block']['content']; ?>
</div></td>
                  </tr>
                </table>
                <?php endforeach; unset($_from); endif; ?> 
                <!-- End center-right blocks loop -->
              </td>
            </tr>
          </table>
          <?php endif; ?> 
          <!-- End display center blocks -->
          <div id="content"> <?php echo $this->_tpl_vars['xoops_contents']; ?>
 </div>
          <br /> <br /> <br /> </td>
        <?php if ($this->_tpl_vars['xoops_showrblock'] == 1): ?> 
        <td width="170" id="rightcolumn"> 
          <!-- Start right blocks loop -->
          <?php if (count($_from = (array)$this->_tpl_vars['xoops_rblocks'])):
    foreach ($_from as $this->_tpl_vars['block']):
?> <div class="blockTitle"><?php echo $this->_tpl_vars['block']['title']; ?>
</div>
          <div class="blockContent"><?php echo $this->_tpl_vars['block']['content']; ?>
</div>
		  <img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
images/160.gif" width="160" height="1" alt="" />
          <?php endforeach; unset($_from); endif; ?> 
          <!-- End right blocks loop -->
          <br /> <br /> </td>
        <?php endif; ?> </tr>
        <tr> 
          <td colspan="3"></td>
        </tr>
      </table>
	  <div align="center">
	  <TABLE width="100%" 
            border=0 cellPadding=0 cellSpacing=0 bgcolor="#F2F4F7">
              <TBODY>
              <TR>
                <TD width=21><IMG 
                  src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/themes/ND_BlueVibe
/images/bot_cat_left.gif" 
                  border=0></TD>
                <TD align=middle width="100%" 
                background="<?php echo $this->_tpl_vars['xoops_url']; ?>
/themes/ND_BlueVibe
/images/bot_cat_bg.gif"></TD>
      <TD width=21><IMG 
                  src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/themes/ND_BlueVibe
/images/bot_cat_right.gif" 
                  border=0></TD></TR></TBODY></TABLE></div>
	</td>
  </tr>

</table>
</div>
<div class="privatnost">

  <br />
<?php echo $this->_tpl_vars['xoops_footer']; ?>
 &nbsp;|&nbsp; <span lang="fr">Thème ND_BlueVibe par
<a target="_blank" href="http://www.nykodesign.com">Nyko</a></span><a href="http://www.xoops-hacks.com/modules/ipboard/index.php?s=&showuser=2">
</a>
<br />
</div>
</body>
</html>