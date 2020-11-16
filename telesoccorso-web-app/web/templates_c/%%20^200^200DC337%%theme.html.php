<?php /* Smarty version 2.6.5-dev, created on 2006-05-04 06:18:45
         compiled from default/theme.html */ ?>
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
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/xoops.css" />
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $this->_tpl_vars['xoops_themecss']; ?>
" />
<!-- RMV: added module header -->
<?php echo $this->_tpl_vars['xoops_module_header']; ?>

<script type="text/javascript">
<!--
<?php echo $this->_tpl_vars['xoops_js']; ?>

//-->
</script>
</head>
<body>
  <table cellspacing="0">
    <tr id="header">
      <td id="headerlogo"><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/"><img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
logo.gif" width="150" height="80" alt="" /></a></td>
      <td id="headerbanner"><?php echo $this->_tpl_vars['xoops_banner']; ?>
</td>
    </tr>
    <tr>
      <td id="headerbar" colspan="2">&nbsp;</td>
    </tr>
  </table>

  <table cellspacing="0">
    <tr>
      <td id="leftcolumn">
        <!-- Start left blocks loop -->
        <?php if (count($_from = (array)$this->_tpl_vars['xoops_lblocks'])):
    foreach ($_from as $this->_tpl_vars['block']):
?>
          <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "default/theme_blockleft.html", 'smarty_include_vars' => array()));
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
            <td id="centerCcolumn" colspan="2">

            <!-- Start center-center blocks loop -->
            <?php if (count($_from = (array)$this->_tpl_vars['xoops_ccblocks'])):
    foreach ($_from as $this->_tpl_vars['block']):
?>
              <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "default/theme_blockcenter_c.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <?php endforeach; unset($_from); endif; ?>
            <!-- End center-center blocks loop -->

            </td>
          </tr>
          <tr>
            <td id="centerLcolumn">

            <!-- Start center-left blocks loop -->
              <?php if (count($_from = (array)$this->_tpl_vars['xoops_clblocks'])):
    foreach ($_from as $this->_tpl_vars['block']):
?>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "default/theme_blockcenter_l.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
              <?php endforeach; unset($_from); endif; ?>
            <!-- End center-left blocks loop -->

            </td><td id="centerRcolumn">

            <!-- Start center-right blocks loop -->
              <?php if (count($_from = (array)$this->_tpl_vars['xoops_crblocks'])):
    foreach ($_from as $this->_tpl_vars['block']):
?>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "default/theme_blockcenter_r.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
              <?php endforeach; unset($_from); endif; ?>
            <!-- End center-right blocks loop -->

            </td>
          </tr>
        </table>

        <?php endif; ?>
        <!-- End display center blocks -->

        <div id="content">
          <?php echo $this->_tpl_vars['xoops_contents']; ?>

        </div>
      </td>

      <?php if ($this->_tpl_vars['xoops_showrblock'] == 1): ?>

      <td id="rightcolumn">
        <!-- Start right blocks loop -->
        <?php if (count($_from = (array)$this->_tpl_vars['xoops_rblocks'])):
    foreach ($_from as $this->_tpl_vars['block']):
?>
          <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "default/theme_blockright.html", 'smarty_include_vars' => array()));
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
    <tr id="footerbar">
      <td><a href="http://www.xoops.org/" target="_blank"><img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
poweredby.gif" alt="" /></a></td>
    </tr>
  </table>
</body>
</html>