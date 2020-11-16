<?php /* Smarty version 2.6.5-dev, created on 2006-05-04 10:14:32
         compiled from db:extcal_calendar.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:extcal_navbar.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</form>
<form action="calendar.php" method="get">
	<select name="year">
		<?php if (count($_from = (array)$this->_tpl_vars['nav']['year'])):
    foreach ($_from as $this->_tpl_vars['yearNav']):
?>
		<option value="<?php echo $this->_tpl_vars['yearNav']['yearNumber']; ?>
"<?php if ($this->_tpl_vars['yearNav']['isSelected']): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['yearNav']['yearNumber']; ?>
</option>
		<?php endforeach; unset($_from); endif; ?>
	</select>
	<select name="month">
		<?php if (count($_from = (array)$this->_tpl_vars['nav']['month'])):
    foreach ($_from as $this->_tpl_vars['monthNav']):
?>
		<option value="<?php echo $this->_tpl_vars['monthNav']['monthNumber']; ?>
"<?php if ($this->_tpl_vars['monthNav']['isSelected']): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['monthNav']['monthName']; ?>
</option>
		<?php endforeach; unset($_from); endif; ?>
	</select>
	<select name="cat">
		<?php if (count($_from = (array)$this->_tpl_vars['catSelect'])):
    foreach ($_from as $this->_tpl_vars['cat']):
?>
		<option value="<?php echo $this->_tpl_vars['cat']['cat_id']; ?>
"<?php if ($this->_tpl_vars['cat']['selected']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['cat']['cat_name']; ?>
</option>
		<?php endforeach; unset($_from); endif; ?>
	</select>
	<input type="submit" value="Ok" />
</form>
<table class="outer">
	<tr style="text-align:center;">
		<th rowspan="2">&nbsp;</th>
		<td colspan="2" class="even"><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extcal/calendar.php?<?php echo $this->_tpl_vars['month']['prev']['uri']; ?>
">&lt;&lt; <?php echo $this->_tpl_vars['month']['prev']['name']; ?>
</a></td>
		<td colspan="3" class="even"><span style="font-weight:bold;"><?php echo $this->_tpl_vars['month']['this']['name']; ?>
</span></td>
		<td colspan="2" class="even"><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extcal/calendar.php?<?php echo $this->_tpl_vars['month']['next']['uri']; ?>
"><?php echo $this->_tpl_vars['month']['next']['name']; ?>
 &gt;&gt;</a></td>
	</tr>
	<tr style="text-align:center;" class="head">
		<?php if (count($_from = (array)$this->_tpl_vars['lang']['days'])):
    foreach ($_from as $this->_tpl_vars['day']):
?>
		<td><?php echo $this->_tpl_vars['day']; ?>
</td>
		<?php endforeach; unset($_from); endif; ?>
	</tr>
	<?php if (count($_from = (array)$this->_tpl_vars['month']['month'])):
    foreach ($_from as $this->_tpl_vars['weeks']):
?>
	<tr>
		<th style="vertical-align:middle;"><?php echo $this->_tpl_vars['weeks']['weekNumber']; ?>
</th>
		<?php if (count($_from = (array)$this->_tpl_vars['weeks']['week'])):
    foreach ($_from as $this->_tpl_vars['day']):
?>
		<td class="<?php if ($this->_tpl_vars['day']['isEmpty']): ?>even<?php else: ?>odd<?php endif; ?>" style="width:14%; height:80px;<?php if ($this->_tpl_vars['day']['isSelected']): ?> background-color:#B6CDE4;<?php endif; ?>">
			<?php if ($this->_tpl_vars['day']['isEmpty']): ?>&nbsp;<?php else: ?><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extcal/day.php?year=<?php echo $this->_tpl_vars['yearNumber']; ?>
&amp;month=<?php echo $this->_tpl_vars['monthNumber']; ?>
&amp;day=<?php echo $this->_tpl_vars['day']['number']; ?>
"><?php echo $this->_tpl_vars['day']['number']; ?>
</a><?php endif; ?><br />
			<?php if (count($_from = (array)$this->_tpl_vars['day']['events'])):
    foreach ($_from as $this->_tpl_vars['event']):
?>
			<?php if ($this->_tpl_vars['event']): ?>
			<div style="font-size:0.8em; margin-top:5px;"><img src="images/event-<?php echo $this->_tpl_vars['event']['statu']; ?>
.gif" /> <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extcal/event.php?event=<?php echo $this->_tpl_vars['event']['event_id']; ?>
"><?php echo $this->_tpl_vars['event']['event_title']; ?>
</a></div>
			<div style="background-color:#<?php echo $this->_tpl_vars['event']['cat_color']; ?>
; height:2px; font-size:2px;">&nbsp;</div>
			<?php endif; ?>
			<?php endforeach; unset($_from); endif; ?>
		</td>
		<?php endforeach; unset($_from); endif; ?>
	</tr>
	<?php endforeach; unset($_from); endif; ?>
	<tr>
		<th colspan="8">
		<?php if (count($_from = (array)$this->_tpl_vars['cats'])):
    foreach ($_from as $this->_tpl_vars['cat']):
?>
		<div style="float:left; margin-left:20px;"><div style="float:left; background-color:#<?php echo $this->_tpl_vars['cat']['cat_color']; ?>
; border:1px solid white; margin-right:5px;">&nbsp;</div><?php echo $this->_tpl_vars['cat']['cat_title']; ?>
</div>
		<?php endforeach; unset($_from); endif; ?>
		</th>
	</tr>
</table>
<div style="text-align:right;"><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extcal/rss.php?cat=<?php echo $this->_tpl_vars['rssCat']; ?>
"><img src="images/rss.gif" alt="RSS Feed" /></a></div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'db:system_notification_select.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>