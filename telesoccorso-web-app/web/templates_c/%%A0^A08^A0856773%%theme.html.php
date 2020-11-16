<?php /* Smarty version 2.6.5-dev, created on 2006-05-06 10:38:44
         compiled from montisarts_1/theme.html */ ?>
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

</head><body>
<?php echo $this->_tpl_vars['xoops_module_header']; ?>
 
<script type="text/javascript">
<!--
<?php echo $this->_tpl_vars['xoops_js']; ?>

//-->
</script>

<table width="100%" border="0" cellspacing="0" cellpadding="0" height="26">
  <tr>
    <td width="180" background="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
leftheadertop.gif" align="center"> 
      <script type="text/javascript" language="">

var monthNames = new Array( "January","February","March","April","May","June","July","August","September","October","November","December");
var now = new Date();
thisYear = now.getYear();
if(thisYear < 1900) {thisYear += 1900}; 
document.write(monthNames[now.getMonth()] + " " + now.getDate() + ", " + thisYear);

</script>
    </td>
    <td background="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
middleheadertop.gif" align="center"><?php echo $this->_tpl_vars['xoops_slogan']; ?>
</td>
    <td width="180" background="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
rightheadertop.gif">&nbsp;</td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" height="96" background="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
headermiddle.gif">
  <tr>
    <td width="300" align="left" valign="top"><img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
logo.gif" width="300" height="96"></td>
    <td>&nbsp;</td>
    <td width="300" align="right"> 
      <form style="margin-top: 0px;" action="<?php echo $this->_tpl_vars['xoops_url']; ?>
/search.php" method="post">
        <p>&nbsp;</p>
        <p> 
          <input type="text" name="query2" size="14" style="background-color: rgb(255,255,255); color: rgb(0,0,0); border: 1px solid rgb(0,0,0)" />
          <input type="hidden" name="action2" value="results" />
          <input type="submit" value="search" style="background-color: rgb(255,255,255); font-family: Tahoma, Verdana, sans-serif; font-size: 12px; border: 1px groove rgb(0,0,0)" name="submit2" />
        </p>
      </form>
    </td>
  </tr>
</table>

<div align="center"></div>
<table cellspacing="0">
    <tr>
      
    <td id="leftcolumn" height="143"> 
      
      <?php if (count($_from = (array)$this->_tpl_vars['xoops_lblocks'])):
    foreach ($_from as $this->_tpl_vars['block']):
?> <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "montisarts_1/theme_blockleft.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
      <?php endforeach; unset($_from); endif; ?> 
      
    </td>

      
    <td id="centercolumn" height="143"> 
     
      <br>
      <div align="center"><?php if ($this->_tpl_vars['xoops_showcblock'] == 1): ?> <?php echo $this->_tpl_vars['xoops_banner']; ?>
<br>
        <br>
      </div>
      <table cellspacing="0">
          <tr>
            
          <td id="centerCcolumn" colspan="2"> 
            
            <?php if (count($_from = (array)$this->_tpl_vars['xoops_ccblocks'])):
    foreach ($_from as $this->_tpl_vars['block']):
?> <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "montisarts_1/theme_blockcenter_c.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
            <?php endforeach; unset($_from); endif; ?> 
           
          </td>
          </tr>
          <tr>
            
          <td id="centerLcolumn"> 
            
            <?php if (count($_from = (array)$this->_tpl_vars['xoops_clblocks'])):
    foreach ($_from as $this->_tpl_vars['block']):
?> <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "montisarts_1/theme_blockcenter_l.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
            <?php endforeach; unset($_from); endif; ?> 
            
          </td>
          <td id="centerRcolumn"> 
            
            <?php if (count($_from = (array)$this->_tpl_vars['xoops_crblocks'])):
    foreach ($_from as $this->_tpl_vars['block']):
?> <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "montisarts_1/theme_blockcenter_r.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
            <?php endforeach; unset($_from); endif; ?> 
            
          </td>
          </tr>
        </table>

        <?php endif; ?>
        

        <div id="content">
          <?php echo $this->_tpl_vars['xoops_contents']; ?>

        </div>
      </td>

      <?php if ($this->_tpl_vars['xoops_showrblock'] == 1): ?>

      
    <td id="rightcolumn" height="143"> 
      
      <?php if (count($_from = (array)$this->_tpl_vars['xoops_rblocks'])):
    foreach ($_from as $this->_tpl_vars['block']):
?> <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "montisarts_1/theme_blockright.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
      <?php endforeach; unset($_from); endif; ?> 
      
    </td>

      <?php endif; ?>

    </tr>
  </table>
  
<table width="100%" border="0" cellspacing="0" cellpadding="1">
  <tr>
    <td bgcolor="#808B95"> 
      <table width="100%" border="0" cellspacing="0" cellpadding="0" bordercolor="#808B95">
        <tr> 
          <td> 
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr> 
                <td width="10%" align="center" bgcolor="#808B95"><font face="Tahoma" size="1">Powered 
                  by<br>
                  </font><a href="http://www.xoops.org" target="_blank"><img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
xpower.gif" width="88" height="31" alt="Xoops!" border="0"></a><br>
                  <font face="Tahoma" size="1">Xoops</font></td>
                <td width="1" bgcolor="#e1eaf3"><img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
spacer.gif" width="1" height="1" border="0"></td>
                <td width="6" height="1" bgcolor="#808B95"><img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
spacer.gif" width="6" height="1" border="0"></td>
                <td width="1" bgcolor="#808B95"><img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
spacer.gif" width="8" height="8" border="0"></td>
                <td align="center" width="100%" height="1" bgcolor="#808B95" valign="middle">&nbsp;</td>
                <td width="1" bgcolor="#e1eaf3"><img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
spacer.gif" width="1" height="1" border="0"></td>
                <td width="6" height="1" bgcolor="#808B95"><img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
spacer.gif" width="6" height="1" border="0"></td>
                <td width="1" bgcolor="#7f8ea5"><img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
spacer.gif" width="1" height="1" border="0"></td>
                <td width="10%" align="center" bgcolor="#808B95"><a href="http://www.montisarts.com" target="_blank"><img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
montisarts.gif" alt="montisarts.com" border="0"></a></td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>

  
<table border="0" width="100%" cellspacing="0" cellpadding="0"
style="border: 1px solid rgb(0,0,0)">
  <tr> 
    <td width="100%" bgcolor="#FEE9E4"></td>
    <td width="19" bgcolor="#FEE9E4"></td>
  </tr>
  <tr> 
    <td width="33%" bgcolor="#C0C0C0" height="1"></td>
    <td width="19" bgcolor="#C0C0C0" height="1"></td>
  </tr>
</table>
</body>
</html>