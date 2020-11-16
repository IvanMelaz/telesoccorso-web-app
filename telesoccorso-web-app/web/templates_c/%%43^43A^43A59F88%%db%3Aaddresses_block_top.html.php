<?php /* Smarty version 2.6.5-dev, created on 2007-08-11 21:48:07
         compiled from db:addresses_block_top.html */ ?>
<?php if (count($_from = (array)$this->_tpl_vars['block']['links'])):
    foreach ($_from as $this->_tpl_vars['link']):
?>
    <li><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/addresses/visit.php?cid=<?php echo $this->_tpl_vars['link']['cid']; ?>
&amp;lid=<?php echo $this->_tpl_vars['link']['id']; ?>
"><?php echo $this->_tpl_vars['link']['title']; ?>
</a> (<?php echo $this->_tpl_vars['link']['hits']; ?>
)</li>
  <?php endforeach; unset($_from); endif; ?>