<?php /* Smarty version 2.6.5-dev, created on 2007-01-19 14:43:23
         compiled from db:mydownloads_index.html */ ?>
<br /><br />

<p align="center">
    <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/mydownloads/index.php"><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/mydownloads/images/logo-en.gif" alt="" /></a>
</p>

<br /><br /><br />
<?php if (count ( $this->_tpl_vars['categories'] ) > 0): ?>
<hr noshade color=#000000">
<table border='0' cellspacing='5' cellpadding='0' align="center">
  <tr>
  <!-- Start category loop -->
  <?php if (count($_from = (array)$this->_tpl_vars['categories'])):
    foreach ($_from as $this->_tpl_vars['category']):
?>

    <td valign="top" >
    <?php if ($this->_tpl_vars['category']['image'] != ""): ?>
    <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/mydownloads/viewcat.php?cid=<?php echo $this->_tpl_vars['category']['id']; ?>
"><img src="<?php echo $this->_tpl_vars['category']['image']; ?>
" height="50" border="0" alt="" /></a>
    <?php endif; ?>
    </td>
    <td valign="top" width="40%"><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/mydownloads/viewcat.php?cid=<?php echo $this->_tpl_vars['category']['id']; ?>
"><b><?php echo $this->_tpl_vars['category']['title']; ?>
</b></a>&nbsp;(<?php echo $this->_tpl_vars['category']['totaldownloads']; ?>
)<br /><?php echo $this->_tpl_vars['category']['subcategories']; ?>
</td>
    <?php if (!($this->_tpl_vars['category']['count'] % 3)): ?>
    </tr><tr>
    <?php endif; ?>

  <?php endforeach; unset($_from); endif; ?>
  <!-- End category loop -->
  </tr>
</table>
<br /><br />

<div><?php echo $this->_tpl_vars['lang_thereare']; ?>
</div>
<hr noshade color=#000000">

  <?php endif; ?>

<?php if ($this->_tpl_vars['file'] != ""): ?>
<h4><?php echo $this->_tpl_vars['lang_latestlistings']; ?>
</h4>
<table width="100%" cellspacing="0" cellpadding="10" border="0">
<tr>
<td width="100%" align="center" valign="top">
  <!-- Start new link loop -->
  <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['file']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:mydownloads_download.html", 'smarty_include_vars' => array('down' => $this->_tpl_vars['file'][$this->_sections['i']['index']])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <?php endfor; endif; ?>
  <!-- End new link loop -->
</td></tr>
  </table>
<?php endif; ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:system_notification_select.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>