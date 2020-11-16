<?php /* Smarty version 2.6.5-dev, created on 2006-05-04 07:02:49
         compiled from db:system_block_newusers.html */ ?>
<?php require_once(SMARTY_DIR . 'core' . DIRECTORY_SEPARATOR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'db:system_block_newusers.html', 3, false),)), $this); ?>
<table cellspacing="1" class="outer">
  <?php if (count($_from = (array)$this->_tpl_vars['block']['users'])):
    foreach ($_from as $this->_tpl_vars['user']):
?>
    <tr class="<?php echo smarty_function_cycle(array('values' => "even,odd"), $this);?>
" valign="middle">
      <td align="center">
      <?php if ($this->_tpl_vars['user']['avatar'] != ""): ?>
      <img src="<?php echo $this->_tpl_vars['user']['avatar']; ?>
" alt="" width="32" /><br />
      <?php endif; ?>
      <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/userinfo.php?uid=<?php echo $this->_tpl_vars['user']['id']; ?>
"><?php echo $this->_tpl_vars['user']['name']; ?>
</a>
      </td>
      <td align="center"><?php echo $this->_tpl_vars['user']['joindate']; ?>
</td>
    </tr>
  <?php endforeach; unset($_from); endif; ?>
</table>