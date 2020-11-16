<?php /* Smarty version 2.6.5-dev, created on 2006-05-04 10:40:15
         compiled from db:multimenu_droplist.html */ ?>
<?php require_once(SMARTY_DIR . 'core' . DIRECTORY_SEPARATOR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', 'db:multimenu_droplist.html', 18, false),)), $this); ?>
<!-- Start multiMenu <?php echo $this->_tpl_vars['block']['mm']; ?>
 -->
<script type="text/javascript" language="JavaScript">
<!--
function Go(x) {
   location.href = x;
   document.forms[0].reset();
   document.forms[0].elements[0].blur();

}
//-->
</script>

<?php $this->assign('td', -1); ?>
<?php $this->assign('top', 'nocat'); ?>

<table cellspacing="0" cellpadding="0">
<tr>
<td width="<?php if ($this->_tpl_vars['block']['columns'] > 1):  echo smarty_function_math(array('equation' => "x/y",'x' => 100,'y' => $this->_tpl_vars['block']['columns']), $this); else: ?>100<?php endif; ?>%">
<div align="center">
<?php if (count($_from = (array)$this->_tpl_vars['block']['contents'])):
    foreach ($_from as $this->_tpl_vars['imenu']):
?>

<?php if ($this->_tpl_vars['imenu']['submenu'] == 0 && $this->_tpl_vars['top'] == 'nocat'): ?>
	<?php if ($this->_tpl_vars['block']['format'] == 'droplist'): ?>
		<form action="">
		<select size="1" name="multimenu<?php echo $this->_tpl_vars['block']['mm']; ?>
" 
	<?php else: ?>
		<form action="" method="post">
		<select size="<?php echo $this->_tpl_vars['block']['marquee_height']; ?>
" name="multimenu<?php echo $this->_tpl_vars['block']['mm']; ?>
" 
	<?php endif; ?>
			onchange="Go(multimenu<?php echo $this->_tpl_vars['block']['mm']; ?>
.options[multimenu<?php echo $this->_tpl_vars['block']['mm']; ?>
.options.selectedIndex].value)">
		<option value="" selected="selected">
		<!-- Enter default message here -->
		<?php unset($this->_sections['spacer']);
$this->_sections['spacer']['name'] = 'spacer';
$this->_sections['spacer']['loop'] = is_array($_loop=$this->_tpl_vars['block']['block_size']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['spacer']['show'] = true;
$this->_sections['spacer']['max'] = $this->_sections['spacer']['loop'];
$this->_sections['spacer']['step'] = 1;
$this->_sections['spacer']['start'] = $this->_sections['spacer']['step'] > 0 ? 0 : $this->_sections['spacer']['loop']-1;
if ($this->_sections['spacer']['show']) {
    $this->_sections['spacer']['total'] = $this->_sections['spacer']['loop'];
    if ($this->_sections['spacer']['total'] == 0)
        $this->_sections['spacer']['show'] = false;
} else
    $this->_sections['spacer']['total'] = 0;
if ($this->_sections['spacer']['show']):

            for ($this->_sections['spacer']['index'] = $this->_sections['spacer']['start'], $this->_sections['spacer']['iteration'] = 1;
                 $this->_sections['spacer']['iteration'] <= $this->_sections['spacer']['total'];
                 $this->_sections['spacer']['index'] += $this->_sections['spacer']['step'], $this->_sections['spacer']['iteration']++):
$this->_sections['spacer']['rownum'] = $this->_sections['spacer']['iteration'];
$this->_sections['spacer']['index_prev'] = $this->_sections['spacer']['index'] - $this->_sections['spacer']['step'];
$this->_sections['spacer']['index_next'] = $this->_sections['spacer']['index'] + $this->_sections['spacer']['step'];
$this->_sections['spacer']['first']      = ($this->_sections['spacer']['iteration'] == 1);
$this->_sections['spacer']['last']       = ($this->_sections['spacer']['iteration'] == $this->_sections['spacer']['total']);
 echo "&nbsp;";  endfor; endif; ?>
		<!-- End of default message here -->
		</option>
<?php $this->assign('top', '0'); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['imenu']['submenu'] == 4): ?>
	<?php if ($this->_tpl_vars['top'] == '1'): ?>
		</select>
		</form>
	<?php endif; ?>
	<?php $this->assign('td', $this->_tpl_vars['td']+1); ?>
	<?php $this->assign('top', '0'); ?>
	<?php if ($this->_tpl_vars['td'] >= $this->_tpl_vars['block']['columns_limit_drop']): ?>
		</div>
		</td>
		<td width="<?php if ($this->_tpl_vars['block']['columns'] > 1):  echo smarty_function_math(array('equation' => "x/y",'x' => 100,'y' => $this->_tpl_vars['block']['columns']), $this); else: ?>100<?php endif; ?>%">
		<div align="center">
		<?php $this->assign('td', 0); ?>
	<?php endif; ?>

<h3><?php echo $this->_tpl_vars['imenu']['link'];  if ($this->_tpl_vars['imenu']['image']):  echo $this->_tpl_vars['imenu']['image']; ?>
<br /><?php endif;  echo $this->_tpl_vars['imenu']['title'];  echo $this->_tpl_vars['imenu']['a']; ?>
</h3>

	<?php if ($this->_tpl_vars['block']['format'] == 'droplist'): ?>
		<form action="">
		<select size="1" name="multimenu<?php echo $this->_tpl_vars['block']['mm']; ?>
" 
	<?php else: ?>
		<form action="" method="post">
		<select size="<?php echo $this->_tpl_vars['block']['marquee_height']; ?>
" name="multimenu<?php echo $this->_tpl_vars['block']['mm']; ?>
" 
	<?php endif; ?>
			onchange="Go(multimenu<?php echo $this->_tpl_vars['block']['mm']; ?>
.options[multimenu<?php echo $this->_tpl_vars['block']['mm']; ?>
.options.selectedIndex].value)">
		<option value="" selected="selected">
		<!-- Enter default message here -->
		<?php unset($this->_sections['spacer']);
$this->_sections['spacer']['name'] = 'spacer';
$this->_sections['spacer']['loop'] = is_array($_loop=$this->_tpl_vars['block']['block_size']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['spacer']['show'] = true;
$this->_sections['spacer']['max'] = $this->_sections['spacer']['loop'];
$this->_sections['spacer']['step'] = 1;
$this->_sections['spacer']['start'] = $this->_sections['spacer']['step'] > 0 ? 0 : $this->_sections['spacer']['loop']-1;
if ($this->_sections['spacer']['show']) {
    $this->_sections['spacer']['total'] = $this->_sections['spacer']['loop'];
    if ($this->_sections['spacer']['total'] == 0)
        $this->_sections['spacer']['show'] = false;
} else
    $this->_sections['spacer']['total'] = 0;
if ($this->_sections['spacer']['show']):

            for ($this->_sections['spacer']['index'] = $this->_sections['spacer']['start'], $this->_sections['spacer']['iteration'] = 1;
                 $this->_sections['spacer']['iteration'] <= $this->_sections['spacer']['total'];
                 $this->_sections['spacer']['index'] += $this->_sections['spacer']['step'], $this->_sections['spacer']['iteration']++):
$this->_sections['spacer']['rownum'] = $this->_sections['spacer']['iteration'];
$this->_sections['spacer']['index_prev'] = $this->_sections['spacer']['index'] - $this->_sections['spacer']['step'];
$this->_sections['spacer']['index_next'] = $this->_sections['spacer']['index'] + $this->_sections['spacer']['step'];
$this->_sections['spacer']['first']      = ($this->_sections['spacer']['iteration'] == 1);
$this->_sections['spacer']['last']       = ($this->_sections['spacer']['iteration'] == $this->_sections['spacer']['total']);
 echo "&nbsp;";  endfor; endif; ?>
		<!-- End of default message here -->
		</option>
<?php elseif ($this->_tpl_vars['imenu']['submenu'] == 3): ?>
	<?php if ($this->_tpl_vars['top'] == '1'): ?>
		</select>
		</form>
	<?php endif; ?>
		<?php echo $this->_tpl_vars['imenu']['link'];  echo $this->_tpl_vars['imenu']['image'];  echo $this->_tpl_vars['imenu']['title'];  echo $this->_tpl_vars['imenu']['a']; ?>

		<?php $this->assign('top', 'nocat'); ?>
<?php else: ?>
	<?php $this->assign('top', '1'); ?>
	<option value="<?php if ($this->_tpl_vars['imenu']['linkurl']):  echo $this->_tpl_vars['imenu']['linkurl'];  else: ?>#<?php endif; ?>">
	<?php if ($this->_tpl_vars['imenu']['submenu'] != '0'): ?>- - <?php endif;  echo $this->_tpl_vars['imenu']['title']; ?>

	</option>
<?php endif; ?>
<?php endforeach; unset($_from); endif; ?>
	<?php if ($this->_tpl_vars['top'] == '1'): ?>
		</select>
		</form>
	<?php endif; ?>
</div>
</td>
</tr>
</table>
<!-- End multiMenu <?php echo $this->_tpl_vars['block']['mm']; ?>
 -->