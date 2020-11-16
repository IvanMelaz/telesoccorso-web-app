<?php /* Smarty version 2.6.5-dev, created on 2006-05-04 07:00:25
         compiled from db:xoopsheadline_block_rss.html */ ?>
<?php if (count($_from = (array)$this->_tpl_vars['block']['feeds'])):
    foreach ($_from as $this->_tpl_vars['feed']):
?>
<p><?php echo $this->_tpl_vars['feed']; ?>
</p>
<?php endforeach; unset($_from); endif; ?>