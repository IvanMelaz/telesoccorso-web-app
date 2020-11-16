<?php /* Smarty version 2.6.5-dev, created on 2007-08-11 21:39:03
         compiled from db:thisweek_block.html */ ?>
<?php if ($this->_tpl_vars['block']['contents']): ?>
    <?php if (count($_from = (array)$this->_tpl_vars['block']['contents'])):
    foreach ($_from as $this->_tpl_vars['event']):
?>
        <li><?php echo $this->_tpl_vars['event']; ?>
</li>
    <?php endforeach; unset($_from); endif; ?>
<?php endif; ?>