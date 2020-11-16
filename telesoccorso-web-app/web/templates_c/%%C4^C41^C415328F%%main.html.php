<?php /* Smarty version 2.6.5-dev, created on 2006-05-06 10:26:12
         compiled from be_like/main.html */ ?>
<table width="100%" cellspacing="0" cellpadding="0">
<tr>
  <td bgcolor="#D8D8D8" height="26">
    <b>&nbsp;&nbsp;
    <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/">Home</a>&nbsp;&nbsp;
    <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/newbb/">Forum</a>&nbsp;&nbsp;
    <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/news/">News</a>&nbsp;&nbsp;
    <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/xoopspartners/">Partners</a>&nbsp;&nbsp;
    <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/contact/">Contact</a>&nbsp;&nbsp;
    <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/themes/be_like/about.php">About...</a>&nbsp;&nbsp;
    </b>
  </td>
<?php if (! ( $this->_tpl_vars['xoops_isuser'] == 1 )): ?><form style="margin-top: 0px;" action="<?php echo $this->_tpl_vars['xoops_url']; ?>
/user.php" method="post">
  <td bgcolor="#D8D8D8" align="right" height="26">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ID: <input type="text" name="uname" size="12" value="" />&nbsp;Password: <input type="password" name="pass" size="12" /><input type="hidden" name="xoops_redirect" value="/" /><input type="hidden" name="op" value="login" /><input type="submit" value="ログイン" />&nbsp;&nbsp;
  </td></form>
<?php else: ?>
  <td bgcolor="#D8D8D8" align="right" height="26" valign="middle">
  Hello <?php echo $this->_tpl_vars['xoops_uname']; ?>
!&nbsp;&nbsp; &gt;&gt; <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/user.php?op=logout">Logout</a>&nbsp;&nbsp;
  </td>
<?php endif; ?>
  <!-- td bgcolor="#D8D8D8" align="right" width="45">&nbsp;</td -->
</tr>
</table>
<table width="100%" cellspacing="0" cellpadding="0">
<tr>
  <td colspan="2" background="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
images/bar1.png" height="4"></td>
</tr>
<tr>
  <td id="leftcolumn" bgcolor="#D8D8D8">
    <!-- Start left blocks loop -->
    <?php if (count($_from = (array)$this->_tpl_vars['xoops_lblocks'])):
    foreach ($_from as $this->_tpl_vars['block']):
?>
    <fieldset>
    <legend class="blockTitle"><?php echo $this->_tpl_vars['block']['title']; ?>
</legend>
    <div class="blockContent"><?php echo $this->_tpl_vars['block']['content']; ?>
</div>
    </fieldset>
    <?php endforeach; unset($_from); endif; ?>
    <!-- End left blocks loop -->
  </td>
  <td id="centercolumn">
<?php if ($this->_tpl_vars['xoops_banner'] != "&nbsp;"): ?><center><?php echo $this->_tpl_vars['xoops_banner']; ?>
</center><br /><?php endif; ?>
    <!-- Display center blocks if any -->
<?php if ($this->_tpl_vars['xoops_showcblock'] == 1): ?>
    <table cellspacing="0">
      <tr><td id="centerCcolumn" colspan="2" bgcolor="#FFFFFF">
        <!-- Start center-center blocks loop -->
        <?php if (count($_from = (array)$this->_tpl_vars['xoops_ccblocks'])):
    foreach ($_from as $this->_tpl_vars['block']):
?>
        <div>
        <div class="blockTitle"><img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
images/Desktop.gif">&nbsp;<?php echo $this->_tpl_vars['block']['title']; ?>
</div>
        <div class="blockContent"><?php echo $this->_tpl_vars['block']['content']; ?>
</div>
        </div>
        <?php endforeach; unset($_from); endif; ?>
        <!-- End center-center blocks loop -->
      </td></tr>
      <tr><td id="centerLcolumn">
        <!-- Start center-left blocks loop -->
        <?php if (count($_from = (array)$this->_tpl_vars['xoops_clblocks'])):
    foreach ($_from as $this->_tpl_vars['block']):
?>
        <div style="padding: 0px 0px 0px 0px;">
        <div class="blockTitle"><img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
images/Desktop.gif">&nbsp;<?php echo $this->_tpl_vars['block']['title']; ?>
</div>
        <div class="blockContent">
<?php echo $this->_tpl_vars['block']['content']; ?>

        </div>
        </div>
        <?php endforeach; unset($_from); endif; ?>
        <!-- End center-left blocks loop -->
      </td><td id="centerRcolumn">
        <!-- Start center-right blocks loop -->
        <?php if (count($_from = (array)$this->_tpl_vars['xoops_crblocks'])):
    foreach ($_from as $this->_tpl_vars['block']):
?>
        <div style="padding: 0px 0px 0px 0px;">
        <div class="blockTitle"><img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
images/Desktop.gif">&nbsp;<?php echo $this->_tpl_vars['block']['title']; ?>
</div>
        <div class="blockContent">
<?php echo $this->_tpl_vars['block']['content']; ?>

        </div>
        </div>
        <?php endforeach; unset($_from); endif; ?>
        <!-- End center-right blocks loop -->
      </td></tr>
    </table>
<?php endif; ?>
<!-- End display center blocks -->

    <?php if ($this->_tpl_vars['xoops_contents']): ?><div id="content"><?php echo $this->_tpl_vars['xoops_contents']; ?>
</div><?php endif; ?>
  </td>
</tr></table>