<?php /* Smarty version 2.6.5-dev, created on 2007-08-11 20:43:00
         compiled from db:pical_event_detail.html */ ?>
<?php echo $this->_tpl_vars['detail_body']; ?>


<div style="text-align: right; padding: 0px; margin: 0px;">
  <a href="<?php echo $this->_tpl_vars['print_link']; ?>
" target="_blank"><img src="<?php echo $this->_tpl_vars['skinpath']; ?>
/print.gif" alt="<?php echo $this->_tpl_vars['lang_print']; ?>
" title="<?php echo $this->_tpl_vars['lang_print']; ?>
" border="0" /></a>
</div>

<div style="text-align: center; padding: 3px; margin: 3px;">
  <?php echo $this->_tpl_vars['commentsnav']; ?>

  <?php echo $this->_tpl_vars['lang_notice']; ?>

</div>

<div style="margin: 3px; padding: 3px;">
<!-- start comments loop -->
<?php if ($this->_tpl_vars['comment_mode'] == 'flat'): ?>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:system_comments_flat.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php elseif ($this->_tpl_vars['comment_mode'] == 'thread'): ?>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:system_comments_thread.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php elseif ($this->_tpl_vars['comment_mode'] == 'nest'): ?>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:system_comments_nest.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>
<!-- end comments loop -->
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'db:system_notification_select.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>