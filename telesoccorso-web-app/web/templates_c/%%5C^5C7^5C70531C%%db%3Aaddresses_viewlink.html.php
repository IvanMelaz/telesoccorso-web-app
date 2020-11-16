<?php /* Smarty version 2.6.5-dev, created on 2007-08-11 21:48:07
         compiled from db:addresses_viewlink.html */ ?>
<table width='100%' cellspacing='1' cellpadding='2' class="outer">
  <tr> 
    <td class="even" align='left' colspan="2"><a href='javascript:history.back(1)'><b><?php echo $this->_tpl_vars['lang_previous']; ?>
</b></a></td>
  </tr>
  <tr> 
    <td class="head" align='left' colspan="2"><?php echo $this->_tpl_vars['link']['adminlink']; ?>
 <b><?php echo $this->_tpl_vars['link']['title']; ?>
</b></td>
  </tr>
  <tr> 
    <td class="even" align='left' width="16%"><b><?php echo $this->_tpl_vars['lang_adress']; ?>
:</b> </td>
    <td class="odd" align='left' width="84%"><?php echo $this->_tpl_vars['link']['adress']; ?>
</td>
  </tr>
  <tr> 
    <td class="even" align='left' width="16%"><b><?php echo $this->_tpl_vars['lang_zip']; ?>
:</b> </td>
    <td class="odd" align='left' width="84%"><?php echo $this->_tpl_vars['link']['zip']; ?>
</td>
  </tr>
  <tr> 
    <td class="even" align='left' width="16%"><b><?php echo $this->_tpl_vars['lang_city']; ?>
:</b> </td>
    <td class="odd" align='left' width="84%"><?php echo $this->_tpl_vars['link']['city']; ?>
</td>
  </tr>
  <?php if ($this->_tpl_vars['link']['country'] != ""): ?> 
  <tr> 
    <td class="even" align='left' width="16%"><b><?php echo $this->_tpl_vars['lang_country']; ?>
:</b> </td>
    <td class="odd" align='left' width="84%"><?php echo $this->_tpl_vars['link']['country']; ?>
</td>
  </tr>
  <?php endif; ?> <?php if ($this->_tpl_vars['link']['phone'] != ""): ?>
  <tr> 
    <td class="even" align='left' width="16%"><b><?php echo $this->_tpl_vars['lang_phone']; ?>
:</b> </td>
    <td class="odd" align='left' width="84%"><?php echo $this->_tpl_vars['link']['phone']; ?>
</td>
  </tr>
  <?php endif; ?> <?php if ($this->_tpl_vars['link']['mobile'] != ""): ?>
  <tr> 
    <td class="even" align='left' width="16%"><b><?php echo $this->_tpl_vars['lang_mobile']; ?>
:</b> </td>
    <td class="odd" align='left' width="84%"><?php echo $this->_tpl_vars['link']['mobile']; ?>
</td>
  </tr>
  <?php endif; ?> <?php if ($this->_tpl_vars['link']['fax'] != ""): ?> 
  <tr> 
    <td class="even" align='left' width="16%"><b><?php echo $this->_tpl_vars['lang_fax']; ?>
:</b> </td>
    <td class="odd" align='left' width="84%"><?php echo $this->_tpl_vars['link']['fax']; ?>
</td>
  </tr>
<?php endif; ?> <?php if ($this->_tpl_vars['link']['contemail'] != ""): ?> 
  <tr> 
    <td class="even" align='left' width="16%"><b><?php echo $this->_tpl_vars['lang_contemail']; ?>
:</b> </td>
    <td class="odd" align='left' width="84%"><a href="mailto:<?php echo $this->_tpl_vars['link']['contemail']; ?>
"><?php echo $this->_tpl_vars['link']['contemail']; ?>
</a></td>
  </tr>
  <?php endif; ?> <?php if ($this->_tpl_vars['link']['url'] != ""): ?> 
  <tr> 
    <td class="even" align='left' width="16%"><b><?php echo $this->_tpl_vars['lang_website']; ?>
:</b> </td>
    <td class="odd" align='left' width="84%"><a href="<?php echo $this->_tpl_vars['link']['url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['link']['url']; ?>
</a></td>
  </tr>
  <?php endif; ?> <?php if ($this->_tpl_vars['link']['opentime'] != ""): ?> 
  <tr> 
    <td class="even" align='left' width="16%"><b><?php echo $this->_tpl_vars['lang_opened']; ?>
:</b> </td>
    <td class="odd" align='left' width="84%"><?php echo $this->_tpl_vars['link']['opentime']; ?>
</td>
  </tr>
  <?php endif; ?> 
  <tr valign="top"> 
    <td class="even" align='left'><b><?php echo $this->_tpl_vars['lang_description']; ?>
</b> </td>
    <td class="odd" align='left'><?php echo $this->_tpl_vars['link']['description']; ?>
</td>
  </tr>
  <?php if ($this->_tpl_vars['link']['logourl'] != ""): ?>
  <tr> 
    <td class="odd" align='center' colspan="2">
	    <img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/addresses/images/shots/<?php echo $this->_tpl_vars['link']['logourl']; ?>
" align="center" vspace="3" hspace="3" border="0"/>
	 </td>
  </tr>
  <?php endif; ?>
  <tr> 
    <td class="even" align='left' colspan="2"><a href='javascript:history.back(1)'><b><?php echo $this->_tpl_vars['lang_previous']; ?>
</b></a></td>
  </tr>
   <tr> 
    <td class="head" align='center' colspan="2"><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/addresses/ratelink.php?cid=<?php echo $this->_tpl_vars['link']['cid']; ?>
&amp;lid=<?php echo $this->_tpl_vars['link']['id']; ?>
"><?php echo $this->_tpl_vars['lang_ratethissite']; ?>
</a> 
      | <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/addresses/modlink.php?lid=<?php echo $this->_tpl_vars['link']['id']; ?>
"><?php echo $this->_tpl_vars['lang_modify']; ?>
</a> 
      <?php if ($this->_tpl_vars['link']['url'] != ""): ?> |<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/addresses/brokenlink.php?lid=<?php echo $this->_tpl_vars['link']['id']; ?>
"><?php echo $this->_tpl_vars['lang_reportbroken']; ?>
</a> <?php endif; ?>
      | <a target="_top" href="mailto:?subject=<?php echo $this->_tpl_vars['link']['mail_subject']; ?>
&amp;body=<?php echo $this->_tpl_vars['link']['mail_body']; ?>
"><?php echo $this->_tpl_vars['lang_tellafriend']; ?>
</a> 
      | <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/addresses/singlelink.php?cid=<?php echo $this->_tpl_vars['link']['cid']; ?>
&amp;lid=<?php echo $this->_tpl_vars['link']['id']; ?>
"><?php echo $this->_tpl_vars['lang_comments']; ?>
 
      (<?php echo $this->_tpl_vars['link']['comments']; ?>
)</a> | <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/addresses/print.php?lid=<?php echo $this->_tpl_vars['link']['id']; ?>
" target="_blank"><?php echo $this->_tpl_vars['lang_print']; ?>
</a></td>
  </tr>
</table>
<br />