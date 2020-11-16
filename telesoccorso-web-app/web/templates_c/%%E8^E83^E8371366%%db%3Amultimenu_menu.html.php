<?php /* Smarty version 2.6.5-dev, created on 2006-05-04 10:40:16
         compiled from db:multimenu_menu.html */ ?>
<?php require_once(SMARTY_DIR . 'core' . DIRECTORY_SEPARATOR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', 'db:multimenu_menu.html', 5, false),array('function', 'counter', 'db:multimenu_menu.html', 17, false),)), $this); ?>
<!-- Start multiMenu <?php echo $this->_tpl_vars['block']['mm']; ?>
 -->
<?php $this->assign('td', -1); ?>
	<table cellspacing="0" cellpadding="0">
	<tr>
	<td id="mainmenu" width="<?php if ($this->_tpl_vars['block']['columns'] > 1):  echo smarty_function_math(array('equation' => "x/y",'x' => 100,'y' => $this->_tpl_vars['block']['columns']), $this); else: ?>100<?php endif; ?>%">
<?php if (count($_from = (array)$this->_tpl_vars['block']['contents'])):
    foreach ($_from as $this->_tpl_vars['imenu']):
?>
<?php if ($this->_tpl_vars['imenu']['submenu'] == 0): ?>
	<?php $this->assign('td', $this->_tpl_vars['td']+1); ?>
	<?php if ($this->_tpl_vars['td'] > $this->_tpl_vars['block']['columns_limit']): ?>
		</td>
		<td id="mainmenu" width="<?php if ($this->_tpl_vars['block']['columns'] > 1):  echo smarty_function_math(array('equation' => "x/y",'x' => 100,'y' => $this->_tpl_vars['block']['columns']), $this); else: ?>100<?php endif; ?>%">
		<?php $this->assign('td', 0); ?>
	<?php endif; ?>

<?php if ($this->_tpl_vars['td'] == 0 || $this->_tpl_vars['top'] == 1): ?>
	<a class="menuTop" <?php if ($this->_tpl_vars['imenu']['link']): ?>href="<?php echo $this->_tpl_vars['imenu']['linkurl']; ?>
" <?php echo $this->_tpl_vars['imenu']['target'];  endif; ?>title="<?php echo $this->_tpl_vars['imenu']['alt_title']; ?>
"><?php echo $this->_tpl_vars['imenu']['image'];  echo $this->_tpl_vars['imenu']['title']; ?>
</a>
<?php $this->assign('top', '0');  echo smarty_function_counter(array('print' => false,'assign' => 'count'), $this);?>

<?php else: ?> 
	<a class="menuMain" <?php if ($this->_tpl_vars['imenu']['link']): ?>href="<?php echo $this->_tpl_vars['imenu']['linkurl']; ?>
" <?php echo $this->_tpl_vars['imenu']['target'];  endif; ?>title="<?php echo $this->_tpl_vars['imenu']['alt_title']; ?>
">
<?php echo $this->_tpl_vars['imenu']['image'];  echo $this->_tpl_vars['imenu']['title']; ?>
</a>
<?php endif; ?>
<?php elseif ($this->_tpl_vars['imenu']['submenu'] == 1 || $this->_tpl_vars['imenu']['submenu'] == 2): ?>
<?php if ($this->_tpl_vars['top'] == 1): ?>
	<a class="menuSubTop" <?php if ($this->_tpl_vars['imenu']['link']): ?>href="<?php echo $this->_tpl_vars['imenu']['linkurl']; ?>
" <?php echo $this->_tpl_vars['imenu']['target'];  endif; ?>title="<?php echo $this->_tpl_vars['imenu']['alt_title']; ?>
"><?php echo $this->_tpl_vars['imenu']['image'];  echo $this->_tpl_vars['imenu']['title']; ?>
</a>
<?php $this->assign('top', '0'); ?>
<?php else: ?>
	<a class="menuSub" <?php if ($this->_tpl_vars['imenu']['link']): ?>href="<?php echo $this->_tpl_vars['imenu']['linkurl']; ?>
" <?php echo $this->_tpl_vars['imenu']['target'];  endif; ?>title="<?php echo $this->_tpl_vars['imenu']['alt_title']; ?>
"><?php echo $this->_tpl_vars['imenu']['image'];  echo $this->_tpl_vars['imenu']['title']; ?>
</a>
<?php endif; ?>
<?php elseif ($this->_tpl_vars['imenu']['submenu'] == 3): ?>
	<?php if ($this->_tpl_vars['imenu']['link']): ?><a class="menuNote" href="<?php echo $this->_tpl_vars['imenu']['linkurl']; ?>
" <?php echo $this->_tpl_vars['imenu']['target']; ?>
title="<?php echo $this->_tpl_vars['imenu']['alt_title']; ?>
"><?php endif;  echo $this->_tpl_vars['imenu']['image'];  echo $this->_tpl_vars['imenu']['title']; ?>
</a>
<?php $this->assign('top', '1'); ?>
<?php elseif ($this->_tpl_vars['imenu']['submenu'] == 4): ?>

	<?php $this->assign('td', $this->_tpl_vars['td']+1); ?>
	<?php if ($this->_tpl_vars['td'] > $this->_tpl_vars['block']['columns_limit']): ?>
		</td>
		<td id="mainmenu" width="<?php if ($this->_tpl_vars['block']['columns'] > 1):  echo smarty_function_math(array('equation' => "x/y",'x' => 100,'y' => $this->_tpl_vars['block']['columns']), $this); else: ?>100<?php endif; ?>%">
		<?php $this->assign('td', 0); ?>
	<?php endif; ?>

	<h3><?php echo $this->_tpl_vars['imenu']['link'];  echo $this->_tpl_vars['imenu']['image'];  echo $this->_tpl_vars['imenu']['title'];  echo $this->_tpl_vars['imenu']['a']; ?>
</h3>
<?php echo smarty_function_counter(array('print' => false,'assign' => 'count'), $this);?>

<?php $this->assign('top', '1'); ?>
<?php endif; ?>

<?php endforeach; unset($_from); endif; ?>
</td>
</tr>
</table>
<!-- End multiMenu <?php echo $this->_tpl_vars['block']['mm']; ?>
 -->