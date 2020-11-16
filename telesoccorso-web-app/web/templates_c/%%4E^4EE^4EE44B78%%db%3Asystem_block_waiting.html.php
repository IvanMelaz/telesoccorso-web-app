<?php /* Smarty version 2.6.5-dev, created on 2006-05-04 07:02:49
         compiled from db:system_block_waiting.html */ ?>
<ul>
  <?php if (count($_from = (array)$this->_tpl_vars['block']['modules'])):
    foreach ($_from as $this->_tpl_vars['module']):
?>
  <li><a href="<?php echo $this->_tpl_vars['module']['adminlink']; ?>
"><?php echo $this->_tpl_vars['module']['lang_linkname']; ?>
</a>: <?php echo $this->_tpl_vars['module']['pendingnum']; ?>
</li>
  <?php endforeach; unset($_from); endif; ?>
</ul>