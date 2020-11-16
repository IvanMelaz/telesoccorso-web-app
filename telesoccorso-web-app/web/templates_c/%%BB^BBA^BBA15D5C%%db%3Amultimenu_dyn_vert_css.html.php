<?php /* Smarty version 2.6.5-dev, created on 2006-05-04 10:40:16
         compiled from db:multimenu_dyn_vert_css.html */ ?>
<!-- Thanks to http://www.stunicholls.myby.co.uk/ for this pure css menuvcss ! -->

<table><tr><td>

<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/multiMenu/script/09/flyout.css" />
<!--[if lte IE 6]>
<link rel="stylesheet" media="all" type="text/css" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/multiMenu/script/09/flyout_ie.css" />

<style type="text/css">

.menuvcss ul li a:hover ul {left:<?php if ($this->_tpl_vars['block']['block_size'] > 0):  echo $this->_tpl_vars['block']['block_size']-8; ?>
px;<?php else:  echo $this->_tpl_vars['block']['block_size']; ?>
px;<?php endif; ?> width:<?php if ($this->_tpl_vars['block']['block_size'] > 0):  echo $this->_tpl_vars['block']['block_size']; ?>
px;<?php else:  echo $this->_tpl_vars['block']['block_size']*-1; ?>
px;<?php endif; ?>}
.menuvcss ul li a:hover ul li a:hover ul {left:<?php echo $this->_tpl_vars['block']['block_size']; ?>
px;}
.menuvcss {height:10px;}

</style>


<![endif]-->

<style type="text/css">
*>.menuvcss {width:<?php if ($this->_tpl_vars['block']['block_size'] > 0):  echo $this->_tpl_vars['block']['block_size']; ?>
px;<?php else:  echo $this->_tpl_vars['block']['block_size']*-1; ?>
px;<?php endif; ?>}
*>.menuvcss ul li a, .menuvcss ul li a:visited {width:<?php if ($this->_tpl_vars['block']['block_size'] > 0):  echo $this->_tpl_vars['block']['block_size']-1; ?>
px;<?php else:  echo $this->_tpl_vars['block']['block_size']*-1; ?>
px;<?php endif; ?>}
*>.menuvcss ul li:hover ul {left:<?php if ($this->_tpl_vars['block']['block_size'] > 0):  echo $this->_tpl_vars['block']['block_size']-1; ?>
px;<?php else:  echo $this->_tpl_vars['block']['block_size']-4; ?>
px;<?php endif; ?> width:<?php if ($this->_tpl_vars['block']['block_size'] > 0):  echo $this->_tpl_vars['block']['block_size']; ?>
px;<?php else:  echo $this->_tpl_vars['block']['block_size']*-1; ?>
px;<?php endif; ?>}
*>.menuvcss ul li a:hover ul {left:<?php echo $this->_tpl_vars['block']['block_size']; ?>
px; width:<?php if ($this->_tpl_vars['block']['block_size'] > 0):  echo $this->_tpl_vars['block']['block_size']; ?>
px;<?php else:  echo $this->_tpl_vars['block']['block_size']*-1; ?>
px;<?php endif; ?>}
*>.menuvcss ul li:hover ul li:hover ul {left:<?php echo $this->_tpl_vars['block']['block_size']; ?>
px;}


</style>

<div class="menuvcss">
<!-- Start multiMenu <?php echo $this->_tpl_vars['block']['mm']; ?>
 -->
<?php $this->assign('ul_main', 0); ?>
<?php $this->assign('ul_sec', 0); ?>

<?php if (count($_from = (array)$this->_tpl_vars['block']['contents'])):
    foreach ($_from as $this->_tpl_vars['imenu']):
?>
<?php if ($this->_tpl_vars['imenu']['submenu'] == 0): ?>
<?php if ($this->_tpl_vars['ul_sec'] == 1): ?></ul><?php $this->assign('ul_sec', 0);  endif; ?>
	<?php if ($this->_tpl_vars['ul_sec'] == 1):  $this->assign('ul_sec', 0);  endif; ?>
		<?php if ($this->_tpl_vars['ul_main'] == 1): ?>
			<!--[if lte IE 6]>
			</td></tr></table>
			</a>
			<![endif]-->
			</li>
			</ul>
			<?php $this->assign('ul_main', 0); ?>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['ul_main'] == 0): ?>
			<?php $this->assign('ul_main', 1); ?>
		<?php endif; ?>

		<ul>
		<li>
		<a class="hide" href="<?php echo $this->_tpl_vars['imenu']['linkurl']; ?>
" title="<?php echo $this->_tpl_vars['imenu']['alt_title']; ?>
"><?php echo $this->_tpl_vars['imenu']['image']; ?>
&nbsp;<?php echo $this->_tpl_vars['imenu']['title']; ?>
</a>
		<!--[if lte IE 6]>
		<a href="<?php echo $this->_tpl_vars['imenu']['linkurl']; ?>
" title="<?php echo $this->_tpl_vars['imenu']['alt_title']; ?>
"><?php echo $this->_tpl_vars['imenu']['image']; ?>
&nbsp;<?php echo $this->_tpl_vars['imenu']['title']; ?>

		<table><tr><td>
		<![endif]-->

<?php elseif ($this->_tpl_vars['imenu']['submenu'] == 1 || $this->_tpl_vars['imenu']['submenu'] == 2): ?>
		<?php if ($this->_tpl_vars['ul_sec'] == 0): ?><ul><?php $this->assign('ul_sec', 1);  endif; ?>
		<li><a href="<?php echo $this->_tpl_vars['imenu']['linkurl']; ?>
" title="<?php echo $this->_tpl_vars['imenu']['alt_title']; ?>
"><?php echo $this->_tpl_vars['imenu']['image']; ?>
&nbsp;<?php echo $this->_tpl_vars['imenu']['title']; ?>
</a></li>

<?php elseif ($this->_tpl_vars['imenu']['submenu'] == 3): ?>
		<?php if ($this->_tpl_vars['ul_sec'] == 0): ?><ul><?php $this->assign('ul_sec', 1);  endif; ?>
		<div><li><a class="note" href="<?php echo $this->_tpl_vars['imenu']['linkurl']; ?>
" title="<?php echo $this->_tpl_vars['imenu']['alt_title']; ?>
"><?php echo $this->_tpl_vars['imenu']['image']; ?>
&nbsp;<?php echo $this->_tpl_vars['imenu']['title']; ?>
</a></li></div>

<?php elseif ($this->_tpl_vars['imenu']['submenu'] == 4): ?>
		<?php if ($this->_tpl_vars['ul_sec'] == 0): ?><ul><?php $this->assign('ul_sec', 1);  endif; ?>
		<div><li><a class="cat" href="<?php echo $this->_tpl_vars['imenu']['linkurl']; ?>
" title="<?php echo $this->_tpl_vars['imenu']['alt_title']; ?>
"><?php echo $this->_tpl_vars['imenu']['image']; ?>
&nbsp;<?php echo $this->_tpl_vars['imenu']['title']; ?>
</a></li></div>

<?php endif; ?>
<?php endforeach; unset($_from); endif; ?>

	<?php if ($this->_tpl_vars['ul_main'] == 1 || $this->_tpl_vars['ul_sec'] == 1): ?>
	<!--[if lte IE 6]>
	</td></tr></table>
	</a>
	<![endif]-->
	</li>
	</ul>
	<?php endif; ?>

</td></tr></table> 
<!-- End multiMenu <?php echo $this->_tpl_vars['block']['mm']; ?>
 -->
</div>