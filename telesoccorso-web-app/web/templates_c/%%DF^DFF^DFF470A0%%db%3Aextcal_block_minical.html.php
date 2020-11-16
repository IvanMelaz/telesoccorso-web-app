<?php /* Smarty version 2.6.5-dev, created on 2006-05-04 10:14:32
         compiled from db:extcal_block_minical.html */ ?>
<table class="outer" style="width:100%; text-align:center; vertical-align:middle;">
	<tr>
		<td colspan="7" style="font-weight:bold;"><?php echo $this->_tpl_vars['block']['month']['this']['name']; ?>
</td>
	</tr>
	<?php if ($this->_tpl_vars['block']['image']['displayImage']): ?>
	<tr>
		<td colspan="7"><img src="<?php echo $this->_tpl_vars['xoops_upload_url']; ?>
/<?php echo $this->_tpl_vars['block']['image']['image_name']; ?>
" alt="<?php echo $this->_tpl_vars['block']['image']['image_nicename']; ?>
" title="<?php echo $this->_tpl_vars['block']['image']['image_nicename']; ?>
" /></td>
	</tr>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['block']['displayLink']): ?>
	<tr>
		<td colspan="7"><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extcal/images/addevent.gif" alt="Add event" /> <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extcal/submit.php"><?php echo $this->_tpl_vars['block']['submitText']; ?>
</a></td>
	</tr>
	<?php endif; ?>
	<tr style="font-weight:bold;">
		<?php if (count($_from = (array)$this->_tpl_vars['block']['dayName'])):
    foreach ($_from as $this->_tpl_vars['day']):
?>
		<td><?php echo $this->_tpl_vars['day']; ?>
</td>
		<?php endforeach; unset($_from); endif; ?>
	</tr>
	<?php if (count($_from = (array)$this->_tpl_vars['block']['month']['info'])):
    foreach ($_from as $this->_tpl_vars['weeks']):
?>
	<tr>
		<?php if (count($_from = (array)$this->_tpl_vars['weeks'])):
    foreach ($_from as $this->_tpl_vars['day']):
?>
		<td<?php if ($this->_tpl_vars['day']['isSelected']): ?> style="border:1px solid #0099FF;"<?php endif; ?>><?php if (! $this->_tpl_vars['day']['isEmpty']):  if ($this->_tpl_vars['day']['isEvent']): ?><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extcal/day.php?year=<?php echo $this->_tpl_vars['block']['year']; ?>
&amp;month=<?php echo $this->_tpl_vars['block']['monthNumber']; ?>
&amp;day=<?php echo $this->_tpl_vars['day']['number']; ?>
" style="color:red;"><?php endif;  echo $this->_tpl_vars['day']['number'];  if ($this->_tpl_vars['day']['isEvent']): ?></a><?php endif;  else: ?>&nbsp;<?php endif; ?></td>
		<?php endforeach; unset($_from); endif; ?>
	</tr>
	<?php endforeach; unset($_from); endif; ?>
</table>