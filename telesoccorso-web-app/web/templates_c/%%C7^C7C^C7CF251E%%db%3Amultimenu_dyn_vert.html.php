<?php /* Smarty version 2.6.5-dev, created on 2006-05-04 10:40:15
         compiled from db:multimenu_dyn_vert.html */ ?>
<?php require_once(SMARTY_DIR . 'core' . DIRECTORY_SEPARATOR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'counter', 'db:multimenu_dyn_vert.html', 51, false),)), $this); ?>
<!-- Start multiMenu <?php echo $this->_tpl_vars['block']['mm']; ?>
 -->

<!--[if gte IE 5.5]>
<iframe id="dropmenuiframe<?php echo $this->_tpl_vars['block']['mm']; ?>
" src="" style="z-index:99;display:none;position:absolute;"></iframe>
<![endif]-->

<style type="text/css">

#dropmenudiv<?php echo $this->_tpl_vars['block']['mm']; ?>
 {
position:absolute;
margin-left:<?php if ($this->_tpl_vars['block']['block_size'] >= 0):  echo $this->_tpl_vars['block']['block_size']+3;  else:  echo $this->_tpl_vars['block']['block_size']-3;  endif; ?>px;
/*_margin-left:<?php if ($this->_tpl_vars['block']['block_size'] >= 0):  echo $this->_tpl_vars['block']['block_size']+3;  else:  echo $this->_tpl_vars['block']['block_size'];  endif; ?>px;*/
html>body margin-left:18px;
<?php if ($this->_tpl_vars['block']['block_size'] >= 0): ?>*> margin-left:<?php echo $this->_tpl_vars['block']['block_size']+2; ?>
px;<?php endif; ?>
margin-top:-23px;
_margin-top:-25px;
border: 1px solid black;
border-bottom-width: 0;
}

#dropmenudiv<?php echo $this->_tpl_vars['block']['mm']; ?>
 a {
width: <?php if ($this->_tpl_vars['block']['block_size'] >= 0):  echo $this->_tpl_vars['block']['block_size'];  else:  echo $this->_tpl_vars['block']['block_size']*-1;  endif; ?>px;
display: block;
text-indent: 12px;
_text-indent: 12px;
border-bottom: 1px solid black;
<?php if ($this->_tpl_vars['block']['block_size'] >= 0): ?>padding: 4px 0;<?php else: ?>padding: 4px 12px;<?php endif; ?>;
_padding: 4px 15px;
background: url('<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/multiMenu/script/images/arrow1.gif');
background-repeat: no-repeat; 
background-position: <?php if ($this->_tpl_vars['block']['block_size'] >= 0): ?>left<?php else: ?>right<?php endif; ?> 50%;
}

#dropmenudiv<?php echo $this->_tpl_vars['block']['mm']; ?>
 a:hover{ /*hover background color*/
}

.menuTop a {
cursor:pointer;
}

</style>

<script language="JavaScript" type="text/javascript">
// Settings variables
var menuwidth<?php echo $this->_tpl_vars['block']['mm']; ?>
='<?php echo $this->_tpl_vars['block']['block_size']; ?>
px' 		//default menu width
var menubgcolor<?php echo $this->_tpl_vars['block']['mm']; ?>
='<?php echo $this->_tpl_vars['block']['submenu_color']; ?>
'  	//menu bgcolor
var disappeardelay<?php echo $this->_tpl_vars['block']['mm']; ?>
='<?php echo $this->_tpl_vars['block']['latency']; ?>
'  	//menu disappear speed onMouseout (in miliseconds)
var hidemenu_onclick<?php echo $this->_tpl_vars['block']['mm']; ?>
='yes' 	//hide menu when user clicks within menu?

//Contents for menu 
		<?php echo smarty_function_counter(array('start' => 0,'print' => false), $this);?>

		<?php $this->assign('count', 1); ?>
<?php if (count($_from = (array)$this->_tpl_vars['block']['contents'])):
    foreach ($_from as $this->_tpl_vars['imenu']):
?>
  <?php if ($this->_tpl_vars['imenu']['submenu'] == 0): ?>
		<?php echo smarty_function_counter(array('assign' => 'menu','print' => false), $this);?>

		<?php $this->assign('count', 1); ?>
var menu<?php echo $this->_tpl_vars['block']['mm'];  echo $this->_tpl_vars['menu']; ?>
=new Array()
  <?php elseif ($this->_tpl_vars['imenu']['submenu'] == 1 || $this->_tpl_vars['imenu']['submenu'] == 2): ?>
	<?php $this->assign("sublink.".($this->_tpl_vars['menu']), 1); ?>	
menu<?php echo $this->_tpl_vars['block']['mm'];  echo $this->_tpl_vars['menu']; ?>
[<?php echo $this->_tpl_vars['count']; ?>
]='<a href="<?php echo $this->_tpl_vars['imenu']['linkurl']; ?>
" <?php echo $this->_tpl_vars['imenu']['target']; ?>
title="<?php echo $this->_tpl_vars['imenu']['alt_title']; ?>
"><?php echo $this->_tpl_vars['imenu']['image'];  echo $this->_tpl_vars['imenu']['title']; ?>
</a>'
	<?php $this->assign('count', $this->_tpl_vars['count']+1); ?>
  <?php endif; ?>
<?php endforeach; unset($_from); endif; ?>
</script>

<script language="JavaScript" type="text/javascript" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/multiMenu/script/02/menu_<?php echo $this->_tpl_vars['block']['mm']; ?>
.js"></script>

<?php echo smarty_function_counter(array('start' => 0,'print' => false), $this);?>

<?php echo smarty_function_counter(array('assign' => 'menu','print' => false), $this);?>

<?php $this->assign('top', '1'); ?>

<table cellspacing="0" cellpadding="0">
<tr>
<td id="mainmenu">
<?php if (count($_from = (array)$this->_tpl_vars['block']['contents'])):
    foreach ($_from as $this->_tpl_vars['imenu']):
?>
<?php if ($this->_tpl_vars['submenu'] == '0'): ?>
<!-- Main link -->
	<?php if ($this->_tpl_vars['imenu']['submenu'] == '1' || $this->_tpl_vars['imenu']['submenu'] == '2'): ?>

		<a style="background-image: url('<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/multiMenu/script/images/arrow<?php if ($this->_tpl_vars['block']['block_size'] >= 0): ?>2<?php else: ?>_left<?php endif; ?>.gif'); background-repeat: no-repeat; background-position: <?php if ($this->_tpl_vars['block']['block_size'] >= 0): ?>right<?php else: ?>left<?php endif; ?> 50%;" class="<?php if ($this->_tpl_vars['top'] == '1'): ?>menuTop<?php else: ?>menuMain<?php endif; ?>" title="<?php echo $this->_tpl_vars['alt_title']; ?>
"
		<?php if ($this->_tpl_vars['linkurl']):  echo $this->_tpl_vars['target']; ?>
href="<?php echo $this->_tpl_vars['linkurl']; ?>
"<?php else: ?>style="cursor:pointer;" 
		onclick="return clickreturnvalue<?php echo $this->_tpl_vars['block']['mm']; ?>
()"<?php endif; ?>
		onmouseover="dropdownmenu<?php echo $this->_tpl_vars['block']['mm']; ?>
(this, event, menu<?php echo $this->_tpl_vars['block']['mm'];  echo $this->_tpl_vars['menu']; ?>
, menuwidth<?php echo $this->_tpl_vars['block']['mm']; ?>
)" 
		onmouseout="delayhidemenu<?php echo $this->_tpl_vars['block']['mm']; ?>
()"><?php if ($this->_tpl_vars['block']['block_size'] < 0): ?>&nbsp;&nbsp;<?php endif; ?>
	<?php else: ?>
		<a class="<?php if ($this->_tpl_vars['top'] == '1'): ?>menuTop<?php else: ?>menuMain<?php endif; ?>" title="<?php echo $this->_tpl_vars['alt_title']; ?>
"
		<?php if ($this->_tpl_vars['linkurl']):  echo $this->_tpl_vars['target']; ?>
href="<?php echo $this->_tpl_vars['linkurl']; ?>
"<?php endif; ?>>
	<?php endif; ?>
		<?php echo $this->_tpl_vars['image']; ?>

		<?php echo $this->_tpl_vars['title']; ?>

		</a>
	<?php $this->assign('top', '0'); ?>
	<?php echo smarty_function_counter(array('assign' => 'menu','print' => false), $this);?>

<?php elseif ($this->_tpl_vars['submenu'] == '3'): ?>
<!-- Note -->
	<div class="menuNote"><?php echo $this->_tpl_vars['link'];  echo $this->_tpl_vars['image'];  echo $this->_tpl_vars['title'];  echo $this->_tpl_vars['a']; ?>
</div>
	<?php $this->assign('top', '1'); ?>
<?php elseif ($this->_tpl_vars['submenu'] == '4'): ?>
<!-- Categorie -->
	<?php $this->assign('top', '1'); ?>
	<div class="menuCat"><h3><?php echo $this->_tpl_vars['link'];  echo $this->_tpl_vars['image'];  echo $this->_tpl_vars['title'];  echo $this->_tpl_vars['a']; ?>
</h3></div>
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
		<a class="<?php if ($this->_tpl_vars['top'] == '1'): ?>menuTop<?php else: ?>menuMain<?php endif; ?>" 
		<?php if ($this->_tpl_vars['linkurl']):  echo $this->_tpl_vars['target']; ?>
href="<?php echo $this->_tpl_vars['linkurl']; ?>
" title="<?php echo $this->_tpl_vars['alt_title']; ?>
"<?php endif; ?>>
		<?php echo $this->_tpl_vars['image']; ?>

		<?php echo $this->_tpl_vars['title']; ?>

		</a>
<?php elseif ($this->_tpl_vars['submenu'] == '3'): ?>
<!-- Note -->
	<div class="menuNote"><?php echo $this->_tpl_vars['link'];  echo $this->_tpl_vars['image'];  echo $this->_tpl_vars['title'];  echo $this->_tpl_vars['a']; ?>
</div>

<?php elseif ($this->_tpl_vars['submenu'] == '4'): ?>
<!-- Categorie -->
	<div class="menuCat"><h3><?php echo $this->_tpl_vars['link'];  echo $this->_tpl_vars['image'];  echo $this->_tpl_vars['title'];  echo $this->_tpl_vars['a']; ?>
</h3</div>
<?php endif; ?>

</td>
</tr>
</table>
<!-- End multiMenu <?php echo $this->_tpl_vars['block']['mm']; ?>
 -->