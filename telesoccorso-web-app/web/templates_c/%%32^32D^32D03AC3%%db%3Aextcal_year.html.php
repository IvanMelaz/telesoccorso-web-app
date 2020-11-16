<?php /* Smarty version 2.6.5-dev, created on 2006-05-04 10:14:32
         compiled from db:extcal_year.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:extcal_navbar.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<form action="year.php" method="get">
	<select name="year">
		<?php if (count($_from = (array)$this->_tpl_vars['nav']['year'])):
    foreach ($_from as $this->_tpl_vars['yearNav']):
?>
		<option value="<?php echo $this->_tpl_vars['yearNav']['yearNumber']; ?>
"<?php if ($this->_tpl_vars['yearNav']['isSelected']): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['yearNav']['yearNumber']; ?>
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
		<td class="even" style="width:33%;"><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extcal/year.php?year=<?php echo $this->_tpl_vars['year']['prev']; ?>
">&lt;&lt;&nbsp;&nbsp;<?php echo $this->_tpl_vars['year']['prev']; ?>
</a></td>
		<td class="even" style="width:33%;"><span style="font-weight:bold;"><?php echo $this->_tpl_vars['year']['this']; ?>
</span></td>
		<td class="even" style="width:33%;"><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extcal/year.php?year=<?php echo $this->_tpl_vars['year']['next']; ?>
"><?php echo $this->_tpl_vars['year']['next']; ?>
&nbsp;&nbsp;&gt;&gt;</a></td>
	</tr>
	<?php if (count($_from = (array)$this->_tpl_vars['year']['events'])):
    foreach ($_from as $this->_tpl_vars['event']):
?>
	<tr>
		<td colspan="3" class="odd" style="vertical-align:middle;"><div style="height:20px; width:5px; background-color:#<?php echo $this->_tpl_vars['event']['cat_color']; ?>
; border:1px solid black; float:left; margin-right:5px;"></div><?php echo $this->_tpl_vars['event']['start']; ?>
&nbsp;&nbsp;<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/extcal/event.php?event=<?php echo $this->_tpl_vars['event']['event_id']; ?>
"><?php echo $this->_tpl_vars['event']['event_title']; ?>
</a></td>
	</tr>
	<?php endforeach; unset($_from); endif; ?>
	<tr>
		<th colspan="3">
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