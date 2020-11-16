<?php /* Smarty version 2.6.5-dev, created on 2006-05-04 10:14:32
         compiled from db:extcal_block_spotlight.html */ ?>
<table class="outer">
	<tr>
		<th colspan="3" style="font-size:1.2em;"><?php echo $this->_tpl_vars['block']['event']['event_title']; ?>
</th>
	</tr>
	<tr class="head">
		<td style="background-color:#<?php echo $this->_tpl_vars['block']['event']['cat']['cat_color']; ?>
; width:2px;"></td>
		<td style="width:50%;">
			<?php echo $this->_tpl_vars['block']['event']['cat']['cat_name']; ?>
<br />
			<span style="font-weight:normal;"><?php echo $this->_tpl_vars['block']['event']['cat']['cat_desc']; ?>
</span>
		</td>
		<td>
			<?php echo $this->_tpl_vars['block']['lang']['start']; ?>
 : <span style="font-weight:normal;"><?php echo $this->_tpl_vars['block']['event']['start']; ?>
</span><br />
			<?php echo $this->_tpl_vars['block']['lang']['end']; ?>
 : <span style="font-weight:normal;"><?php echo $this->_tpl_vars['block']['event']['end']; ?>
</span>
		</td>
	</tr>
	<?php if ($this->_tpl_vars['block']['event']['isExtraInfo']): ?>
	<tr>
		<td colspan="2" class="even">
			<b><?php echo $this->_tpl_vars['block']['lang']['contact_info']; ?>
 :</b><br />
			<span style="font-weight:normal;"><?php echo $this->_tpl_vars['block']['event']['event_contact']; ?>
<br />
			<?php echo $this->_tpl_vars['block']['event']['event_address']; ?>
</span>
		</td>
		<td class="even">
			<b><?php echo $this->_tpl_vars['block']['lang']['email']; ?>
 :</b> <a href="mailto:<?php echo $this->_tpl_vars['block']['event']['event_email']; ?>
"><?php echo $this->_tpl_vars['block']['event']['event_email']; ?>
</a><br />
			<b><?php echo $this->_tpl_vars['block']['lang']['url']; ?>
 :</b> <a href="<?php echo $this->_tpl_vars['block']['event']['event_url']; ?>
"><?php echo $this->_tpl_vars['block']['event']['event_url']; ?>
</a>
		</td>
	</tr>
	<?php endif; ?>
	<tr>
		<td colspan="3" class="odd"><?php echo $this->_tpl_vars['block']['event']['event_desc']; ?>
</td>
	</tr>
</table>