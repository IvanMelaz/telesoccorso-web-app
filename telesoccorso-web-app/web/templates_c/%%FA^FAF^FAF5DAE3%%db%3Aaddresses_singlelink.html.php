<?php /* Smarty version 2.6.5-dev, created on 2007-08-11 21:48:07
         compiled from db:addresses_singlelink.html */ ?>
<br /><br />

<p align='center'>
  <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/addresses/index.php"><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/addresses/images/logo.gif" alt="" /></a>
</p>

<div>
  <table width="100%" cellspacing="0" cellpadding="2" border="0" >
    <tr>
      <td class="newstitle"><?php echo $this->_tpl_vars['category_path']; ?>
</td>
    </tr>
  </table>
</div>

<br />

<table width="100%" cellspacing="0" border="0">
  <tr>
    <td align="center"><!-- include viewlink.html -->
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:addresses_viewlink.html", 'smarty_include_vars' => array('link' => $this->_tpl_vars['link'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	</td>
  </tr>
 </table>

<div style="text-align: center; padding: 3px; margin:3px;">
  <?php echo $this->_tpl_vars['commentsnav']; ?>

  <?php echo $this->_tpl_vars['lang_notice']; ?>

</div>

<div style="margin:3px; padding: 3px;">
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
<!-- <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'db:system_notification_select.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> -->