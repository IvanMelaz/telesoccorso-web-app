<?php /* Smarty version 2.6.5-dev, created on 2007-01-19 14:43:23
         compiled from db:mydownloads_brokenfile.html */ ?>
<br /><br />

<p align="center">
    <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/mydownloads/index.php"><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/mydownloads/images/logo-en.gif" alt="" /></a>
</p>
<br /><br /><br />

<div align='center'>
  <h4><?php echo $this->_tpl_vars['lang_reportbroken']; ?>
</h4>
  <form action="brokenfile.php" method="POST">
    <input type="hidden" name="lid" value="<?php echo $this->_tpl_vars['file_id']; ?>
" /><?php echo $this->_tpl_vars['lang_thanksforhelp']; ?>
<br /><?php echo $this->_tpl_vars['lang_forsecurity']; ?>
<br /><br /><input type="submit" name="submit" value="<?php echo $this->_tpl_vars['lang_reportbroken']; ?>
" />&nbsp;<input type=button value="<?php echo $this->_tpl_vars['lang_cancel']; ?>
" onclick="javascript:history.go(-1)" />
  </form>
</div>

<br />