<?php /* Smarty version 2.6.5-dev, created on 2020-10-18 14:13:49
         compiled from db:system_block_login.html */ ?>
<form style="margin-top: 0px;" action="<?php echo $this->_tpl_vars['xoops_url']; ?>
/user.php" method="post">
    <?php echo $this->_tpl_vars['block']['lang_username']; ?>
<br />
    <input type="text" name="uname" size="12" value="<?php echo $this->_tpl_vars['block']['unamevalue']; ?>
" maxlength="25" /><br />
    <?php echo $this->_tpl_vars['block']['lang_password']; ?>
<br />
    <input type="password" name="pass" size="12" maxlength="32" /><br />
    <!-- <input type="checkbox" name="rememberme" value="On" class ="formButton" /><?php echo $this->_tpl_vars['block']['lang_rememberme']; ?>
<br /> //-->
    <input type="hidden" name="xoops_redirect" value="<?php echo $this->_tpl_vars['xoops_requesturi']; ?>
" />
    <input type="hidden" name="op" value="login" />
    <input type="submit" value="<?php echo $this->_tpl_vars['block']['lang_login']; ?>
" /><br />
    <?php echo $this->_tpl_vars['block']['sslloginlink']; ?>

</form>
<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/user.php#lost"><?php echo $this->_tpl_vars['block']['lang_lostpass']; ?>
</a>
<br /><br />
<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/register.php"><?php echo $this->_tpl_vars['block']['lang_registernow']; ?>
</a>