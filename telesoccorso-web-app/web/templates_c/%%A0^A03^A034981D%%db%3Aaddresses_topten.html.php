<?php /* Smarty version 2.6.5-dev, created on 2007-08-11 21:48:07
         compiled from db:addresses_topten.html */ ?>
<br /><br />

<div style="margin-top: 2px;text-align: center;"><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/addresses/index.php"><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/addresses/images/logo.gif" alt="" /></a></div>
<br /><br /><br />
<!-- Start ranking loop -->
<?php if (count($_from = (array)$this->_tpl_vars['rankings'])):
    foreach ($_from as $this->_tpl_vars['ranking']):
?>
<table border = 0 cellpadding = '2' cellspacing = '1' class="outer">
  <tr>
    <th colspan="6"><?php echo $this->_tpl_vars['ranking']['title']; ?>
 (<?php echo $this->_tpl_vars['lang_sortby']; ?>
)</th>
  </tr>
  <tr>
    <td class="head" width='7%'><?php echo $this->_tpl_vars['lang_rank']; ?>
</td>
    <td class="head" width='28%'><?php echo $this->_tpl_vars['lang_title']; ?>
</td>
    <td class="head" width='40%'><?php echo $this->_tpl_vars['lang_category']; ?>
</td>
    <td class="head" width='8%' align='center'><?php echo $this->_tpl_vars['lang_hits']; ?>
</td>
    <td class="head" width='9%' align='center'><?php echo $this->_tpl_vars['lang_rating']; ?>
</td>
    <td class="head" width='8%' align='right'><?php echo $this->_tpl_vars['lang_vote']; ?>
</td>
  </tr>

  <!-- Start links loop -->
  <?php if (count($_from = (array)$this->_tpl_vars['ranking']['links'])):
    foreach ($_from as $this->_tpl_vars['link']):
?>

  <tr>
    <td class="even"><?php echo $this->_tpl_vars['link']['rank']; ?>
</td>
    <td class="odd"><a href='singlelink.php?cid=<?php echo $this->_tpl_vars['link']['cid']; ?>
&amp;lid=<?php echo $this->_tpl_vars['link']['id']; ?>
'><?php echo $this->_tpl_vars['link']['title']; ?>
</a></td>
    <td class="even"><?php echo $this->_tpl_vars['link']['category']; ?>
</td>
    <td class="odd" align='center'><?php echo $this->_tpl_vars['link']['hits']; ?>
</td>
    <td class="even" align='center'><?php echo $this->_tpl_vars['link']['rating']; ?>
</td>
    <td class="odd" align='right'><?php echo $this->_tpl_vars['link']['votes']; ?>
</td>
  </tr>

  <?php endforeach; unset($_from); endif; ?>
  <!-- End links loop-->

</table>
<br />
<?php endforeach; unset($_from); endif; ?>
<!-- End ranking loop -->