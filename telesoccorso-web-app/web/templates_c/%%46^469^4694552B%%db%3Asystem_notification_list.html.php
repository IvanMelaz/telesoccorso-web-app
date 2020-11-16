<?php /* Smarty version 2.6.5-dev, created on 2006-05-04 15:03:33
         compiled from db:system_notification_list.html */ ?>
<?php require_once(SMARTY_DIR . 'core' . DIRECTORY_SEPARATOR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'db:system_notification_list.html', 20, false),)), $this); ?>
<h4><?php echo $this->_tpl_vars['lang_activenotifications']; ?>
</h4>
<form name="notificationlist" action="notifications.php" method="post">
<table class="outer">
  <tr>
    <th><input name="allbox" id="allbox" onclick="xoopsCheckGroup('notificationlist', 'allbox', 'del_mod[]');" type="checkbox" value="<?php echo $this->_tpl_vars['lang_checkall']; ?>
" /></th>
    <th><?php echo $this->_tpl_vars['lang_event']; ?>
</th>
    <th><?php echo $this->_tpl_vars['lang_category']; ?>
</th>
    <th><?php echo $this->_tpl_vars['lang_itemid']; ?>
</th>
    <th><?php echo $this->_tpl_vars['lang_itemname']; ?>
</th>
  </tr>
  <?php if (count($_from = (array)$this->_tpl_vars['modules'])):
    foreach ($_from as $this->_tpl_vars['module']):
?>
  <tr>
    <td class="head"><input name="del_mod[<?php echo $this->_tpl_vars['module']['id']; ?>
]" id="del_mod[]" onclick="xoopsCheckGroup('notificationlist', 'del_mod[<?php echo $this->_tpl_vars['module']['id']; ?>
]', 'del_not[<?php echo $this->_tpl_vars['module']['id']; ?>
][]');" type="checkbox" value="<?php echo $this->_tpl_vars['module']['id']; ?>
" /></td>
    <td class="head" colspan="4"><?php echo $this->_tpl_vars['lang_module']; ?>
: <?php echo $this->_tpl_vars['module']['name']; ?>
</td>
  </tr>
  <?php if (count($_from = (array)$this->_tpl_vars['module']['categories'])):
    foreach ($_from as $this->_tpl_vars['category']):
?>
  <?php if (count($_from = (array)$this->_tpl_vars['category']['items'])):
    foreach ($_from as $this->_tpl_vars['item']):
?>
  <?php if (count($_from = (array)$this->_tpl_vars['item']['notifications'])):
    foreach ($_from as $this->_tpl_vars['notification']):
?>
  <tr>
    <?php echo smarty_function_cycle(array('values' => "odd,even",'assign' => 'class'), $this);?>

    <td class="<?php echo $this->_tpl_vars['class']; ?>
"><input type="checkbox" name="del_not[<?php echo $this->_tpl_vars['module']['id']; ?>
][]" id="del_not[<?php echo $this->_tpl_vars['module']['id']; ?>
][]" value="<?php echo $this->_tpl_vars['notification']['id']; ?>
" /></td>
    <td class="<?php echo $this->_tpl_vars['class']; ?>
"><?php echo $this->_tpl_vars['notification']['event_title']; ?>
</td>
    <td class="<?php echo $this->_tpl_vars['class']; ?>
"><?php echo $this->_tpl_vars['notification']['category_title']; ?>
</td>
    <td class="<?php echo $this->_tpl_vars['class']; ?>
"><?php if ($this->_tpl_vars['item']['id'] != 0):  echo $this->_tpl_vars['item']['id'];  endif; ?></td>
    <td class="<?php echo $this->_tpl_vars['class']; ?>
"><?php if ($this->_tpl_vars['item']['id'] != 0):  if ($this->_tpl_vars['item']['url'] != ''): ?><a href="<?php echo $this->_tpl_vars['item']['url']; ?>
"><?php endif;  echo $this->_tpl_vars['item']['name'];  if ($this->_tpl_vars['item']['url'] != ''): ?></a><?php endif;  endif; ?></td>
  </tr>
  <?php endforeach; unset($_from); endif; ?>
  <?php endforeach; unset($_from); endif; ?>
  <?php endforeach; unset($_from); endif; ?>
  <?php endforeach; unset($_from); endif; ?>
  <tr>
    <td class="foot" colspan="5">
      <input type="submit" name="delete_cancel" value="<?php echo $this->_tpl_vars['lang_cancel']; ?>
" />
      <input type="reset" name="delete_reset" value="<?php echo $this->_tpl_vars['lang_clear']; ?>
" />
      <input type="submit" name="delete" value="<?php echo $this->_tpl_vars['lang_delete']; ?>
" />
      <input type="hidden" name="XOOPS_TOKEN_REQUEST" value="<?php echo $this->_tpl_vars['notification_token']; ?>
" />
    </td>
  </tr>
</table>
</form>