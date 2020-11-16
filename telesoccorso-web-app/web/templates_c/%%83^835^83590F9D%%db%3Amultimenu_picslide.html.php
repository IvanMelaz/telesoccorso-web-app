<?php /* Smarty version 2.6.5-dev, created on 2006-05-04 10:40:15
         compiled from db:multimenu_picslide.html */ ?>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/multiMenu/script/start.js"></script>
<script src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/multiMenu/script/dw_core.js" type="text/javascript"></script>
<script src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/multiMenu/script/dw_scroller.js" type="text/javascript"></script>
<script type="text/javascript">
<!--
function initScrollerObjs() {
 scroller1 = new scrollerObj(0,0,<?php echo $this->_tpl_vars['block']['block_size']; ?>
,<?php echo $this->_tpl_vars['block']['marquee_height']; ?>
,"center","holder");

      <?php if (count($_from = (array)$this->_tpl_vars['block']['contents'])):
    foreach ($_from as $this->_tpl_vars['imenu']):
?>
	scroller1.addItem('<?php echo $this->_tpl_vars['imenu']['link'];  echo $this->_tpl_vars['imenu']['image']; ?>
<br /><?php echo $this->_tpl_vars['imenu']['title'];  echo $this->_tpl_vars['a']; ?>
</p>');
 	<?php endforeach; unset($_from); endif; ?>
scroller1.create();
setMouseEvents();
}

addToStart(initScrollerObjs);

//-->
</script>
<div style="height: <?php echo $this->_tpl_vars['block']['marquee_height']; ?>
px; width: <?php echo $this->_tpl_vars['block']['block_size']; ?>
px;">
<div id="holder"></div>
</div>