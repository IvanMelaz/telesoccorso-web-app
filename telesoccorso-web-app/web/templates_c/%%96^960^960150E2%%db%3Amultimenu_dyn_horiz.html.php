<?php /* Smarty version 2.6.5-dev, created on 2006-05-04 10:40:15
         compiled from db:multimenu_dyn_horiz.html */ ?>
<?php require_once(SMARTY_DIR . 'core' . DIRECTORY_SEPARATOR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'counter', 'db:multimenu_dyn_horiz.html', 55, false),)), $this); ?>
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
margin-left:18px;
margin-top:0px;
border: 1px solid black;
border-bottom-width: 0;
background: #021946;
}

#dropmenudiv<?php echo $this->_tpl_vars['block']['mm']; ?>
 a{
width: <?php echo $this->_tpl_vars['block']['block_size']; ?>
px;
display: block;
text-indent: 12px;
border-bottom: 1px solid black;
padding: 4px 0;
background: url('<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/multiMenu/script/images/arrow2.gif');
background-repeat: no-repeat; 
background-position: left 50%;
}

#dropmenudiv<?php echo $this->_tpl_vars['block']['mm']; ?>
 a:hover{ /*hover background color*/
background: #021946;
}


li.multimenu {
list-style: none; 
margin: -3px; 
_margin: 0; 
display: inline;
}

li.multimenu a {
cursor:pointer;
padding: 3px 0.5em; 
margin-top: 0px; 
border: 0px outset #778; 
background: #01102d;
}

#navcontainer ul {text-align:center;}

</style>

<script language="JavaScript" type="text/javascript">
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

var menuwidth<?php echo $this->_tpl_vars['block']['mm']; ?>
='<?php echo $this->_tpl_vars['block']['block_size']; ?>
' 		//default menu width
var menubgcolor<?php echo $this->_tpl_vars['block']['mm']; ?>
='<?php echo $this->_tpl_vars['block']['submenu_color']; ?>
'	//menu bgcolor
var disappeardelay<?php echo $this->_tpl_vars['block']['mm']; ?>
='<?php echo $this->_tpl_vars['block']['latency']; ?>
'  	//menu disappear speed onMouseout (in miliseconds)
var hidemenu_onclick<?php echo $this->_tpl_vars['block']['mm']; ?>
='yes' 	//hide menu when user clicks within menu?
</script>

<script language="JavaScript" type="text/javascript" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/multiMenu/script/03/menu_<?php echo $this->_tpl_vars['block']['mm']; ?>
.js"></script>

<?php echo smarty_function_counter(array('start' => 0,'print' => false), $this);?>

<?php echo smarty_function_counter(array('assign' => 'menu','print' => false), $this);?>

<?php $this->assign('ul', 0); ?>
<?php $this->assign('firstlink', 0); ?>

<?php if (count($_from = (array)$this->_tpl_vars['block']['contents'])):
    foreach ($_from as $this->_tpl_vars['imenu']):
?>
<?php if ($this->_tpl_vars['submenu'] == '0'): ?>

<?php if ($this->_tpl_vars['ul'] == 0): ?><div id="navcontainer"><ul><?php $this->assign('ul', 1);  endif; ?>
<!-- Main link -->
	<?php if ($this->_tpl_vars['imenu']['submenu'] == '1' || $this->_tpl_vars['imenu']['submenu'] == '2'): ?>
	<!-- uncomment the line below to display bullet between links -->
<!-- 	<?php $this->assign('firstlink', $this->_tpl_vars['firstlink']+1);  if ($this->_tpl_vars['firstlink'] > 1): ?><font color="#006699">&#149;</font><?php endif; ?> -->
	<!-- end bullet -->
		<li class="multimenu">
		<a title="<?php echo $this->_tpl_vars['alt_title']; ?>
"
		<?php if ($this->_tpl_vars['linkurl']):  echo $this->_tpl_vars['target']; ?>
href="<?php echo $this->_tpl_vars['linkurl']; ?>
"<?php else: ?>style="cursor:pointer;" onClick="return clickreturnvalue<?php echo $this->_tpl_vars['block']['mm']; ?>
()"<?php endif; ?>

 		onMouseover="dropdownmenu<?php echo $this->_tpl_vars['block']['mm']; ?>
(this, event, menu<?php echo $this->_tpl_vars['block']['mm'];  echo $this->_tpl_vars['menu']; ?>
, menuwidth<?php echo $this->_tpl_vars['block']['mm']; ?>
)" 
		onMouseout="delayhidemenu<?php echo $this->_tpl_vars['block']['mm']; ?>
()">
		<img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/multiMenu/script/images/arrow1.gif" alt="<?php echo $this->_tpl_vars['alt_title']; ?>
" />
	<?php else: ?>
	<?php $this->assign('firstlink', $this->_tpl_vars['firstlink']+1); ?>
		<!-- uncomment the line below to display bullet between links -->
<!-- 	<?php if ($this->_tpl_vars['firstlink'] > 1): ?><font color="#006699">&#149;</font><?php endif; ?> -->
		<!-- end bullet -->
		<li class="multimenu">
		<a title="<?php echo $this->_tpl_vars['alt_title']; ?>
"
		<?php if ($this->_tpl_vars['linkurl']):  echo $this->_tpl_vars['target']; ?>
href="<?php echo $this->_tpl_vars['linkurl']; ?>
"<?php endif; ?>>
	<?php endif; ?>
		<?php echo $this->_tpl_vars['image']; ?>

		<?php echo $this->_tpl_vars['title']; ?>

		</a>
		</li>
	<?php echo smarty_function_counter(array('assign' => 'menu','print' => false), $this);?>


<?php elseif ($this->_tpl_vars['submenu'] == '3'): ?>
<?php if ($this->_tpl_vars['ul'] == 1): ?></ul></div><?php $this->assign('ul', 0);  endif; ?>
<!-- Note -->
	<div class="menuNote"><?php echo $this->_tpl_vars['link'];  echo $this->_tpl_vars['image'];  echo $this->_tpl_vars['title'];  echo $this->_tpl_vars['a']; ?>
</div>
<?php elseif ($this->_tpl_vars['submenu'] == '4'): ?>
<!-- Categorie -->
	<?php if ($this->_tpl_vars['ul'] == 1): ?></ul></div><?php $this->assign('ul', 0);  endif; ?>
	<div class="menuCat"><h3><?php echo $this->_tpl_vars['link'];  echo $this->_tpl_vars['image'];  echo $this->_tpl_vars['title']; ?>
</h3</div>
<?php endif; ?>

<?php $this->assign('submenu', $this->_tpl_vars['imenu']['submenu']); ?>
<?php $this->assign('linkurl', $this->_tpl_vars['imenu']['linkurl']); ?>
<?php $this->assign('link', $this->_tpl_vars['imenu']['link']); ?>
<?php $this->assign('counter', $this->_tpl_vars['menu']); ?>
<?php $this->assign('target', $this->_tpl_vars['imenu']['target']); ?>
<?php $this->assign('alt_title', $this->_tpl_vars['imenu']['alt_title']); ?>
<?php $this->assign('image', $this->_tpl_vars['imenu']['image']); ?>
<?php $this->assign('title', $this->_tpl_vars['imenu']['title']); ?>
<?php $this->assign('a', $this->_tpl_vars['imenu']['a']); ?>
<?php endforeach; unset($_from); endif; ?>

<?php if ($this->_tpl_vars['submenu'] == '0'): ?>
<?php if ($this->_tpl_vars['ul'] == 0): ?><div id="navcontainer"><ul><?php endif; ?>
<!-- Main link -->
		<li class="multimenu">
		<a <?php if ($this->_tpl_vars['linkurl']):  echo $this->_tpl_vars['target']; ?>
href="<?php echo $this->_tpl_vars['linkurl']; ?>
"<?php endif; ?> title="<?php echo $this->_tpl_vars['alt_title']; ?>
">
		<?php echo $this->_tpl_vars['image']; ?>

		<?php echo $this->_tpl_vars['title']; ?>

		</a>
		</li>
<?php elseif ($this->_tpl_vars['submenu'] == '3'): ?>
<?php if ($this->_tpl_vars['ul'] == 1): ?></ul></div><?php endif; ?>
<!-- Note -->
	<div class="menuNote"><?php echo $this->_tpl_vars['link'];  echo $this->_tpl_vars['image'];  echo $this->_tpl_vars['title'];  echo $this->_tpl_vars['a']; ?>
</div>

<?php elseif ($this->_tpl_vars['submenu'] == '4'): ?>
<?php if ($this->_tpl_vars['ul'] == 1): ?></ul></div><?php endif; ?>
<!-- Categorie -->
	<div class="menuCat"><h3><?php echo $this->_tpl_vars['link'];  echo $this->_tpl_vars['image'];  echo $this->_tpl_vars['title'];  echo $this->_tpl_vars['a']; ?>
</h3</div>
<?php endif; ?>
<?php if ($this->_tpl_vars['ul'] == 1): ?></ul></div><?php endif; ?>
<!-- End multiMenu <?php echo $this->_tpl_vars['block']['mm']; ?>
 -->