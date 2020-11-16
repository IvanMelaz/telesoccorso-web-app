<?php /* Smarty version 2.6.5-dev, created on 2006-05-06 10:33:05
         compiled from coral_reef/theme.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->_tpl_vars['xoops_langcode']; ?>
" lang="<?php echo $this->_tpl_vars['xoops_langcode']; ?>
">
<Script Language="JavaScript">
<!--
var spSTim11="¡¡";
function time01() {
var dayTim,jiTim,funTim,byoTim,goze;
dayTim=new Date();
jiTim=dayTim.getHours();
funTim=dayTim.getMinutes();
byoTim=dayTim.getSeconds();
if (jiTim<12) goze="¸áÁ° ";
else {
goze="¸á¸å ";
jiTim=jiTim-12;
}
document.time01.timeform.value=spSTim11+goze+jiTim+"»þ"+funTim+"Ê¬"+byoTim+"ÉÃ";
setTimeout("time01()",1000);
}
// End -->
</Script>
<head>
<meta http-equiv="content-type" content="text/html; charset=<?php echo $this->_tpl_vars['xoops_charset']; ?>
" />
<meta http-equiv="content-language" content="<?php echo $this->_tpl_vars['xoops_langcode']; ?>
" />
<meta name="robots" content="<?php echo $this->_tpl_vars['meta_robots']; ?>
" />
<meta name="keywords" content="<?php echo $this->_tpl_vars['meta_keywords']; ?>
" />
<meta name="description" content="<?php echo $this->_tpl_vars['meta_description']; ?>
" />
<meta name="rating" content="<?php echo $this->_tpl_vars['meta_rating']; ?>
" />
<meta name="author" content="<?php echo $this->_tpl_vars['meta_author']; ?>
" />
<meta name="copyright" content="<?php echo $this->_tpl_vars['meta_copyright']; ?>
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

<table cellspacing="0" cellpadding="2" width="100%" border="0" color: #ffffff">
<tr>
<td height="22" width=50% valign="middle" id="headerbar">
<img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
dummy.gif" width=8 height=12><img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
square.gif" width=13 height=12><img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
dummy.gif" width=8 height=12><img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
square.gif" width=13 height=12><img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
dummy.gif" width=8 height=12><img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
square.gif" width=13 height=12>
</td>

<td height="22" width=50% id="headerbar" align="right">
<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/">&nbsp;HOME&nbsp;&nbsp;</a>
 <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/news/">&nbsp;NEWS&nbsp;&nbsp;</a>
 <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/newbb/">&nbsp;BBS&nbsp;&nbsp;</a>
 <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/mydownloads/">&nbsp;DOWNLOAD&nbsp;&nbsp;</a>
 <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/mylinks">&nbsp;LINK&nbsp;&nbsp;</a>
 <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/xoopsfaq">&nbsp;FAQ&nbsp;</a>
</td>
</tr>
</table>

<table cellspacing="0" cellpadding="0" width="100%" border="0" color: #ffffff">
<tr>
<td width=33% height="62" id="logobar"><img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
logo.gif" width=250 height=62></td>
<td width=34% height="62" id="logobar">¡¡</td>
<td width=33% height="62" id="logobar" valign="middle" align="right">
<FORM NAME="time01"><INPUT TYPE="text" size="25" NAME="timeform" style="border-style:solid;border-width:1px;border-color:#FFFFFF;color:#FFFFFF;background:#455ab8"></FORM>
<Script Language="JavaScript">
<!-- 
time01();
//-->
</Script>
</td></tr>
</table>

<table cellspacing="0">
    <tr>
      <td id="leftcolumn">

        <!-- Start left blocks loop -->
        <?php if (count($_from = (array)$this->_tpl_vars['xoops_lblocks'])):
    foreach ($_from as $this->_tpl_vars['block']):
?>
          <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "coral_reef/theme_blockleft.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php endforeach; unset($_from); endif; ?>
<!-- End left blocks loop -->
     </td>

    <td id="centercolumn">

<!-- Display center blocks if any -->
     <?php if ($this->_tpl_vars['xoops_showcblock'] == 1): ?>

<table cellspacing="0">
          <tr>

       <td id="centerLcolumn" valign=top>

            <!-- Start center-left blocks loop -->
              <?php if (count($_from = (array)$this->_tpl_vars['xoops_clblocks'])):
    foreach ($_from as $this->_tpl_vars['block']):
?>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "coral_reef/theme_blockcenter_l.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
              <?php endforeach; unset($_from); endif; ?>
            <!-- End center-left blocks loop -->

        </td>
        <td id="centerRcolumn" valign=top>

            <!-- Start center-right blocks loop -->
              <?php if (count($_from = (array)$this->_tpl_vars['xoops_crblocks'])):
    foreach ($_from as $this->_tpl_vars['block']):
?>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "coral_reef/theme_blockcenter_r.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
              <?php endforeach; unset($_from); endif; ?>
            <!-- End center-right blocks loop -->

            </td>
          </tr>

      <tr>
       <td id="centerCcolumn" colspan="2">

            <!-- Start center-center blocks loop -->
            <?php if (count($_from = (array)$this->_tpl_vars['xoops_ccblocks'])):
    foreach ($_from as $this->_tpl_vars['block']):
?>
              <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "coral_reef/theme_blockcenter_c.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <?php endforeach; unset($_from); endif; ?>
            <!-- End center-center blocks loop -->

            </td>
          </tr>
        </table>

        <?php endif; ?>
<!-- End display center blocks -->

        <div id="content"><?php echo $this->_tpl_vars['xoops_contents']; ?>
</div>
      </td>

      <?php if ($this->_tpl_vars['xoops_showrblock'] == 1): ?>

      <td id="rightcolumn">
        <!-- Start right blocks loop -->
        <?php if (count($_from = (array)$this->_tpl_vars['xoops_rblocks'])):
    foreach ($_from as $this->_tpl_vars['block']):
?>
          <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "coral_reef/theme_blockright.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php endforeach; unset($_from); endif; ?>
        <!-- End right blocks loop -->
      </td>

      <?php endif; ?>

    </tr>
  </table>

  <table cellspacing="0">
    <tr>
      <td style="text-align:center; background-color: #7486D7; color: #FFFFFF; border-top: 2px solid #96A4E3; font-size:8pt;">
Copyright (c) 2003 by OCEAN-NET All Right Reserved
	  </td>
    </tr>
  </table>
</body>
</html>