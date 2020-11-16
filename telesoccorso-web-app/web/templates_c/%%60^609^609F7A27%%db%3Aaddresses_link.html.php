<?php /* Smarty version 2.6.5-dev, created on 2007-08-11 21:48:06
         compiled from db:addresses_link.html */ ?>
<table width='100%' cellspacing='1' cellpadding ='2' class = 'outer'>
  <tr> 
    <td class="itemHead" align='left' height="10" colspan="2"><b><?php echo $this->_tpl_vars['lang_category']; ?>
: <?php echo $this->_tpl_vars['link']['category']; ?>
</b></td>
  </tr>
  <tr > 
    <td class="head" align='left' height="15" colspan="2"><?php echo $this->_tpl_vars['link']['adminlink']; ?>
<a href='visit.php?cid=<?php echo $this->_tpl_vars['link']['cid']; ?>
&amp;lid=<?php echo $this->_tpl_vars['link']['id']; ?>
'><b><?php echo $this->_tpl_vars['link']['title']; ?>
</b></a></td>
  </tr>
  <tr> 
    <td class="even" align='left' width="16%"><b><?php echo $this->_tpl_vars['lang_adress']; ?>
:</b></td>
    <td class="odd" align='left'><?php echo $this->_tpl_vars['link']['adress']; ?>
</td>
  </tr>
  <tr> 
    <td class="even" align='left'><b><?php echo $this->_tpl_vars['lang_zip']; ?>
:</b></td>
    <td class="odd" align='left'><?php echo $this->_tpl_vars['link']['zip']; ?>
</td>
  </tr>
  <tr> 
    <td class="even" align='left'><b><?php echo $this->_tpl_vars['lang_city']; ?>
:</b></td>
    <td class="odd" align='left'><?php echo $this->_tpl_vars['link']['city']; ?>
</td>
  </tr>
  <!-- SHINE: if you want to show banner within index and category view enable lines below -->

  <!-- <?php if ($this->_tpl_vars['link']['logourl'] != ""): ?>
  <tr> 
    <td class="odd" align='center' colspan="2"> 
      
      <a href='visit.php?cid=<?php echo $this->_tpl_vars['link']['cid']; ?>
&amp;lid=<?php echo $this->_tpl_vars['link']['id']; ?>
'><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/addresses/images/shots/<?php echo $this->_tpl_vars['link']['logourl']; ?>
" align="center" vspace="3" hspace="3" border="0" /></a> 
      
    </td>
  </tr>
  <?php endif; ?> -->

  <!-- SHINE: end code for bannerview within index and category view -->
  <tr align="center"> 
    <td class="head" colspan="2"> 
      <a href='visit.php?cid=<?php echo $this->_tpl_vars['link']['cid']; ?>
&amp;lid=<?php echo $this->_tpl_vars['link']['id']; ?>
'> &nbsp;<b><?php echo $this->_tpl_vars['lang_viewmore']; ?>
</b></a><br />
      </td>
  </tr>
  <tr> 
    <td class="even" align='center' colspan="2"><b><?php echo $this->_tpl_vars['lang_hits']; ?>
</b><?php echo $this->_tpl_vars['link']['hits']; ?>
 
      <b>&nbsp;<?php echo $this->_tpl_vars['lang_rating']; ?>
</b> <?php echo $this->_tpl_vars['link']['rating']; ?>
 (<?php echo $this->_tpl_vars['link']['votes']; ?>
)&nbsp;<b><?php echo $this->_tpl_vars['lang_lastupdate']; ?>
</b><?php echo $this->_tpl_vars['link']['updated']; ?>
</td>
  </tr>
  <!--<tr> -->
   <!-- <td class="foot" align='center' colspan="2"> -->
      <!--<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/addresses/ratelink.php?cid=<?php echo $this->_tpl_vars['link']['cid']; ?>
&amp;lid=<?php echo $this->_tpl_vars['link']['id']; ?>
"><?php echo $this->_tpl_vars['lang_ratethissite']; ?>
</a> | <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/addresses/modlink.php?lid=<?php echo $this->_tpl_vars['link']['id']; ?>
"><?php echo $this->_tpl_vars['lang_modify']; ?>
</a> |<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/addresses/brokenlink.php?lid=<?php echo $this->_tpl_vars['link']['id']; ?>
"><?php echo $this->_tpl_vars['lang_reportbroken']; ?>
</a> | <a target="_top" href="mailto:?subject=<?php echo $this->_tpl_vars['link']['mail_subject']; ?>
&amp;body=<?php echo $this->_tpl_vars['link']['mail_body']; ?>
"><?php echo $this->_tpl_vars['lang_tellafriend']; ?>
</a> | <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/addresses/singlelink.php?cid=<?php echo $this->_tpl_vars['link']['cid']; ?>
&amp;lid=<?php echo $this->_tpl_vars['link']['id']; ?>
"><?php echo $this->_tpl_vars['lang_comments']; ?>
 (<?php echo $this->_tpl_vars['link']['comments']; ?>
)</a>-->
   <!-- </td>-->
 <!-- </tr>-->
</table>
<br />