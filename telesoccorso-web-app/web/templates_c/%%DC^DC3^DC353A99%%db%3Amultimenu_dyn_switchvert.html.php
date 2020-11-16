<?php /* Smarty version 2.6.5-dev, created on 2006-05-04 10:40:15
         compiled from db:multimenu_dyn_switchvert.html */ ?>
<?php require_once(SMARTY_DIR . 'core' . DIRECTORY_SEPARATOR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'counter', 'db:multimenu_dyn_switchvert.html', 14, false),array('function', 'math', 'db:multimenu_dyn_switchvert.html', 21, false),)), $this); ?>
<!-- Start multiMenu <?php echo $this->_tpl_vars['block']['mm']; ?>
 -->
<style type="text/css">
.menutitle {
cursor:pointer;
}

.menutitle2 {
cursor:cursor;
}
</style>

<script language="JavaScript" type="text/javascript" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/multiMenu/script/01/menu.js"></script>

<?php echo smarty_function_counter(array('start' => 0,'print' => false), $this);?>

<?php $this->assign('td', -1); ?>
<?php $this->assign('top', '1'); ?>
<?php $this->assign('span', '0'); ?>
<div id="masterdiv">
<table cellspacing="0" cellpadding="0">
<tr>
<td id="mainmenu" width="<?php if ($this->_tpl_vars['block']['columns'] > 1):  echo smarty_function_math(array('equation' => "x/y",'x' => 100,'y' => $this->_tpl_vars['block']['columns']), $this); else: ?>100<?php endif; ?>%">
<?php if (count($_from = (array)$this->_tpl_vars['block']['contents'])):
    foreach ($_from as $this->_tpl_vars['imenu']):
?>

<?php if ($this->_tpl_vars['submenu'] == '0'): ?>
<!-- Main link -->
	<?php $this->assign('td', $this->_tpl_vars['td']+1); ?>
	<?php if ($this->_tpl_vars['td'] > $this->_tpl_vars['block']['columns_limit']): ?>
		</td>
		<td id="mainmenu" width="<?php if ($this->_tpl_vars['block']['columns'] > 1):  echo smarty_function_math(array('equation' => "x/y",'x' => 100,'y' => $this->_tpl_vars['block']['columns']), $this); else: ?>100<?php endif; ?>%">
		<?php $this->assign('td', 0); ?>
		<?php $this->assign('top', '1'); ?>
	<?php endif; ?>

	<?php if ($this->_tpl_vars['span'] == 2): ?></span><?php endif; ?>
	<?php echo smarty_function_counter(array('assign' => 'count','print' => false), $this);?>

	<?php if ($this->_tpl_vars['imenu']['submenu'] == '1' || $this->_tpl_vars['imenu']['submenu'] == '2'): ?>
		<div class="menutitle" onclick="SwitchMenu('sub<?php echo $this->_tpl_vars['block']['mm'];  echo $this->_tpl_vars['count']; ?>
')">
		<a class="<?php if ($this->_tpl_vars['top'] == 1): ?>menuTop<?php else: ?>menuMain<?php endif; ?>" title="<?php echo $this->_tpl_vars['alt_title']; ?>
">
		<img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/multiMenu/script/images/arrow1.gif" align="right" alt="<?php echo $this->_tpl_vars['alt_title']; ?>
"/>
		<?php echo $this->_tpl_vars['image'];  echo $this->_tpl_vars['title']; ?>

		</a>
		</div>
	<?php else: ?>
		<?php if ($this->_tpl_vars['linkurl']): ?><div class="menutitle"><?php else: ?><div class="menutitle2"><?php endif; ?>
		<a class="<?php if ($this->_tpl_vars['top'] == 1): ?>menuTop<?php else: ?>menuMain<?php endif; ?>" 
		<?php if ($this->_tpl_vars['linkurl']):  echo $this->_tpl_vars['target']; ?>
href="<?php echo $this->_tpl_vars['linkurl']; ?>
"<?php endif; ?> title="<?php echo $this->_tpl_vars['alt_title']; ?>
">
		<?php echo $this->_tpl_vars['image'];  echo $this->_tpl_vars['title']; ?>

		</a>
		</div>
	<?php endif; ?>
	<?php $this->assign('top', '0'); ?>
	<?php $this->assign('span', '1'); ?>
<?php elseif ($this->_tpl_vars['submenu'] == '1' || $this->_tpl_vars['submenu'] == '2'): ?>
<!-- Sublinks -->
	<?php if ($this->_tpl_vars['span'] == 0 || $this->_tpl_vars['span'] == 1): ?><span class="submenu" id="sub<?php echo $this->_tpl_vars['block']['mm'];  echo $this->_tpl_vars['count']; ?>
"><?php endif; ?>
		<a class="menuSub" <?php if ($this->_tpl_vars['linkurl']):  echo $this->_tpl_vars['target']; ?>
href="<?php echo $this->_tpl_vars['linkurl']; ?>
" <?php endif; ?>title="<?php echo $this->_tpl_vars['alt_title']; ?>
">
		<?php echo $this->_tpl_vars['image'];  echo $this->_tpl_vars['title']; ?>
</a>
	<?php $this->assign('top', '0'); ?>
	<?php $this->assign('span', '2'); ?>

<?php elseif ($this->_tpl_vars['submenu'] == '3'): ?>
<!-- Note -->
		<div class="menuNote"><?php echo $this->_tpl_vars['link'];  echo $this->_tpl_vars['title'];  echo $this->_tpl_vars['image'];  echo $this->_tpl_vars['a']; ?>
</div>
	<?php $this->assign('top', '1'); ?>
<?php elseif ($this->_tpl_vars['submenu'] == '4'): ?>
<!-- Categorie -->
	<?php $this->assign('td', $this->_tpl_vars['td']+1); ?>
	<?php if ($this->_tpl_vars['td'] > $this->_tpl_vars['block']['columns_limit']): ?>
		</td>
		<td id="mainmenu" width="<?php if ($this->_tpl_vars['block']['columns'] > 1):  echo smarty_function_math(array('equation' => "x/y",'x' => 100,'y' => $this->_tpl_vars['block']['columns']), $this); else: ?>100<?php endif; ?>%">
		<?php $this->assign('td', 0); ?>
	<?php endif; ?>

	<?php if ($this->_tpl_vars['span'] == 2): ?></span><?php endif; ?>
	<?php $this->assign('span', '3'); ?>
	<?php $this->assign('top', '1'); ?>
	<h3><?php echo $this->_tpl_vars['link'];  echo $this->_tpl_vars['image'];  echo $this->_tpl_vars['title'];  echo $this->_tpl_vars['a']; ?>
</h3>

<?php endif; ?>

<?php $this->assign('submenu', $this->_tpl_vars['imenu']['submenu']); ?>
<?php $this->assign('linkurl', $this->_tpl_vars['imenu']['linkurl']); ?>
<?php $this->assign('link', $this->_tpl_vars['imenu']['link']); ?>
<?php $this->assign('counter', $this->_tpl_vars['count']); ?>
<?php $this->assign('target', $this->_tpl_vars['imenu']['target']); ?>
<?php $this->assign('alt_title', $this->_tpl_vars['imenu']['alt_title']); ?>
<?php $this->assign('image', $this->_tpl_vars['imenu']['image']); ?>
<?php $this->assign('title', $this->_tpl_vars['imenu']['title']); ?>
<?php $this->assign('a', $this->_tpl_vars['imenu']['a']); ?>

<?php endforeach; unset($_from); endif; ?>

<?php if ($this->_tpl_vars['submenu'] == '0'): ?>
<!-- Main link -->
	<?php if ($this->_tpl_vars['span'] == 2): ?></span><?php endif; ?>
	<?php echo smarty_function_counter(array('assign' => 'count','print' => false), $this);?>

		<?php if ($this->_tpl_vars['linkurl']): ?><div class="menutitle"><?php else: ?><div class="menutitle2"><?php endif; ?>
		<a class="<?php if ($this->_tpl_vars['top'] == 1): ?>menuTop<?php else: ?>menuMain<?php endif; ?>" 
		<?php if ($this->_tpl_vars['linkurl']):  echo $this->_tpl_vars['target']; ?>
href="<?php echo $this->_tpl_vars['linkurl']; ?>
" <?php endif; ?>title="<?php echo $this->_tpl_vars['alt_title']; ?>
">
		<?php echo $this->_tpl_vars['image'];  echo $this->_tpl_vars['title']; ?>

		</a>
		</div>
	<?php $this->assign('top', '0'); ?>
	<?php $this->assign('span', '1'); ?>

<?php elseif ($this->_tpl_vars['submenu'] == '1' || $this->_tpl_vars['submenu'] == '2'): ?>
<!-- Sublinks -->
	<?php if ($this->_tpl_vars['span'] == 0 || $this->_tpl_vars['span'] == 1): ?><span class="submenu" id="sub<?php echo $this->_tpl_vars['block']['mm'];  echo $this->_tpl_vars['count']; ?>
"><?php endif; ?>
		<a class="menuSub" <?php if ($this->_tpl_vars['linkurl']):  echo $this->_tpl_vars['target']; ?>
href="<?php echo $this->_tpl_vars['linkurl']; ?>
"<?php endif; ?> title="<?php echo $this->_tpl_vars['alt_title']; ?>
">
		<?php echo $this->_tpl_vars['image'];  echo $this->_tpl_vars['title']; ?>
</a>
	<?php $this->assign('top', '0'); ?>
	<?php $this->assign('span', '2'); ?>

<?php elseif ($this->_tpl_vars['submenu'] == '3'): ?>
<!-- Note -->
	<div class="menuNote"><?php echo $this->_tpl_vars['link'];  echo $this->_tpl_vars['title'];  echo $this->_tpl_vars['image'];  echo $this->_tpl_vars['a']; ?>
</div>
	<?php echo smarty_function_counter(array('assign' => 'count','print' => false), $this);?>

	<?php $this->assign('top', '1'); ?>

<?php elseif ($this->_tpl_vars['submenu'] == '4'): ?>
<!-- Categorie -->
	<?php if ($this->_tpl_vars['span'] == 2): ?></span><?php endif; ?>
	<?php $this->assign('span', '3'); ?>
	<?php $this->assign('top', '1'); ?>
	<h3><?php echo $this->_tpl_vars['link'];  echo $this->_tpl_vars['title'];  echo $this->_tpl_vars['image'];  echo $this->_tpl_vars['a']; ?>
</h3>
<?php endif; ?>
	<?php if ($this->_tpl_vars['span'] == 2): ?></span><?php endif; ?>
</td>
</tr>
</table>
</div>

<noscript><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:multimenu_menu.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></noscript>

<!-- End multiMenu <?php echo $this->_tpl_vars['block']['mm']; ?>
 -->