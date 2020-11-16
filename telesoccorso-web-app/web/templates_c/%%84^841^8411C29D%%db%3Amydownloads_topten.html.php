<?php /* Smarty version 2.6.5-dev, created on 2007-01-19 14:43:23
         compiled from db:mydownloads_topten.html */ ?>
<br /><br />

<p align="center">
    <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/mydownloads/index.php"><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/mydownloads/images/logo-en.gif" alt="" /></a>
</p>

<br /><br /><br />
<!-- Start ranking loop -->
<?php if (count($_from = (array)$this->_tpl_vars['rankings'])):
    foreach ($_from as $this->_tpl_vars['ranking']):
?>
<table class="outer">
  <tr>
    <th colspan="6" align="center"><?php echo $this->_tpl_vars['ranking']['title']; ?>
 (<?php echo $this->_tpl_vars['lang_sortby']; ?>
)</th>
  </tr>
  <tr>
    <td width='7%' class="head"><?php echo $this->_tpl_vars['lang_rank']; ?>
</td>
    <td width='28%' class="head"><?php echo $this->_tpl_vars['lang_title']; ?>
</td>
    <td width='40%' class="head"><?php echo $this->_tpl_vars['lang_category']; ?>
</td>
    <td width='8%' class="head" align='center'><?php echo $this->_tpl_vars['lang_hits']; ?>
</td>
    <td width='9%' class="head" align='center'><?php echo $this->_tpl_vars['lang_rating']; ?>
</td>
    <td width='8%' class="head" align='right'><?php echo $this->_tpl_vars['lang_vote']; ?>
</td>
  </tr>

  <!-- Start files loop -->
  <?php if (count($_from = (array)$this->_tpl_vars['ranking']['file'])):
    foreach ($_from as $this->_tpl_vars['file']):
?>

  <tr>
    <td class="even"><?php echo $this->_tpl_vars['file']['rank']; ?>
</td>
    <td class="odd"><a href='singlefile.php?cid=<?php echo $this->_tpl_vars['file']['cid']; ?>
&amp;lid=<?php echo $this->_tpl_vars['file']['id']; ?>
'><?php echo $this->_tpl_vars['file']['title']; ?>
</a></td>
    <td class="even"><?php echo $this->_tpl_vars['file']['category']; ?>
</td>
    <td class="odd" align='center'><?php echo $this->_tpl_vars['file']['hits']; ?>
</td>
    <td class="even" align='center'><?php echo $this->_tpl_vars['file']['rating']; ?>
</td>
    <td align='right'><?php echo $this->_tpl_vars['file']['votes']; ?>
</td>
  </tr>

  <?php endforeach; unset($_from); endif; ?>
  <!-- End links loop-->

</table>
<br />
<?php endforeach; unset($_from); endif; ?>
<!-- End ranking loop -->