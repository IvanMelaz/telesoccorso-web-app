<?php /* Smarty version 2.6.5-dev, created on 2006-05-04 10:14:32
         compiled from db:extcal_event.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:extcal_navbar.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table class="outer">
	<tr>
		<th colspan="3" style="font-size:1.2em;">
			<div style="float:left;">
				<?php echo $this->_tpl_vars['event']['event_title']; ?>

			</div>
			<div style="text-align:right;">
				<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extcal/print.php?event=<?php echo $this->_tpl_vars['event']['event_id']; ?>
"><img src="images/print.gif" /></a> <?php if ($this->_tpl_vars['isAdmin']): ?><a href="admin/event.php?op=modify&event_id=<?php echo $this->_tpl_vars['event']['event_id']; ?>
"><img src="images/edit.gif" /></a> <a href="admin/event.php?op=delete&event_id=<?php echo $this->_tpl_vars['event']['event_id']; ?>
"><img src="images/delete.gif" /></a><?php endif; ?>
			</div>
		</th>
	</tr>
	<tr class="head">
		<td style="background-color:#<?php echo $this->_tpl_vars['event']['cat']['cat_color']; ?>
; width:2px;"></td>
		<td style="width:50%;">
			<?php echo $this->_tpl_vars['event']['cat']['cat_name']; ?>
<br />
			<span style="font-weight:normal;"><?php echo $this->_tpl_vars['event']['cat']['cat_desc']; ?>
</span>
		</td>
		<td>
			<?php echo $this->_tpl_vars['lang']['start']; ?>
 : <span style="font-weight:normal;"><?php echo $this->_tpl_vars['event']['start']; ?>
</span><br />
			<?php echo $this->_tpl_vars['lang']['end']; ?>
 : <span style="font-weight:normal;"><?php echo $this->_tpl_vars['event']['end']; ?>
</span>
		</td>
	</tr>
	<?php if ($this->_tpl_vars['event']['isExtraInfo']): ?>
	<tr>
		<td colspan="2" class="even">
			<b><?php echo $this->_tpl_vars['lang']['contact_info']; ?>
 :</b><br />
			<span style="font-weight:normal;"><?php echo $this->_tpl_vars['event']['event_contact']; ?>
<br />
			<?php echo $this->_tpl_vars['event']['event_address']; ?>
</span>
		</td>
		<td class="even">
			<b><?php echo $this->_tpl_vars['lang']['email']; ?>
 :</b> <a href="mailto:<?php echo $this->_tpl_vars['event']['event_email']; ?>
"><?php echo $this->_tpl_vars['event']['event_email']; ?>
</a><br />
			<b><?php echo $this->_tpl_vars['lang']['url']; ?>
 :</b> <a href="<?php echo $this->_tpl_vars['event']['event_url']; ?>
"><?php echo $this->_tpl_vars['event']['event_url']; ?>
</a>
		</td>
	</tr>
	<?php endif; ?>
	<tr>
		<td colspan="3" class="odd">
			<?php echo $this->_tpl_vars['event']['event_desc']; ?>

		</td>
	</tr>
	<?php if ($this->_tpl_vars['whosGoing']): ?>
	<tr>
		<td colspan="3" class="even">
			<b><?php echo $this->_tpl_vars['lang']['whos_going']; ?>
 (<?php echo $this->_tpl_vars['eventmember']['memberNb']; ?>
) :</b> <?php if (isset($this->_foreach['eventMemberList'])) unset($this->_foreach['eventMemberList']);
$this->_foreach['eventMemberList']['total'] = count($_from = (array)$this->_tpl_vars['eventmember']['member']);
$this->_foreach['eventMemberList']['show'] = $this->_foreach['eventMemberList']['total'] > 0;
if ($this->_foreach['eventMemberList']['show']):
$this->_foreach['eventMemberList']['iteration'] = 0;
    foreach ($_from as $this->_tpl_vars['uid'] => $this->_tpl_vars['member']):
        $this->_foreach['eventMemberList']['iteration']++;
        $this->_foreach['eventMemberList']['first'] = ($this->_foreach['eventMemberList']['iteration'] == 1);
        $this->_foreach['eventMemberList']['last']  = ($this->_foreach['eventMemberList']['iteration'] == $this->_foreach['eventMemberList']['total']);
 if ($this->_foreach['eventMemberList']['first'] != 1): ?>, <?php endif; ?><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/profile/userinfo.php?uid=<?php echo $this->_tpl_vars['uid']; ?>
"><?php echo $this->_tpl_vars['member']; ?>
</a><?php endforeach; unset($_from); endif; ?>
			<?php if ($this->_tpl_vars['eventmember']['show_joinevent_button']): ?>
			<form style="display:inline;" method="get" action="eventmember.php">
				<input type="hidden" name="mode" value="<?php echo $this->_tpl_vars['eventmember']['joinevent_mode']; ?>
" />
				<input type="hidden" name="event" value="<?php echo $this->_tpl_vars['event']['event_id']; ?>
" />
				<input type="submit" value="<?php echo $this->_tpl_vars['lang']['joinevent_button']; ?>
" />
				<?php echo $this->_tpl_vars['token']; ?>

			</form>
			<?php endif; ?>
		</td>
	</tr>
	<?php endif; ?>
</table>
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