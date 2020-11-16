<?php /* Smarty version 2.6.5-dev, created on 2007-01-19 14:43:23
         compiled from db:mydownloads_block_top.html */ ?>
<ul>
  <?php if (count($_from = (array)$this->_tpl_vars['block']['downloads'])):
    foreach ($_from as $this->_tpl_vars['download']):
?>
    <li><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/mydownloads/singlefile.php?cid=<?php echo $this->_tpl_vars['download']['cid']; ?>
&amp;lid=<?php echo $this->_tpl_vars['download']['id']; ?>
"><?php echo $this->_tpl_vars['download']['title']; ?>
</a> (<?php echo $this->_tpl_vars['download']['hits']; ?>
)</li>
  <?php endforeach; unset($_from); endif; ?>
</ul>