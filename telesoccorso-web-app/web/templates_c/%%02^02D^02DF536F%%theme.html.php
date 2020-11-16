<?php /* Smarty version 2.6.5-dev, created on 2006-05-04 07:02:49
         compiled from phpkaox/theme.html */ ?>
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
<!-- RMV: added module header -->
<?php echo $this->_tpl_vars['xoops_module_header']; ?>

<script type="text/javascript">
<!--
<?php echo $this->_tpl_vars['xoops_js']; ?>

//-->
</script>
</head>
<body>
<table cellspacing="1" cellpadding="0" bgcolor="#666666">
  <tr>
    <td bgcolor="#DDE1DE">
      <table cellspacing="0" cellpadding="0">
        <tr>
          <td width="285"><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
"><img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
images/logo.gif" alt="logo" align="middle" /></a></td>
          <td width="100%" align="center"><div style="text-align: center; padding-top: 5px;"><?php echo $this->_tpl_vars['xoops_banner']; ?>
</div></td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">
      <table cellspacing="0" cellpadding="0">
        <tr>
          <td width="20%" bgcolor="#EFEFEF">
          <!-- Start left blocks loop -->
            <?php if (count($_from = (array)$this->_tpl_vars['xoops_lblocks'])):
    foreach ($_from as $this->_tpl_vars['block']):
?>
            <table cellspacing="0" cellpadding="2">
              <tr>
                <td class="blockTitle">&nbsp;<?php echo $this->_tpl_vars['block']['title']; ?>
</td>
              </tr>
              <tr>
                <td class="blockContent"><?php echo $this->_tpl_vars['block']['content']; ?>
</td>
              </tr>
            </table>
            <?php endforeach; unset($_from); endif; ?>
          <!-- End left blocks loop -->
          </td>
          <td style="padding: 0px 5px 0px;" align="center">
          <!-- Display center blocks if any -->
            <?php if ($this->_tpl_vars['xoops_showcblock'] == 1): ?>

            <table cellspacing="0">
              <tr>
                <td width="100%" colspan="2">

                <!-- Start center-center blocks loop -->
                  <?php if (count($_from = (array)$this->_tpl_vars['xoops_ccblocks'])):
    foreach ($_from as $this->_tpl_vars['block']):
?>
                  <table cellspacing="1" cellpadding="5">
                    <tr>
                      <td class="blockTitle">&nbsp;<?php echo $this->_tpl_vars['block']['title']; ?>
</td>
                    </tr>
                    <tr>
                      <td class="blockContent"><?php echo $this->_tpl_vars['block']['content']; ?>
</td>
                    </tr>
                  </table>
                  <?php endforeach; unset($_from); endif; ?>
                <!-- End center-center blocks loop -->

                </td>
              </tr>
              <tr>
                <td width="50%">

                <!-- Start center-left blocks loop -->
                  <?php if (count($_from = (array)$this->_tpl_vars['xoops_clblocks'])):
    foreach ($_from as $this->_tpl_vars['block']):
?>
                  <table cellspacing="1" cellpadding="5">
                    <tr>
                      <td class="blockTitle">&nbsp;<?php echo $this->_tpl_vars['block']['title']; ?>
</td>
                    </tr>
                    <tr>
                      <td class="blockContent"><?php echo $this->_tpl_vars['block']['content']; ?>
</td>
                    </tr>
                  </table>
                  <?php endforeach; unset($_from); endif; ?>
                <!-- End center-left blocks loop -->

                </td><td width="50%">

                <!-- Start center-right blocks loop -->
                  <?php if (count($_from = (array)$this->_tpl_vars['xoops_crblocks'])):
    foreach ($_from as $this->_tpl_vars['block']):
?>
                  <table cellspacing="1" cellpadding="5">
                    <tr>
                      <td class="blockTitle">&nbsp;<?php echo $this->_tpl_vars['block']['title']; ?>
</td>
                    </tr>
                    <tr>
                      <td class="blockContent"><?php echo $this->_tpl_vars['block']['content']; ?>
</td>
                    </tr>
                  </table>
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
	      <td width=20% bgcolor=#efefef align=center>
          <!-- Start right blocks loop -->
            <?php if (count($_from = (array)$this->_tpl_vars['xoops_rblocks'])):
    foreach ($_from as $this->_tpl_vars['block']):
?>
            <table cellspacing="0" cellpadding="2">
              <tr>
                <td class="blockTitle">&nbsp;<?php echo $this->_tpl_vars['block']['title']; ?>
</td>
              </tr>
              <tr>
                <td class="blockContent"><?php echo $this->_tpl_vars['block']['content']; ?>
</td>
              </tr>
            </table>
            <br />
            <?php endforeach; unset($_from); endif; ?>
          <!-- End right blocks loop -->
          <?php endif; ?>
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td height="30" valign="middle" bgcolor="#DDE1DE" align="center"><div style="text-align: center; padding-top: 2px; font-size: 10px"><?php echo $this->_tpl_vars['xoops_footer']; ?>
</div></td>
  </tr>
</table>
</body>
</html>