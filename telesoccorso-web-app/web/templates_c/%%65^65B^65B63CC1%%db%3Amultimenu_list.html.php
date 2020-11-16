<?php /* Smarty version 2.6.5-dev, created on 2006-05-04 10:40:15
         compiled from db:multimenu_list.html */ ?>
<?php require_once(SMARTY_DIR . 'core' . DIRECTORY_SEPARATOR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', 'db:multimenu_list.html', 8, false),)), $this); ?>
<!-- Start multiMenu <?php echo $this->_tpl_vars['block']['mm']; ?>
 -->
<?php $this->assign('td', -1); ?>
<?php if ($this->_tpl_vars['block']['marquee']): ?>
	<marquee <?php echo $this->_tpl_vars['block']['marquee']; ?>
 scrollamount="<?php echo $this->_tpl_vars['block']['marquee_delay']; ?>
" scrolldelay="60" height="<?php echo $this->_tpl_vars['block']['marquee_height']; ?>
" onmouseover="this.stop()" onmouseout="this.start()">
      <?php endif; ?>
<table cellspacing="0" cellpadding="0">
<tr>
<td width="<?php if ($this->_tpl_vars['block']['columns'] > 1):  echo smarty_function_math(array('equation' => "x/y",'x' => 100,'y' => $this->_tpl_vars['block']['columns']), $this); else: ?>100<?php endif; ?>%">

<?php $this->assign('ul_main', 0);  $this->assign('ul_sec', 0); ?>
<?php if (count($_from = (array)$this->_tpl_vars['block']['contents'])):
    foreach ($_from as $this->_tpl_vars['imenu']):
?>

<?php if ($this->_tpl_vars['imenu']['submenu'] == 0): ?>
<?php if ($this->_tpl_vars['ul_sec'] == 1): ?></<?php echo $this->_tpl_vars['block']['format']; ?>
><?php $this->assign('ul_sec', 0);  endif; ?>
	<?php $this->assign('td', $this->_tpl_vars['td']+1); ?>
	<?php if ($this->_tpl_vars['td'] > $this->_tpl_vars['block']['columns_limit']): ?>
<?php if ($this->_tpl_vars['ul_main'] == 1): ?></<?php echo $this->_tpl_vars['block']['format']; ?>
><?php $this->assign('ul_main', 0);  endif; ?>
		</td>
	<!-- New Column --> 
		<td width="<?php if ($this->_tpl_vars['block']['columns'] > 1):  echo smarty_function_math(array('equation' => "x/y",'x' => 100,'y' => $this->_tpl_vars['block']['columns']), $this); else: ?>100<?php endif; ?>%">
		<?php $this->assign('td', 0); ?>
		<?php $this->assign('top', '1'); ?>
	<?php endif; ?>
<?php if ($this->_tpl_vars['ul_main'] == 0): ?><<?php echo $this->_tpl_vars['block']['format']; ?>
><?php $this->assign('ul_main', 1);  endif; ?>
	<li><?php echo $this->_tpl_vars['imenu']['link'];  echo $this->_tpl_vars['imenu']['image'];  echo $this->_tpl_vars['imenu']['title'];  echo $this->_tpl_vars['imenu']['a']; ?>
</li>

<?php elseif ($this->_tpl_vars['imenu']['submenu'] == 1 || $this->_tpl_vars['imenu']['submenu'] == 2): ?>
<?php if ($this->_tpl_vars['ul_sec'] == 0): ?><<?php echo $this->_tpl_vars['block']['format']; ?>
><?php $this->assign('ul_sec', 1);  endif; ?>
		
	<li><?php echo $this->_tpl_vars['imenu']['link'];  echo $this->_tpl_vars['imenu']['image'];  echo $this->_tpl_vars['imenu']['title'];  echo $this->_tpl_vars['imenu']['a']; ?>
</li>

<?php elseif ($this->_tpl_vars['imenu']['submenu'] == 3): ?>
<?php if ($this->_tpl_vars['ul_main'] == 1): ?></<?php echo $this->_tpl_vars['block']['format']; ?>
><?php $this->assign('ul_main', 0);  endif; ?>
<?php if ($this->_tpl_vars['ul_sec'] == 1): ?></<?php echo $this->_tpl_vars['block']['format']; ?>
><?php $this->assign('ul_sec', 0);  endif; ?>
	<?php echo $this->_tpl_vars['imenu']['link'];  echo $this->_tpl_vars['imenu']['image'];  echo $this->_tpl_vars['imenu']['title'];  echo $this->_tpl_vars['imenu']['a']; ?>
</p>

<?php elseif ($this->_tpl_vars['imenu']['submenu'] == 4): ?>
<?php if ($this->_tpl_vars['ul_main'] == 1): ?></<?php echo $this->_tpl_vars['block']['format']; ?>
><?php $this->assign('ul_main', 0);  endif; ?>
<?php if ($this->_tpl_vars['ul_sec'] == 1): ?></<?php echo $this->_tpl_vars['block']['format']; ?>
><?php $this->assign('ul_sec', 0);  endif; ?>
	<?php $this->assign('td', $this->_tpl_vars['td']+1); ?>
	<?php if ($this->_tpl_vars['td'] > $this->_tpl_vars['block']['columns_limit']): ?>
		</td>
		<!-- New Column --> 
		<td width="<?php if ($this->_tpl_vars['block']['columns'] > 1):  echo smarty_function_math(array('equation' => "x/y",'x' => 100,'y' => $this->_tpl_vars['block']['columns']), $this); else: ?>100<?php endif; ?>%">
		<?php $this->assign('td', 0); ?>
		<?php $this->assign('top', '1'); ?>
	<?php endif; ?>
	<?php echo $this->_tpl_vars['imenu']['link'];  echo $this->_tpl_vars['imenu']['image']; ?>
<h3><?php echo $this->_tpl_vars['imenu']['title']; ?>
</h3><?php echo $this->_tpl_vars['imenu']['a']; ?>

<?php endif; ?>
<?php endforeach; unset($_from); endif; ?>
	<?php if ($this->_tpl_vars['ul_main'] == 1): ?></<?php echo $this->_tpl_vars['block']['format']; ?>
><?php endif; ?>
	<?php if ($this->_tpl_vars['ul_sec'] == 1): ?></<?php echo $this->_tpl_vars['block']['format']; ?>
><?php endif; ?>
</td>
<tr>
</table>
<?php if ($this->_tpl_vars['block']['marquee']): ?>
	</marquee>
<?php endif; ?>
<!-- End multiMenu <?php echo $this->_tpl_vars['block']['mm']; ?>
 -->