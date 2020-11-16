<?php /* Smarty version 2.6.5-dev, created on 2007-08-11 21:48:06
         compiled from db:addresses_brokenlink.html */ ?>
<br /><br />

<p align="center">
    <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/addresses/index.php"><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/addresses/images/logo.gif" border="0" alt="" /></a>
</p>

<div>
  <h4><?php echo $this->_tpl_vars['lang_reportbroken']; ?>
</h4>
  <form action="brokenlink.php" method="POST">
    <input type="hidden" name="lid" value="<?php echo $this->_tpl_vars['link_id']; ?>
" /><?php echo $this->_tpl_vars['lang_thanksforhelp']; ?>
<br /><?php echo $this->_tpl_vars['lang_forsecurity']; ?>
<br /><br /><input type="submit" name="submit" value="<?php echo $this->_tpl_vars['lang_reportbroken']; ?>
" />&nbsp;<input type=button value="<?php echo $this->_tpl_vars['lang_cancel']; ?>
" onclick="javascript:history.go(-1)" />
  </form>
</div>

<br />