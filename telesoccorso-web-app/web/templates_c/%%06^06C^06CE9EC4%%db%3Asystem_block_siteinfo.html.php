<?php /* Smarty version 2.6.5-dev, created on 2006-05-04 07:02:49
         compiled from db:system_block_siteinfo.html */ ?>
<table class="outer" cellspacing="0">

  <?php if ($this->_tpl_vars['block']['showgroups'] == true): ?>

  <!-- start group loop -->
  <?php if (count($_from = (array)$this->_tpl_vars['block']['groups'])):
    foreach ($_from as $this->_tpl_vars['group']):
?>
  <tr>
    <th colspan="2"><?php echo $this->_tpl_vars['group']['name']; ?>
</th>
  </tr>

  <!-- start group member loop -->
  <?php if (count($_from = (array)$this->_tpl_vars['group']['users'])):
    foreach ($_from as $this->_tpl_vars['user']):
?>
  <tr>
    <td class="even" valign="middle" align="center"><img src="<?php echo $this->_tpl_vars['user']['avatar']; ?>
" alt="" width="32" /><br /><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/userinfo.php?uid=<?php echo $this->_tpl_vars['user']['id']; ?>
"><?php echo $this->_tpl_vars['user']['name']; ?>
</a></td><td class="odd" width="20%" align="right" valign="middle"><?php echo $this->_tpl_vars['user']['msglink']; ?>
</td>
  </tr>
  <?php endforeach; unset($_from); endif; ?>
  <!-- end group member loop -->

  <?php endforeach; unset($_from); endif; ?>
  <!-- end group loop -->
  <?php endif; ?>
</table>

<br />

<div style="margin: 3px; text-align:center;">
  <img src="<?php echo $this->_tpl_vars['block']['logourl']; ?>
" alt="" border="0" /><br /><?php echo $this->_tpl_vars['block']['recommendlink']; ?>

</div>