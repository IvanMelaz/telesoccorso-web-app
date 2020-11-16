<?php /* Smarty version 2.6.5-dev, created on 2006-05-04 07:02:49
         compiled from db:system_block_search.html */ ?>
<form style="margin-top: 0px;" action="<?php echo $this->_tpl_vars['xoops_url']; ?>
/search.php" method="get">
  <input type="text" name="query" size="14" /><input type="hidden" name="action" value="results" /><br /><input type="submit" value="<?php echo $this->_tpl_vars['block']['lang_search']; ?>
" />
</form>
<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/search.php"><?php echo $this->_tpl_vars['block']['lang_advsearch']; ?>
</a>