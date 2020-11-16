<?php /* Smarty version 2.6.5-dev, created on 2006-05-04 10:40:16
         compiled from db:multimenu_dyn_context2.html */ ?>
<?php require_once(SMARTY_DIR . 'core' . DIRECTORY_SEPARATOR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'counter', 'db:multimenu_dyn_context2.html', 9, false),)), $this); ?>
<!-- Start multiMenu <?php echo $this->_tpl_vars['block']['mm']; ?>
 -->

<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/multiMenu/script/06/style/mm_context2.css" title="Context2" />
<script type="text/javascript" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/multiMenu/script/start.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/multiMenu/script/06/jsdomenuc.js"></script>


<style type="text/css">
<?php echo smarty_function_counter(array('start' => 0,'print' => false), $this);?>

<?php $this->assign('count', 1); ?>
<?php if (count($_from = (array)$this->_tpl_vars['block']['contents'])):
    foreach ($_from as $this->_tpl_vars['imenu']):
?>
<?php if ($this->_tpl_vars['imenu']['submenu'] == 0 || $this->_tpl_vars['imenu']['submenu'] == 3 || $this->_tpl_vars['imenu']['submenu'] == 4): ?>
<?php echo smarty_function_counter(array('assign' => 'menu','print' => false), $this);?>

<?php if ($this->_tpl_vars['imenu']['image']): ?>
<?php $this->assign('count', $this->_tpl_vars['count']+1); ?>

.iconpc<?php echo $this->_tpl_vars['block']['mm'];  echo $this->_tpl_vars['menu']; ?>
 {
	background-image: url(<?php echo $this->_tpl_vars['imenu']['imageurl']; ?>
);
	background-repeat: no-repeat; /* Do not alter this line! */
	height: 16px;
	left: 4px;
	position: absolute; /* Do not alter this line! */
	width: 16px; 
}

<?php endif; ?>
<?php endif; ?>
<?php endforeach; unset($_from); endif; ?>

<?php echo smarty_function_counter(array('start' => 0,'print' => false), $this);?>

<?php $this->assign('count', 1); ?>
<?php $this->assign('count2', 1); ?>
<?php if (count($_from = (array)$this->_tpl_vars['block']['contents'])):
    foreach ($_from as $this->_tpl_vars['imenu']):
?>
<?php if ($this->_tpl_vars['imenu']['submenu'] == 0 || $this->_tpl_vars['imenu']['submenu'] == 3 || $this->_tpl_vars['imenu']['submenu'] == 4): ?>
<?php echo smarty_function_counter(array('assign' => 'menu','print' => false), $this);?>

<?php $this->assign('count', 1); ?>
<?php elseif ($this->_tpl_vars['imenu']['submenu'] == 1 || $this->_tpl_vars['imenu']['submenu'] == 2): ?>
<?php if ($this->_tpl_vars['count'] == 1): ?>
<?php $this->assign('count2', $this->_tpl_vars['count2']+1); ?>
<?php endif; ?>
<?php if ($this->_tpl_vars['imenu']['image']): ?>
<?php $this->assign("sublink.".($this->_tpl_vars['menu']), 1); ?>
.iconsc<?php echo $this->_tpl_vars['block']['mm'];  echo $this->_tpl_vars['menu'];  echo $this->_tpl_vars['count']; ?>
 {
	background-image: url(<?php echo $this->_tpl_vars['imenu']['imageurl']; ?>
);
	background-repeat: no-repeat; /* Do not alter this line! */
	height: 16px;
	left: 4px;
	position: absolute; /* Do not alter this line! */
	width: 16px;
}
<?php endif; ?>
<?php $this->assign('count', $this->_tpl_vars['count']+1); ?>
<?php endif; ?>
<?php endforeach; unset($_from); endif; ?>

</style>

<!-- Start multiMenu <?php echo $this->_tpl_vars['block']['mm']; ?>
 -->
<script language="JavaScript" type="text/javascript">
function createjsDOMenuc() {
cursorMenuc<?php echo $this->_tpl_vars['block']['mm']; ?>
 = new jsDOMenuc(<?php echo $this->_tpl_vars['block']['block_size']; ?>
);
with (cursorMenuc<?php echo $this->_tpl_vars['block']['mm']; ?>
) {
<?php echo smarty_function_counter(array('start' => 0,'print' => false), $this);?>

<?php $this->assign('count', 1); ?>
<?php if (count($_from = (array)$this->_tpl_vars['block']['contents'])):
    foreach ($_from as $this->_tpl_vars['imenu']):
?>
<?php if ($this->_tpl_vars['imenu']['submenu'] == 0 || $this->_tpl_vars['imenu']['submenu'] == 3 || $this->_tpl_vars['imenu']['submenu'] == 4): ?>
<?php echo smarty_function_counter(array('assign' => 'menu','print' => false), $this);?>

<?php if ($this->_tpl_vars['imenu']['submenu'] == 3): ?>

<?php if ($this->_tpl_vars['imenu']['linkurl']): ?>
addMenuItem(new menuItem3("<?php echo $this->_tpl_vars['imenu']['title']; ?>
", "pc<?php echo $this->_tpl_vars['block']['mm'];  echo $this->_tpl_vars['menu']; ?>
", "code:window.open('<?php echo $this->_tpl_vars['imenu']['linkurl']; ?>
','<?php echo $this->_tpl_vars['imenu']['target_context']; ?>
');"));
<?php else: ?>
addMenuItem(new menuItem3b("<?php echo $this->_tpl_vars['imenu']['title']; ?>
", "pc<?php echo $this->_tpl_vars['block']['mm'];  echo $this->_tpl_vars['menu']; ?>
"));
<?php endif; ?>

<?php elseif ($this->_tpl_vars['imenu']['submenu'] == 4): ?>
<?php if ($this->_tpl_vars['imenu']['linkurl']): ?>
addMenuItem(new menuItem4("<?php echo $this->_tpl_vars['imenu']['title']; ?>
", "pc<?php echo $this->_tpl_vars['block']['mm'];  echo $this->_tpl_vars['menu']; ?>
", "code:window.open('<?php echo $this->_tpl_vars['imenu']['linkurl']; ?>
','<?php echo $this->_tpl_vars['imenu']['target_context']; ?>
');"));
<?php else: ?>
addMenuItem(new menuItem4b("<?php echo $this->_tpl_vars['imenu']['title']; ?>
", "pc<?php echo $this->_tpl_vars['block']['mm'];  echo $this->_tpl_vars['menu']; ?>
"));
<?php endif; ?>

<?php elseif ($this->_tpl_vars['imenu']['title'] == "{sep}"): ?>addMenuItem(new menuItem("<hr />"));

<?php else: ?>
<?php if ($this->_tpl_vars['imenu']['linkurl']): ?>
addMenuItem(new menuItem("<?php echo $this->_tpl_vars['imenu']['title']; ?>
", "pc<?php echo $this->_tpl_vars['block']['mm'];  echo $this->_tpl_vars['menu']; ?>
", "code:window.open('<?php echo $this->_tpl_vars['imenu']['linkurl']; ?>
','<?php echo $this->_tpl_vars['imenu']['target_context']; ?>
');"));
<?php else: ?>
addMenuItem(new menuItemb("<?php echo $this->_tpl_vars['imenu']['title']; ?>
", "pc<?php echo $this->_tpl_vars['block']['mm'];  echo $this->_tpl_vars['menu']; ?>
"));
<?php endif; ?>
<?php endif; ?>

<?php endif; ?>
<?php endforeach; unset($_from); endif; ?>
}
<?php echo smarty_function_counter(array('start' => 0,'print' => false), $this);?>

<?php $this->assign('count', 1); ?>
<?php $this->assign('count2', 1); ?>
<?php $this->assign('is_sub', 0); ?>

<?php if (count($_from = (array)$this->_tpl_vars['block']['contents'])):
    foreach ($_from as $this->_tpl_vars['imenu']):
?>
<?php if ($this->_tpl_vars['imenu']['submenu'] == 0 || $this->_tpl_vars['imenu']['submenu'] == 3 || $this->_tpl_vars['imenu']['submenu'] == 4): ?>
<?php if ($this->_tpl_vars['is_sub'] == 1): ?>}
<?php endif; ?> 
<?php $this->assign('is_sub', 0); ?>
<?php echo smarty_function_counter(array('assign' => 'menu','print' => false), $this);?>

<?php $this->assign('count', 1); ?>
<?php elseif ($this->_tpl_vars['imenu']['submenu'] == 1 || $this->_tpl_vars['imenu']['submenu'] == 2): ?>
<?php if ($this->_tpl_vars['count'] == 1): ?>
cursorMenuc<?php echo $this->_tpl_vars['block']['mm']; ?>
_<?php echo $this->_tpl_vars['count2']; ?>
 = new jsDOMenuc(<?php echo $this->_tpl_vars['block']['block_size']; ?>
); 
with (cursorMenuc<?php echo $this->_tpl_vars['block']['mm']; ?>
_<?php echo $this->_tpl_vars['count2']; ?>
) { 
<?php $this->assign('count2', $this->_tpl_vars['count2']+1); ?>
<?php endif; ?>
<?php $this->assign("sublink.".($this->_tpl_vars['menu']), 1); ?>
<?php if ($this->_tpl_vars['imenu']['linkurl']): ?>
addMenuItem(new menuItem("<?php echo $this->_tpl_vars['imenu']['title']; ?>
", "sc<?php echo $this->_tpl_vars['block']['mm'];  echo $this->_tpl_vars['menu'];  echo $this->_tpl_vars['count']; ?>
", "code:window.open('<?php echo $this->_tpl_vars['imenu']['linkurl']; ?>
','<?php echo $this->_tpl_vars['imenu']['target_context']; ?>
');"));
<?php else: ?>
addMenuItem(new menuItemb("<?php echo $this->_tpl_vars['imenu']['title']; ?>
", "sc<?php echo $this->_tpl_vars['block']['mm'];  echo $this->_tpl_vars['menu'];  echo $this->_tpl_vars['count']; ?>
"));
<?php endif; ?>
<?php $this->assign('count', $this->_tpl_vars['count']+1); ?>
<?php $this->assign('is_sub', 1); ?>
<?php endif; ?>
<?php endforeach; unset($_from); endif; ?>
<?php if ($this->_tpl_vars['imenu']['submenu'] == 1 || $this->_tpl_vars['imenu']['submenu'] == 2): ?>}<?php endif; ?> 

<?php echo smarty_function_counter(array('start' => 0,'print' => false), $this);?>

<?php $this->assign('count', 1); ?>
<?php $this->assign('count2', 1); ?>

<?php if (count($_from = (array)$this->_tpl_vars['block']['contents'])):
    foreach ($_from as $this->_tpl_vars['imenu']):
?>
<?php if ($this->_tpl_vars['imenu']['submenu'] == 0 || $this->_tpl_vars['imenu']['submenu'] == 3 || $this->_tpl_vars['imenu']['submenu'] == 4): ?>
<?php echo smarty_function_counter(array('assign' => 'menu','print' => false), $this);?>

<?php $this->assign('count', 1); ?>
<?php elseif ($this->_tpl_vars['imenu']['submenu'] == 1 || $this->_tpl_vars['imenu']['submenu'] == 2): ?>
<?php if ($this->_tpl_vars['count'] == 1): ?>
<?php $this->assign('count2', $this->_tpl_vars['count2']+1); ?>
<?php endif; ?>
<?php $this->assign("sublink.".($this->_tpl_vars['menu']), 1); ?>	
<?php if ($this->_tpl_vars['count'] == 1): ?> 
cursorMenuc<?php echo $this->_tpl_vars['block']['mm']; ?>
.items.pc<?php echo $this->_tpl_vars['block']['mm'];  echo $this->_tpl_vars['menu']; ?>
.setSubMenu(cursorMenuc<?php echo $this->_tpl_vars['block']['mm']; ?>
_<?php echo $this->_tpl_vars['count2']-1; ?>
);
<?php endif; ?>
<?php $this->assign('count', $this->_tpl_vars['count']+1); ?>
<?php endif; ?>
<?php endforeach; unset($_from); endif; ?>

<?php echo smarty_function_counter(array('start' => 0,'print' => false), $this);?>

<?php $this->assign('count', 1); ?>
<?php if (count($_from = (array)$this->_tpl_vars['block']['contents'])):
    foreach ($_from as $this->_tpl_vars['imenu']):
?>
<?php if ($this->_tpl_vars['imenu']['submenu'] == 0 || $this->_tpl_vars['imenu']['submenu'] == 3 || $this->_tpl_vars['imenu']['submenu'] == 4): ?>
<?php echo smarty_function_counter(array('assign' => 'menu','print' => false), $this);?>

<?php if ($this->_tpl_vars['imenu']['image']): ?>
cursorMenuc<?php echo $this->_tpl_vars['block']['mm']; ?>
.items.pc<?php echo $this->_tpl_vars['block']['mm'];  echo $this->_tpl_vars['menu']; ?>
.showIcon("iconpc<?php echo $this->_tpl_vars['block']['mm'];  echo $this->_tpl_vars['menu']; ?>
", "iconpc<?php echo $this->_tpl_vars['block']['mm'];  echo $this->_tpl_vars['menu']; ?>
");
<?php $this->assign('count', $this->_tpl_vars['count']+1); ?>
<?php endif; ?>
<?php endif; ?>
<?php endforeach; unset($_from); endif; ?>

<?php echo smarty_function_counter(array('start' => 0,'print' => false), $this);?>

<?php $this->assign('count', 1); ?>
<?php $this->assign('count2', 1); ?>
<?php if (count($_from = (array)$this->_tpl_vars['block']['contents'])):
    foreach ($_from as $this->_tpl_vars['imenu']):
?>
<?php if ($this->_tpl_vars['imenu']['submenu'] == 0 || $this->_tpl_vars['imenu']['submenu'] == 3 || $this->_tpl_vars['imenu']['submenu'] == 4): ?>
<?php echo smarty_function_counter(array('assign' => 'menu','print' => false), $this);?>

<?php $this->assign('count', 1); ?>
<?php elseif ($this->_tpl_vars['imenu']['submenu'] == 1 || $this->_tpl_vars['imenu']['submenu'] == 2): ?>
<?php if ($this->_tpl_vars['count'] == 1): ?>
<?php $this->assign('count2', $this->_tpl_vars['count2']+1); ?>
<?php endif; ?>
<?php $this->assign("sublink.".($this->_tpl_vars['menu']), 1); ?>	
<?php if ($this->_tpl_vars['imenu']['image']): ?>
cursorMenuc<?php echo $this->_tpl_vars['block']['mm']; ?>
_<?php echo $this->_tpl_vars['count2']-1; ?>
.items.sc<?php echo $this->_tpl_vars['block']['mm'];  echo $this->_tpl_vars['menu'];  echo $this->_tpl_vars['count']; ?>
.showIcon("iconsc<?php echo $this->_tpl_vars['block']['mm'];  echo $this->_tpl_vars['menu'];  echo $this->_tpl_vars['count']; ?>
", "iconsc<?php echo $this->_tpl_vars['block']['mm'];  echo $this->_tpl_vars['menu'];  echo $this->_tpl_vars['count']; ?>
");
<?php endif;  $this->assign('count', $this->_tpl_vars['count']+1); ?>
<?php endif; ?>
<?php endforeach; unset($_from); endif; ?>

setPopUpMenuc(cursorMenuc<?php echo $this->_tpl_vars['block']['mm']; ?>
);
activatePopUpMenuByc(1, 2);
}
</script>
<!-- End multiMenu <?php echo $this->_tpl_vars['block']['mm']; ?>
 -->