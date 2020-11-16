<?php /* Smarty version 2.6.5-dev, created on 2006-05-04 11:09:39
         compiled from db:sitemap_index.html */ ?>
<br />
<p align="center"><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/sitemap/images/logo.gif" alt="" /></p>
<br />
<hr noshade color=#000000">
<div style="padding: 7px;"><?php echo $this->_tpl_vars['msgs']; ?>
</div>
<hr noshade color=#000000">
<div style="margin: 0 10px;">

  <div align="right"><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['this']['mods']; ?>
/images/map.gif" /><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/">HOME</a>&nbsp;<a href="http://petitoops.net/"><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['this']['mods']; ?>
/images/chacha.gif" alt="" border="0" /></a></div>

<br />

<table>
<tr>

<?php if (isset($this->_foreach['i'])) unset($this->_foreach['i']);
$this->_foreach['i']['total'] = count($_from = (array)$this->_tpl_vars['sitemap']['modules']);
$this->_foreach['i']['show'] = $this->_foreach['i']['total'] > 0;
if ($this->_foreach['i']['show']):
$this->_foreach['i']['iteration'] = 0;
    foreach ($_from as $this->_tpl_vars['module']):
        $this->_foreach['i']['iteration']++;
        $this->_foreach['i']['first'] = ($this->_foreach['i']['iteration'] == 1);
        $this->_foreach['i']['last']  = ($this->_foreach['i']['iteration'] == $this->_foreach['i']['total']);
?>
<td width="33%" valign="top">
  <?php if ($this->_tpl_vars['module']['name']): ?>
    <div><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['this']['mods']; ?>
/images/<?php if ($this->_tpl_vars['this']['mods'] == $this->_tpl_vars['module']['directory']): ?>map<?php else: ?>main<?php endif; ?>.gif" /> <a class="menuMain" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['module']['directory']; ?>
/"><?php echo $this->_tpl_vars['module']['name']; ?>
</a></div>
    <?php if (count($_from = (array)$this->_tpl_vars['module']['parent'])):
    foreach ($_from as $this->_tpl_vars['parent']):
?>
      <div><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['this']['mods']; ?>
/images/cat.gif" /> <a class="menuSub" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['module']['directory']; ?>
/<?php echo $this->_tpl_vars['parent']['url']; ?>
"><?php echo $this->_tpl_vars['parent']['title']; ?>
</a></div>
      
      <?php if ($this->_tpl_vars['show_subcategoris']): ?>
      <?php if (count($_from = (array)$this->_tpl_vars['parent']['child'])):
    foreach ($_from as $this->_tpl_vars['child']):
?>
        <div><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['this']['mods']; ?>
/images/cat<?php echo $this->_tpl_vars['child']['image']; ?>
.gif" /> <a class="menuSub" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['module']['directory']; ?>
/<?php echo $this->_tpl_vars['child']['url']; ?>
"><?php echo $this->_tpl_vars['child']['title']; ?>
</a></div>
      <?php endforeach; unset($_from); endif; ?>
      <?php endif; ?>

    <?php endforeach; unset($_from); endif; ?>
    <?php if (count($_from = (array)$this->_tpl_vars['module']['sublinks'])):
    foreach ($_from as $this->_tpl_vars['sublink']):
?>
      <div><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['this']['mods']; ?>
/images/sub.gif" /> <a class="menuSub" href="<?php echo $this->_tpl_vars['sublink']['url']; ?>
"><?php echo $this->_tpl_vars['sublink']['name']; ?>
</a></div>
    <?php endforeach; unset($_from); endif; ?>
  <?php endif; ?>
</td>
<?php if (!($this->_foreach['i']['iteration'] % 3)): ?></tr><?php if (! $this->_foreach['i']['last']): ?><tr><td colspan="3"><br /></td></tr><tr><?php endif;  endif; ?>
<?php endforeach; unset($_from); endif; ?>

<?php if ($this->_tpl_vars['xoops_isuser']): ?>
  <?php if (!($this->_foreach['i']['total'] % 3)): ?><tr><td colspan="3"><br /></td></tr><tr><?php endif; ?>
  <td>
  <div><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['this']['mods']; ?>
/images/user.gif" /> <b><?php echo $this->_tpl_vars['usermenu']; ?>
</b></div>
  <div><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['this']['mods']; ?>
/images/user_sub.gif" /> <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/user.php"><?php echo $this->_tpl_vars['lang']['youraccount']; ?>
</a></div>
  <div><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['this']['mods']; ?>
/images/user_sub.gif" /> <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/edituser.php"><?php echo $this->_tpl_vars['lang']['editaccount']; ?>
</a></div>
  <div><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['this']['mods']; ?>
/images/user_sub.gif" /> <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/notifications.php"><?php echo $this->_tpl_vars['lang']['notifications']; ?>
</a></div>
  <div><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['this']['mods']; ?>
/images/user_sub.gif" /> <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/user.php?op=logout"><?php echo $this->_tpl_vars['lang']['logout']; ?>
</a></div>
  <div><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['this']['mods']; ?>
/images/user_sub.gif" /> <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/viewpmsg.php"><?php echo $this->_tpl_vars['lang']['inbox']; ?>
</a></div>
  <?php if ($this->_tpl_vars['xoops_isadmin']): ?>
    <div><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['this']['mods']; ?>
/images/acp.gif" /> <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/admin.php"><?php echo $this->_tpl_vars['lang']['adminmenu']; ?>
</a></div>
  <?php endif; ?>
  </td>
<?php endif; ?>
</tr>
</table>

</div>