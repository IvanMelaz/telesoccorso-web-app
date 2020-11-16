<?php /* Smarty version 2.6.5-dev, created on 2006-05-04 10:40:16
         compiled from db:multimenu_dyn_tree.html */ ?>
<!-- Start multiMenu <?php echo $this->_tpl_vars['block']['mm']; ?>
 -->
<!-- thanks to Hans Bauer who permits us to use his treemenu -->
<!-- http://www.h-bauer.de/index.html?treemenu,eng -->
<script type="text/javascript">
var url="<?php echo $this->_tpl_vars['xoops_url']; ?>
"
</script>

<link   rel= "stylesheet"   type="text/css"   href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/multiMenu/script/10/css/treemenu.css" />
<link   rel= "stylesheet"   type="text/css"   href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/multiMenu/script/10/css/config.css" />
<link   rel= "stylesheet"   type="text/css"   href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/multiMenu/script/10/css/menu.css" />
<script type="text/javascript" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/multiMenu/script/10/js/treemenu.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/multiMenu/script/10/js/config.js"></script>

<div align="left">
<table cellspacing="0" cellpadding="0">
<tr>
<td>

<script type="text/javascript">
<!--
tree<?php echo $this->_tpl_vars['block']['mm']; ?>
 = new treemenu('tree<?php echo $this->_tpl_vars['block']['mm']; ?>
', true, true, true, false);

<?php $this->assign('put_tree', 0); ?>
<?php if (count($_from = (array)$this->_tpl_vars['block']['contents'])):
    foreach ($_from as $this->_tpl_vars['imenu']):
?>
<?php if ($this->_tpl_vars['imenu']['submenu'] == 0 && $this->_tpl_vars['put_tree'] == 0): ?>
   tree<?php echo $this->_tpl_vars['block']['mm']; ?>
.add(1,'<?php echo $this->_tpl_vars['imenu']['title']; ?>
', '<?php echo $this->_tpl_vars['imenu']['target_context']; ?>
','<?php echo $this->_tpl_vars['imenu']['linkurl']; ?>
','<?php echo $this->_tpl_vars['imenu']['alt_title']; ?>
', '',     '');
   <?php $this->assign('put_tree', 1); ?>
	<?php elseif ($this->_tpl_vars['imenu']['submenu'] == 0 && $this->_tpl_vars['put_tree'] == 1): ?>
    tree<?php echo $this->_tpl_vars['block']['mm']; ?>
.add(0,' <?php echo $this->_tpl_vars['imenu']['title']; ?>
','<?php echo $this->_tpl_vars['imenu']['target_context']; ?>
','<?php echo $this->_tpl_vars['imenu']['linkurl']; ?>
','<?php echo $this->_tpl_vars['imenu']['alt_title']; ?>
',  '', '' );
	<?php elseif ($this->_tpl_vars['imenu']['submenu'] == 1 || $this->_tpl_vars['imenu']['submenu'] == 2): ?>
   tree<?php echo $this->_tpl_vars['block']['mm']; ?>
.add(0,'  <?php echo $this->_tpl_vars['imenu']['title']; ?>
','<?php echo $this->_tpl_vars['imenu']['target_context']; ?>
','<?php echo $this->_tpl_vars['imenu']['linkurl']; ?>
','<?php echo $this->_tpl_vars['imenu']['alt_title']; ?>
', '', '');
	<?php elseif ($this->_tpl_vars['imenu']['submenu'] == 3 || $this->_tpl_vars['imenu']['submenu'] == 4): ?>
    <?php $this->assign('put_tree', 0); ?>
<?php endif; ?>
<?php endforeach; unset($_from); endif; ?>
<?php $this->assign('ul_sec', 0); ?>
document.write(tree<?php echo $this->_tpl_vars['block']['mm']; ?>
);
//-->
</script>

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