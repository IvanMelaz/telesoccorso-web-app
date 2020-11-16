<?php /* Smarty version 2.6.5-dev, created on 2006-05-06 10:26:12
         compiled from be_like/theme.html */ ?>
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


function be_like_maximam(){
	width = window.screen.availWidth;
	height =  window.screen.availHeight; 
	window.self.moveTo(0, 0);
	window.self.resizeTo(width, height);
	//alert('ow! ouch!')
}
//-->
</script>
</head>
<body background="#336699">
<table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tr cellspacing="0" cellpadding="0" height="18">
    <td valign="bottom" align="left" height="24" width="23"><img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
images/1bar-left.png" 
      width="23" height="24" border="0" onclick="window.close();" 
      onMousedown="this.src='<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
images/1bar-left-clicked.png'" 
      onMouseout="this.src='<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
images/1bar-left.png'"
      onmouseup="this.src='<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
images/1bar-left.png'"></td>
    <td class="tabTitle" valign="middle" align="left" height="24" background="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
images/1bar-bg.png" width="1%" Nowrap ><?php echo $this->_tpl_vars['xoops_sitename']; ?>
 - <?php echo $this->_tpl_vars['xoops_pagetitle']; ?>
<img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
images/1bar-left-clicked.png" width="1" height="1"><img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
images/1bar-right-clicked.png" width="1" height="1"></td>
    <td valign="bottom" align="left" height="24" width="27"><img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
images/1bar-right.png"  width="27" height="24" onclick="be_like_maximam()"
      onMousedown="this.src='<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
images/1bar-right-clicked.png'" 
      onMouseout="this.src='<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
images/1bar-right.png'"
      onmouseup="this.src='<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
images/1bar-right.png'"></td>
    <td valign="bottom" align="left" height="24" background="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
images/1top-bg.png"  background="#336699">&nbsp;</td>
    <td valign="bottom" align="left" height="24" width="7"><img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
images/1top-bg-right.png"  width="7" height="24"></td>
  </tr></table><table width="100%" cellspacing="0" cellpadding="0"><tr>
    <td width="5" background="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
images/1left.png"></td>
    <td><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "be_like/main.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
    <td width="5" background="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
images/1right.png" ></td>
  </tr>
</table><table width="100%" cellspacing="0" cellpadding="0">
  <tr height="19">
    <td width="99" height="19"><img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
images/1bottom-left.png" width="99" height="19" /></td>
    <td background="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
images/1bottom.png"><center>Powered by <a href="http://www.xoops.org/" target="_blank"><?php echo $this->_tpl_vars['xoops_version']; ?>
</a> ::
        be_like Designed by <a href="http://xoops-modules.sourceforge.jp/">xoops-modules</a> 
        <a href="http://sourceforge.jp/projects/xoops-modules/">project</a>  ::  License is GPL</center></td>
    <td width="107" height="19"><img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
images/1bottom-right.png" width="107" height="19" /></td>
  </tr>
</table>
</body>
</html>