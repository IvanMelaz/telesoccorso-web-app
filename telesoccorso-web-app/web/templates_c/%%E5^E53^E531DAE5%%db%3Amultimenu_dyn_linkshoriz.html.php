<?php /* Smarty version 2.6.5-dev, created on 2006-05-04 10:40:15
         compiled from db:multimenu_dyn_linkshoriz.html */ ?>
<?php require_once(SMARTY_DIR . 'core' . DIRECTORY_SEPARATOR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'counter', 'db:multimenu_dyn_linkshoriz.html', 6, false),)), $this); ?>
<!-- Start multiMenu <?php echo $this->_tpl_vars['block']['mm']; ?>
 -->
<table height="<?php echo $this->_tpl_vars['block']['marquee_height']; ?>
" border="1"><tr><td>
<div id="navcontainer">
<ul>

<?php echo smarty_function_counter(array('start' => 0,'print' => false), $this);?>

<?php echo smarty_function_counter(array('assign' => 'count','print' => false), $this);?>

<?php if (count($_from = (array)$this->_tpl_vars['block']['contents'])):
    foreach ($_from as $this->_tpl_vars['imenu']):
?>
<?php if ($this->_tpl_vars['imenu']['submenu'] == 0): ?>
<!-- To display separator id needed
<?php if ($this->_tpl_vars['count'] > 1): ?> | <?php endif; ?>
-->
	<li style='list-style: none; margin: -3px; display: inline; '>
	<a href="<?php echo $this->_tpl_vars['imenu']['linkurl']; ?>
" onMouseover="showit(<?php echo $this->_tpl_vars['count']; ?>
)" <?php echo $this->_tpl_vars['imenu']['target']; ?>
title="<?php echo $this->_tpl_vars['imenu']['alt_title']; ?>
" style='padding: 3px 0.5em; margin-top: 0px; border: 1px outset #778; background: #DDE;'><?php echo $this->_tpl_vars['imenu']['image'];  echo $this->_tpl_vars['imenu']['title']; ?>
</a></li>
<?php echo smarty_function_counter(array('assign' => 'count','print' => false), $this);?>

<?php endif; ?>
<?php endforeach; unset($_from); endif; ?>
</nobr>
</ul>
</td>
</tr>
<td>
<!-- Edit the dimensions of the below, plus background color-->
<ilayer height="32" name="dep1" bgColor="#E6E6FF">
<layer name="dep2" height="32">
</layer>
</ilayer>
<div id="describe" style="height:32px" onMouseover="clear_delayhide()" onMouseout="resetit(event)"></div>


<script language="JavaScript" type="text/javascript">
var submenu=new Array()

//Set submenu contents. Expand as needed. For each content, make sure everything exists on ONE LINE. Otherwise, there will be JS errors.

<?php echo smarty_function_counter(array('start' => 0,'print' => false), $this);?>

<?php if (count($_from = (array)$this->_tpl_vars['block']['contents'])):
    foreach ($_from as $this->_tpl_vars['imenu']):
?>
<?php if ($this->_tpl_vars['imenu']['submenu'] == 0):  echo smarty_function_counter(array('assign' => 'count','print' => false), $this); if ($this->_tpl_vars['count'] > 1): ?>'<?php endif; ?>

	submenu[<?php echo $this->_tpl_vars['count']; ?>
]='<?php endif;  if ($this->_tpl_vars['imenu']['submenu'] == 1 || $this->_tpl_vars['imenu']['submenu'] == 2): ?>[<a href="<?php echo $this->_tpl_vars['imenu']['linkurl']; ?>
 <?php echo $this->_tpl_vars['imenu']['target']; ?>
title="<?php echo $this->_tpl_vars['imenu']['alt_title']; ?>
"><?php echo $this->_tpl_vars['imenu']['image'];  echo $this->_tpl_vars['imenu']['title']; ?>
</a>]<?php endif;  endforeach; unset($_from); endif; ?>'
</script>
<script language="JavaScript" type="text/javascript" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/multiMenu/script/04/menu.js"></script>
</td></tr></table>
<!-- Start multiMenu <?php echo $this->_tpl_vars['block']['mm']; ?>
 -->