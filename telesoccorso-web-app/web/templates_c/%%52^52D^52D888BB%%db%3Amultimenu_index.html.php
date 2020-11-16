<?php /* Smarty version 2.6.5-dev, created on 2006-05-04 10:40:15
         compiled from db:multimenu_index.html */ ?>
<?php if ($this->_tpl_vars['banner']): ?><div align="center"><p><?php echo $this->_tpl_vars['banner']; ?>
</p></div><?php endif; ?>
<?php if ($this->_tpl_vars['nav']):  echo $this->_tpl_vars['nav'];  endif; ?>
<div class="item">
<div class="itemHead"><div class="itemTitle"><?php echo $this->_tpl_vars['mm_module_name'];  if ($this->_tpl_vars['mm_edit']):  echo $this->_tpl_vars['mm_edit'];  endif; ?></div></div>
<?php if ($this->_tpl_vars['mm_read']): ?><div class="itemInfo"><?php echo $this->_tpl_vars['mm_read']; ?>
</div><?php endif; ?>
<div class="itemText"><?php echo $this->_tpl_vars['mm_textindex']; ?>
</div>
<div class="itemBody">
<table><tbody>
<tr>
<?php if ($this->_tpl_vars['mm01_title']): ?><th><div class="itemTitle"><?php echo $this->_tpl_vars['mm01_title'];  echo $this->_tpl_vars['mm01_edit']; ?>
</div></th><?php endif; ?>
<?php if ($this->_tpl_vars['mm02_title']): ?><th><div class="itemTitle"><?php echo $this->_tpl_vars['mm02_title'];  echo $this->_tpl_vars['mm02_edit']; ?>
</div></th><?php endif; ?>
<?php if ($this->_tpl_vars['mm03_title']): ?><th><div class="itemTitle"><?php echo $this->_tpl_vars['mm03_title'];  echo $this->_tpl_vars['mm03_edit']; ?>
</div></th><?php endif; ?>
<?php if ($this->_tpl_vars['mm04_title']): ?><th><div class="itemTitle"><?php echo $this->_tpl_vars['mm04_title'];  echo $this->_tpl_vars['mm04_edit']; ?>
</div></th><?php endif; ?>
</tr>
<tr>
<?php if ($this->_tpl_vars['mm01_display']): ?>
<td><ul>
	<?php if (count($_from = (array)$this->_tpl_vars['mm_content01'])):
    foreach ($_from as $this->_tpl_vars['menu']):
?>
	<?php echo $this->_tpl_vars['menu']['link']; ?>

	<?php endforeach; unset($_from); endif; ?>
</ul></td>
<?php endif; ?>
<?php if ($this->_tpl_vars['mm02_display']): ?>
<td><ul>
	<?php if (count($_from = (array)$this->_tpl_vars['mm_content02'])):
    foreach ($_from as $this->_tpl_vars['menu']):
?>
	<?php echo $this->_tpl_vars['menu']['link']; ?>

	<?php endforeach; unset($_from); endif; ?>
</ul></td>
<?php endif; ?>
<?php if ($this->_tpl_vars['mm03_display']): ?>
<td><ul>
	<?php if (count($_from = (array)$this->_tpl_vars['mm_content03'])):
    foreach ($_from as $this->_tpl_vars['menu']):
?>
	<?php echo $this->_tpl_vars['menu']['link']; ?>

	<?php endforeach; unset($_from); endif; ?>
</ul></td>
<?php endif; ?>
<?php if ($this->_tpl_vars['mm04_display']): ?>
<td><ul>
	<?php if (count($_from = (array)$this->_tpl_vars['mm_content04'])):
    foreach ($_from as $this->_tpl_vars['menu']):
?>
	<?php echo $this->_tpl_vars['menu']['link']; ?>

	<?php endforeach; unset($_from); endif; ?>
</ul></td>
<?php endif; ?>
<?php if ($this->_tpl_vars['mm05_display']): ?>
</tr>
<tr>
<?php if ($this->_tpl_vars['mm05_title']): ?><th><div class="itemTitle"><?php echo $this->_tpl_vars['mm05_title'];  echo $this->_tpl_vars['mm05_edit']; ?>
</div></th><?php endif; ?>
<?php if ($this->_tpl_vars['mm06_title']): ?><th><div class="itemTitle"><?php echo $this->_tpl_vars['mm06_title'];  echo $this->_tpl_vars['mm06_edit']; ?>
</div></th><?php endif; ?>
<?php if ($this->_tpl_vars['mm07_title']): ?><th><div class="itemTitle"><?php echo $this->_tpl_vars['mm07_title'];  echo $this->_tpl_vars['mm07_edit']; ?>
</div></th><?php endif; ?>
<?php if ($this->_tpl_vars['mm08_title']): ?><th><div class="itemTitle"><?php echo $this->_tpl_vars['mm08_title'];  echo $this->_tpl_vars['mm08_edit']; ?>
</div></th><?php endif; ?>
</tr>
<tr><td><ul>
	<?php if (count($_from = (array)$this->_tpl_vars['mm_content05'])):
    foreach ($_from as $this->_tpl_vars['menu']):
?>
	<?php echo $this->_tpl_vars['menu']['link']; ?>

	<?php endforeach; unset($_from); endif; ?>
</ul></td>
<?php endif; ?>
<?php if ($this->_tpl_vars['mm06_display']): ?>
<td><ul>
	<?php if (count($_from = (array)$this->_tpl_vars['mm_content06'])):
    foreach ($_from as $this->_tpl_vars['menu']):
?>
	<?php echo $this->_tpl_vars['menu']['link']; ?>

	<?php endforeach; unset($_from); endif; ?>
</ul></td>
<?php endif; ?>
<?php if ($this->_tpl_vars['mm07_display']): ?>
<td><ul>
	<?php if (count($_from = (array)$this->_tpl_vars['mm_content07'])):
    foreach ($_from as $this->_tpl_vars['menu']):
?>
	<?php echo $this->_tpl_vars['menu']['link']; ?>

	<?php endforeach; unset($_from); endif; ?>
</ul></td>
<?php endif; ?>
<?php if ($this->_tpl_vars['mm08_display']): ?>
<td><ul>
	<?php if (count($_from = (array)$this->_tpl_vars['mm_content08'])):
    foreach ($_from as $this->_tpl_vars['menu']):
?>
	<?php echo $this->_tpl_vars['menu']['link']; ?>

	<?php endforeach; unset($_from); endif; ?>
</ul></td>
<?php endif; ?>
</tr></tbody>
</table>
</div>
<?php if ($this->_tpl_vars['mm_admin']): ?><div class="itemFoot"><?php echo $this->_tpl_vars['mm_admin']; ?>
</div><?php endif; ?>
</div>
<div style="display: none;">multiMenu is developed by The WolFactory (http://www.wolfpackclan.com/wolfactory), a Xoops division of the Wolf Pack Clan (http://www.wolfpackclan.com)</div>