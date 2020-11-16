<?php /* Smarty version 2.6.5-dev, created on 2006-05-04 08:07:19
         compiled from db:system_block_notification.html */ ?>
<?php require_once(SMARTY_DIR . 'core' . DIRECTORY_SEPARATOR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'counter', 'db:system_block_notification.html', 11, false),)), $this); ?>
<form action="<?php echo $this->_tpl_vars['block']['target_page']; ?>
" method="post">
<table class="outer">
  <?php if (count($_from = (array)$this->_tpl_vars['block']['categories'])):
    foreach ($_from as $this->_tpl_vars['category']):
?>
  <?php if (isset($this->_foreach['inner'])) unset($this->_foreach['inner']);
$this->_foreach['inner']['total'] = count($_from = (array)$this->_tpl_vars['category']['events']);
$this->_foreach['inner']['show'] = $this->_foreach['inner']['total'] > 0;
if ($this->_foreach['inner']['show']):
$this->_foreach['inner']['iteration'] = 0;
    foreach ($_from as $this->_tpl_vars['event']):
        $this->_foreach['inner']['iteration']++;
        $this->_foreach['inner']['first'] = ($this->_foreach['inner']['iteration'] == 1);
        $this->_foreach['inner']['last']  = ($this->_foreach['inner']['iteration'] == $this->_foreach['inner']['total']);
?>
  <?php if ($this->_foreach['inner']['first']): ?>
  <tr>
    <td class="head" colspan="2"><?php echo $this->_tpl_vars['category']['title']; ?>
</td>
  </tr>
  <?php endif; ?>
  <tr>
    <td class="odd"><?php echo smarty_function_counter(array('assign' => 'index'), $this);?>
<input type="hidden" name="not_list[<?php echo $this->_tpl_vars['index']; ?>
][params]" value="<?php echo $this->_tpl_vars['category']['name']; ?>
,<?php echo $this->_tpl_vars['category']['itemid']; ?>
,<?php echo $this->_tpl_vars['event']['name']; ?>
" /><input type="checkbox" name="not_list[<?php echo $this->_tpl_vars['index']; ?>
][status]" value="1" <?php if ($this->_tpl_vars['event']['subscribed']): ?>checked="checked"<?php endif; ?> /></td>
    <td class="odd"><?php echo $this->_tpl_vars['event']['caption']; ?>
</td>
  </tr>
  <?php endforeach; unset($_from); endif; ?>
  <?php endforeach; unset($_from); endif; ?>
  <tr>
    <td class="foot" colspan="2"><input type="hidden" name="not_redirect" value="<?php echo $this->_tpl_vars['block']['redirect_script']; ?>
"><input type="hidden" value="<?php echo $this->_tpl_vars['block']['notification_token']; ?>
" name="XOOPS_TOKEN_REQUEST" /><input type="submit" name="not_submit" value="<?php echo $this->_tpl_vars['block']['submit_button']; ?>
" /></td>
  </tr>
</table>
</form>