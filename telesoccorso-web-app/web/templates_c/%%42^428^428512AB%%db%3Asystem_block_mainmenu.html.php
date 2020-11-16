<?php /* Smarty version 2.6.5-dev, created on 2006-05-04 06:18:45
         compiled from db:system_block_mainmenu.html */ ?>
<table cellspacing="0">
  <tr>
    <td id="mainmenu">
      <a class="menuTop" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/"><?php echo $this->_tpl_vars['block']['lang_home']; ?>
</a>
      <!-- start module menu loop -->
      <?php if (count($_from = (array)$this->_tpl_vars['block']['modules'])):
    foreach ($_from as $this->_tpl_vars['module']):
?>
      <a class="menuMain" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['module']['directory']; ?>
/"><?php echo $this->_tpl_vars['module']['name']; ?>
</a>
        <?php if (count($_from = (array)$this->_tpl_vars['module']['sublinks'])):
    foreach ($_from as $this->_tpl_vars['sublink']):
?>
          <a class="menuSub" href="<?php echo $this->_tpl_vars['sublink']['url']; ?>
"><?php echo $this->_tpl_vars['sublink']['name']; ?>
</a>
        <?php endforeach; unset($_from); endif; ?>
      <?php endforeach; unset($_from); endif; ?>
      <!-- end module menu loop -->
    </td>
  </tr>
</table>