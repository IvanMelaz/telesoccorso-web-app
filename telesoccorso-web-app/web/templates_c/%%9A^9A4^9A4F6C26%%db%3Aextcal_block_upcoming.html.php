<?php /* Smarty version 2.6.5-dev, created on 2006-05-04 10:14:32
         compiled from db:extcal_block_upcoming.html */ ?>
<?php require_once(SMARTY_DIR . 'core' . DIRECTORY_SEPARATOR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'db:extcal_block_upcoming.html', 3, false),)), $this); ?>
<table class="outer">
	<?php if (count($_from = (array)$this->_tpl_vars['block'])):
    foreach ($_from as $this->_tpl_vars['event']):
?>
	<tr class="<?php echo smarty_function_cycle(array('values' => "even,odd"), $this);?>
">
		<td><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extcal/event.php?event=<?php echo $this->_tpl_vars['event']['event_id']; ?>
"><?php echo $this->_tpl_vars['event']['event_title']; ?>
</a></td>
		<td><?php echo $this->_tpl_vars['event']['start']; ?>
</td>
	</tr>
	<?php endforeach; unset($_from); endif; ?>
</table>