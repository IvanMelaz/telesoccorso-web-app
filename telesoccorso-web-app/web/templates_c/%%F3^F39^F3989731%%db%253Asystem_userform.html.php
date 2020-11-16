<?php /* Smarty version 2.6.5-dev, created on 2020-10-18 18:31:36
         compiled from db:system_userform.html */ ?>
<fieldset style="padding: 10px;">
  <legend style="font-weight: bold;"><?php echo $this->_tpl_vars['lang_login']; ?>
</legend>
  <form action="user.php" method="post">
    <?php echo $this->_tpl_vars['lang_username']; ?>
 <input type="text" name="uname" size="26" maxlength="25" value="<?php echo $this->_tpl_vars['usercookie']; ?>
" /><br />
    <?php echo $this->_tpl_vars['lang_password']; ?>
 <input type="password" name="pass" size="21" maxlength="32" /><br />
    <input type="hidden" name="op" value="login" />
    <input type="hidden" name="xoops_redirect" value="<?php echo $this->_tpl_vars['redirect_page']; ?>
" />
    <input type="submit" value="<?php echo $this->_tpl_vars['lang_login']; ?>
" />
  </form>
  <a name="lost"></a>
  <div><?php echo $this->_tpl_vars['lang_notregister']; ?>
<br /></div>
</fieldset>

<br />

<fieldset style="padding: 10px;">
  <legend style="font-weight: bold;"><?php echo $this->_tpl_vars['lang_lostpassword']; ?>
</legend>
  <div><br /><?php echo $this->_tpl_vars['lang_noproblem']; ?>
</div>
  <form action="lostpass.php" method="post">
    <?php echo $this->_tpl_vars['lang_youremail']; ?>
 <input type="text" name="email" size="26" maxlength="60" />&nbsp;&nbsp;<input type="hidden" name="op" value="mailpasswd" /><input type="hidden" name="t" value="<?php echo $this->_tpl_vars['mailpasswd_token']; ?>
" /><input type="submit" value="<?php echo $this->_tpl_vars['lang_sendpassword']; ?>
" />
  </form>
</fieldset>