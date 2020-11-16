<?php /* Smarty version 2.6.5-dev, created on 2006-05-06 11:27:20
         compiled from db:xoopsmembers_searchresults.html */ ?>
<a href="index.php"><?php echo $this->_tpl_vars['lang_search']; ?>
</a>&nbsp;<span style="font-weight:bold;">&raquo;&raquo;</span>&nbsp;<?php echo $this->_tpl_vars['lang_results']; ?>
<br /><br />

<?php if ($this->_tpl_vars['total_found'] != 0): ?>
<table class="outer" cellspacing="1" cellpadding="4">
  <tr>
    <th align="center"><?php echo $this->_tpl_vars['lang_avatar']; ?>
</th><th align="center"><?php echo $this->_tpl_vars['lang_username']; ?>
</th><th align="center"><?php echo $this->_tpl_vars['lang_realname']; ?>
</th><th align="center"><?php echo $this->_tpl_vars['lang_email']; ?>
</th><th align="center"><?php echo $this->_tpl_vars['lang_privmsg']; ?>
</th><th align="center"><?php echo $this->_tpl_vars['lang_url']; ?>
</th><th align="center"><?php echo $this->_tpl_vars['lang_regdate']; ?>
</th><th align="center"><?php echo $this->_tpl_vars['lang_lastlogin']; ?>
</th><th align="center"><?php echo $this->_tpl_vars['lang_posts']; ?>
</th>
    <?php if ($this->_tpl_vars['is_admin'] == true): ?>
    <th align="center"><?php echo $this->_tpl_vars['lang_admin']; ?>
</th>
    <?php endif; ?>
  </tr>
  <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['users']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
  <tr valign="middle">
    <td class="even"><?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['avatar']; ?>
</td><td class="odd"><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/userinfo.php?uid=<?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['name']; ?>
</a></td><td class="even"><?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['realname']; ?>
</td><td align="center" class="odd"><?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['email']; ?>
</td><td class="even" align="center"><?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['pmlink']; ?>
</td><td class="odd" align="center"><?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['website']; ?>
</td><td class="even" align="center"><?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['registerdate']; ?>
</td><td class="odd" align="center"><?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['lastlogin']; ?>
</td><td class="even" align="center"><?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['posts']; ?>
</td>
    <?php if ($this->_tpl_vars['is_admin'] == true): ?><td class="odd" align="center"><?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['adminlink']; ?>
</td><?php endif; ?>
  </tr>
  <?php endfor; endif; ?>
</table>
<div style="text-align:center">
  <?php echo $this->_tpl_vars['pagenav']; ?>

  <?php echo $this->_tpl_vars['lang_numfound']; ?>

</div>
<?php else: ?>
  <?php echo $this->_tpl_vars['lang_nonefound']; ?>

<?php endif; ?>