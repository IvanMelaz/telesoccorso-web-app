<?php /* Smarty version 2.6.5-dev, created on 2007-01-19 14:43:23
         compiled from db:mydownloads_download.html */ ?>
<table width='100%' cellspacing='0' class='outer'>
  <tr>
    <td class="head" colspan='2' align='left' height="18"><?php echo $this->_tpl_vars['lang_category']; ?>
 <?php echo $this->_tpl_vars['down']['category']; ?>
</td>
  </tr>
  <tr>
    <td class='even' width='65%' align='left' valign="bottom"><a href='visit.php?cid=<?php echo $this->_tpl_vars['down']['cid']; ?>
&amp;lid=<?php echo $this->_tpl_vars['down']['id']; ?>
' target='_blank'><img src='images/download.gif' border='0' alt='<?php echo $this->_tpl_vars['lang_dlnow']; ?>
' /><b><?php echo $this->_tpl_vars['down']['title']; ?>
</b></a></td>
    <td class='even' align='right' width='35%'><b><?php echo $this->_tpl_vars['lang_version']; ?>
:</b>&nbsp;<?php echo $this->_tpl_vars['down']['version']; ?>
<br /><b><?php echo $this->_tpl_vars['lang_subdate']; ?>
:</b>&nbsp;&nbsp;<?php echo $this->_tpl_vars['down']['updated']; ?>
</td>
  </tr>
  <tr>
    <td colspan='2' class='odd' align='left'><?php echo $this->_tpl_vars['down']['adminlink']; ?>
<b><?php echo $this->_tpl_vars['lang_description']; ?>
</b><br />

<?php if ($this->_tpl_vars['down']['logourl'] != ""): ?>
   <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/mydownloads/visit.php?cid=<?php echo $this->_tpl_vars['down']['cid']; ?>
&amp;lid=<?php echo $this->_tpl_vars['down']['id']; ?>
" target="_blank"><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/mydownloads/images/shots/<?php echo $this->_tpl_vars['down']['logourl']; ?>
" width="<?php echo $this->_tpl_vars['shotwidth']; ?>
" alt=""  align="right" vspace="3" hspace="7"/></a>
<?php endif; ?>

<div style="text-align: justify"><?php echo $this->_tpl_vars['down']['description']; ?>
</div><br /></td>
  </tr>
  <tr>
    <td colspan='2' class='even' align='left'><img src='images/counter.gif' border='0' align='absmiddle' alt='<?php echo $this->_tpl_vars['down']['lang_dltimes']; ?>
' />
&nbsp;<?php echo $this->_tpl_vars['down']['hits']; ?>
&nbsp;&nbsp;<img src='images/size.gif' border='0' align='absmiddle' alt='<?php echo $this->_tpl_vars['lang_size']; ?>
' />&nbsp;<?php echo $this->_tpl_vars['down']['size']; ?>
&nbsp;&nbsp;<img src='images/platform.gif' border='0' align='absmiddle' alt='<?php echo $this->_tpl_vars['lang_platform']; ?>
' />&nbsp;<?php echo $this->_tpl_vars['down']['platform']; ?>
&nbsp;&nbsp;<img src='images/home.gif' border='0' align='absmiddle' alt='<?php echo $this->_tpl_vars['lang_homepage']; ?>
' />&nbsp;<a href="<?php echo $this->_tpl_vars['down']['homepage']; ?>
" target="_BLANK"><?php echo $this->_tpl_vars['down']['homepage']; ?>
</a></td>
  </tr>
  <tr>
    <td colspan='2' class='foot' align='center'>
    <div><b><?php echo $this->_tpl_vars['lang_ratingc']; ?>
</b> <?php echo $this->_tpl_vars['down']['rating']; ?>
 (<?php echo $this->_tpl_vars['down']['votes']; ?>
)</div>
    <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/mydownloads/ratefile.php?cid=<?php echo $this->_tpl_vars['down']['cid']; ?>
&amp;lid=<?php echo $this->_tpl_vars['down']['id']; ?>
"><?php echo $this->_tpl_vars['lang_ratethissite']; ?>
</a> | <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/mydownloads/modfile.php?lid=<?php echo $this->_tpl_vars['down']['id']; ?>
"><?php echo $this->_tpl_vars['lang_modify']; ?>
</a> | <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/mydownloads/brokenfile.php?lid=<?php echo $this->_tpl_vars['down']['id']; ?>
"><?php echo $this->_tpl_vars['lang_reportbroken']; ?>
</a> | <a target="_top" href="mailto:?subject=<?php echo $this->_tpl_vars['down']['mail_subject']; ?>
&amp;body=<?php echo $this->_tpl_vars['down']['mail_body']; ?>
"><?php echo $this->_tpl_vars['lang_tellafriend']; ?>
</a> | <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/mydownloads/singlefile.php?cid=<?php echo $this->_tpl_vars['down']['cid']; ?>
&amp;lid=<?php echo $this->_tpl_vars['down']['id']; ?>
"><?php echo $this->_tpl_vars['lang_comments']; ?>
 (<?php echo $this->_tpl_vars['down']['comments']; ?>
)</a>
    </td>
  </tr>
</table>
<br /><br />