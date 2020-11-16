<?php /* Smarty version 2.6.5-dev, created on 2006-05-04 10:40:15
         compiled from db:multimenu_pic.html */ ?>
<?php require_once(SMARTY_DIR . 'core' . DIRECTORY_SEPARATOR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', 'db:multimenu_pic.html', 5, false),)), $this); ?>
<!-- Start multiMenu <?php echo $this->_tpl_vars['block']['mm']; ?>
 -->
<?php if ($this->_tpl_vars['block']['marquee']): ?><marquee <?php echo $this->_tpl_vars['block']['marquee']; ?>
 scrollamount="<?php echo $this->_tpl_vars['block']['marquee_delay']; ?>
" scrolldelay="60" height="<?php echo $this->_tpl_vars['block']['marquee_height']; ?>
" onmouseover="this.stop()" onmouseout="this.start()"><?php endif; ?>
	<table cellspacing="0" cellpadding="0">
	<tr>
	<td width="<?php if ($this->_tpl_vars['block']['columns'] > 1):  echo smarty_function_math(array('equation' => "x/y",'x' => 100,'y' => $this->_tpl_vars['block']['columns']), $this); else: ?>100<?php endif; ?>%">
	<div align="center">
<?php $this->assign('td', -1); ?>
      <?php if (count($_from = (array)$this->_tpl_vars['block']['contents'])):
    foreach ($_from as $this->_tpl_vars['imenu']):
?>
	<?php if ($this->_tpl_vars['imenu']['submenu'] == 0): ?>
	<?php $this->assign('td', $this->_tpl_vars['td']+1); ?>
	<?php if ($this->_tpl_vars['td'] >= $this->_tpl_vars['block']['columns_limit']): ?>
		</div>
		</td>
		<!-- New column -->
		<td width="<?php if ($this->_tpl_vars['block']['columns'] > 1):  echo smarty_function_math(array('equation' => "x/y",'x' => 100,'y' => $this->_tpl_vars['block']['columns']), $this); else: ?>100<?php endif; ?>%">
		<div align="center">
		<?php $this->assign('td', 0); ?>
	<?php endif; ?>
          	<?php echo $this->_tpl_vars['imenu']['link'];  echo $this->_tpl_vars['imenu']['image']; ?>
<br />
		<?php echo $this->_tpl_vars['imenu']['title'];  echo $this->_tpl_vars['imenu']['a']; ?>
</p>

	<?php elseif ($this->_tpl_vars['imenu']['submenu'] == 1 || $this->_tpl_vars['imenu']['submenu'] == 2): ?>
          	<?php echo $this->_tpl_vars['imenu']['link'];  echo $this->_tpl_vars['imenu']['image']; ?>
<br />
		<i><?php echo $this->_tpl_vars['imenu']['title']; ?>
</i><?php echo $this->_tpl_vars['imenu']['a']; ?>
</p>
	<?php elseif ($this->_tpl_vars['imenu']['submenu'] == 3): ?>
		</div>
		<?php echo $this->_tpl_vars['imenu']['link'];  echo $this->_tpl_vars['imenu']['image']; ?>
<br />
		<i><?php echo $this->_tpl_vars['imenu']['title']; ?>
</i><?php echo $this->_tpl_vars['imenu']['a']; ?>
</p>
		<div align="center">

	<?php elseif ($this->_tpl_vars['imenu']['submenu'] == 4): ?>

	<?php $this->assign('td', $this->_tpl_vars['td']+1); ?>
	<?php if ($this->_tpl_vars['td'] >= $this->_tpl_vars['block']['columns_limit']): ?>
		</div>
		</td>
		<!-- New column -->
		<td width="<?php if ($this->_tpl_vars['block']['columns'] > 1):  echo smarty_function_math(array('equation' => "x/y",'x' => 100,'y' => $this->_tpl_vars['block']['columns']), $this); else: ?>100<?php endif; ?>%">
		<div align="center">
		<?php $this->assign('td', 0); ?>
	<?php endif; ?>
      	<h3><?php echo $this->_tpl_vars['imenu']['link'];  echo $this->_tpl_vars['imenu']['image']; ?>

		<?php echo $this->_tpl_vars['imenu']['title'];  echo $this->_tpl_vars['imenu']['a']; ?>
</h3>
	<?php endif; ?>
     <?php endforeach; unset($_from); endif; ?>

</div>
</td>
</tr>
</table>
<?php if ($this->_tpl_vars['block']['marquee']): ?></marquee><?php endif; ?>
<!-- End multiMenu <?php echo $this->_tpl_vars['block']['mm']; ?>
 -->