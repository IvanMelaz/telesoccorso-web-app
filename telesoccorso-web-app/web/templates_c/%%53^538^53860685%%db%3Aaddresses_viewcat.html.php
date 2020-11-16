<?php /* Smarty version 2.6.5-dev, created on 2007-08-11 21:48:07
         compiled from db:addresses_viewcat.html */ ?>
<br /><br />

<p align="center">
    <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/addresses/index.php"><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/addresses/images/logo.gif" border="0" alt="" /></a>
</p>

<br />
<table width="97%" cellspacing="0" cellpadding="0" border="0" align="center">
  <tr>
    <td>
      <table width="100%" cellspacing="1" cellpadding="2" border="0">
        <tr>
          <td class="newstitle"><b><?php echo $this->_tpl_vars['category_path']; ?>
</b></td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td align="center">
      <table width="90%">
	  <tr><td>&nbsp;</td></tr>
        <tr>
          <?php if (count($_from = (array)$this->_tpl_vars['subcategories'])):
    foreach ($_from as $this->_tpl_vars['subcat']):
?>
            <td align="left"><b><a href="viewcat.php?cid=<?php echo $this->_tpl_vars['subcat']['id']; ?>
"><?php echo $this->_tpl_vars['subcat']['title']; ?>
</a></b>&nbsp;(<?php echo $this->_tpl_vars['subcat']['totallinks']; ?>
)<br /><font class="subcategories"><?php echo $this->_tpl_vars['subcat']['infercategories']; ?>
</font></td>
            <?php if (!($this->_tpl_vars['subcat']['count'] % 4)): ?>
            </tr><tr>
            <?php endif; ?>
          <?php endforeach; unset($_from); endif; ?>
        </tr>
      </table>
      <br />
      <hr />

      <?php if ($this->_tpl_vars['show_links'] == true): ?>

      <?php if ($this->_tpl_vars['show_nav'] == true): ?>
      <div><?php echo $this->_tpl_vars['lang_sortby']; ?>
&nbsp;&nbsp;<?php echo $this->_tpl_vars['lang_title']; ?>
 (<a href="viewcat.php?cid=<?php echo $this->_tpl_vars['category_id']; ?>
&orderby=titleA"><img src="images/up.gif" border="0" align="middle" alt="" /></a><a href="viewcat.php?cid=<?php echo $this->_tpl_vars['category_id']; ?>
&orderby=titleD"><img src="images/down.gif" border="0" align="middle" alt="" /></a>)<?php echo $this->_tpl_vars['lang_date']; ?>
 (<a href="viewcat.php?cid=<?php echo $this->_tpl_vars['category_id']; ?>
&orderby=dateA"><img src="images/up.gif" border="0" align="middle" alt="" /></a><a href="viewcat.php?cid=<?php echo $this->_tpl_vars['category_id']; ?>
&orderby=dateD"><img src="images/down.gif" border="0" align="middle" alt="" /></a>)<?php echo $this->_tpl_vars['lang_rating']; ?>
 (<a href="viewcat.php?cid=<?php echo $this->_tpl_vars['category_id']; ?>
&orderby=ratingA"><img src="images/up.gif" border="0" align="middle" alt="" /></a><a href="viewcat.php?cid=<?php echo $this->_tpl_vars['category_id']; ?>
&orderby=ratingD"><img src="images/down.gif" border="0" align="middle" alt="" /></a>)<?php echo $this->_tpl_vars['lang_popularity']; ?>
 (<a href="viewcat.php?cid=<?php echo $this->_tpl_vars['category_id']; ?>
&orderby=hitsA"><img src="images/up.gif" border="0" align="middle" alt="" /></a><a href="viewcat.php?cid=<?php echo $this->_tpl_vars['category_id']; ?>
&orderby=hitsD"><img src="images/down.gif" border="0" align="middle" alt="" /></a>)
      <br /><b><?php echo $this->_tpl_vars['lang_cursortedby']; ?>
</b>
      </div>
      <hr />
      <?php endif; ?>

      <br />
    </td>
  </tr>
</table>

<table width="100%" cellspacing="0" cellpadding="10" border="0">
  <tr>
    <td width="100%" align="center" valign="top">
    <!-- Start link loop -->
    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['links']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
$this->_smarty_include(array('smarty_include_tpl_file' => "db:addresses_link.html", 'smarty_include_vars' => array('link' => $this->_tpl_vars['links'][$this->_sections['i']['index']])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php endfor; endif; ?>
    <!-- End link loop -->
    </td>
  </tr>
</table>

<br /><br />
<div style="text-align:center;"><?php echo $this->_tpl_vars['page_nav']; ?>
</div>

<?php else: ?>

    </td>
  </tr>
</table>
<?php endif; ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'db:system_notification_select.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>