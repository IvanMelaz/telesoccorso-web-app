<?php /* Smarty version 2.6.5-dev, created on 2007-08-11 21:48:06
         compiled from db:addresses_modlink.html */ ?>
<br /><br />

<p align="center">
    <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/addresses/index.php"><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/addresses/images/logo.gif" border="0" alt="" /></a>
</p>

<h4><?php echo $this->_tpl_vars['lang_requestmod']; ?>
</h4>
<form action="modlink.php" method="post">
  <table width="80%" cellpading = "2" cellspacing = "1" class = "outer">
    <tr> 
      <td align="left" class = 'itemHead' colspan = "2"><?php echo $this->_tpl_vars['lang_modify']; ?>
 <?php echo $this->_tpl_vars['link']['title']; ?>
</td>
    </tr>
	<tr> 
      <td align="right" class = 'head'><?php echo $this->_tpl_vars['lang_linkid']; ?>
</td>
      <td class = 'even'><b><?php echo $this->_tpl_vars['link']['id']; ?>
</b></td>
    </tr>
    <tr> 
      <td align="right" class = 'head'><?php echo $this->_tpl_vars['lang_sitetitle']; ?>
</td>
      <td class = 'even'> 
        <input type="text" name="title" size="50" maxlength="100" value="<?php echo $this->_tpl_vars['link']['title']; ?>
">
      </td>
    </tr>
    <tr> 
      <td align="right" class = 'head'><?php echo $this->_tpl_vars['lang_category']; ?>
</td>
      <td class = 'even'><?php echo $this->_tpl_vars['category_selbox']; ?>
</td>
    </tr>
    <tr> 
      <td align="right" class = 'head'><?php echo $this->_tpl_vars['lang_adress']; ?>
</td>
      <td class = 'even'> 
        <input type="text" name="adress" size="50" maxlength="100" value="<?php echo $this->_tpl_vars['link']['adress']; ?>
">
      </td>
    </tr>
    <tr> 
      <td align="right" class = 'head'><?php echo $this->_tpl_vars['lang_zip']; ?>
</td>
      <td class = 'even'> 
        <input type="text" name="zip" size="20" maxlength="20" value="<?php echo $this->_tpl_vars['link']['zip']; ?>
">
      </td>
    </tr>
    <tr> 
      <td align="right" class = 'head'><?php echo $this->_tpl_vars['lang_city']; ?>
</td>
      <td class = 'even'> 
        <input type="text" name="city" size="50" maxlength="100" value="<?php echo $this->_tpl_vars['link']['city']; ?>
">
      </td>
    </tr>
    <tr> 
      <td align="right" class = 'head'><?php echo $this->_tpl_vars['lang_country']; ?>
</td>
      <td class = 'even'> 
        <input type="text" name="country" size="50" maxlength="100" value="<?php echo $this->_tpl_vars['link']['country']; ?>
">
      </td>
    </tr>
    <tr> 
      <td align="right" class = 'head'><?php echo $this->_tpl_vars['lang_phone']; ?>
</td>
      <td class = 'even'> 
        <input type="text" name="phone" size="20" maxlength="20" value="<?php echo $this->_tpl_vars['link']['phone']; ?>
">
      </td>
    </tr>
    <tr> 
      <td align="right" class = 'head'><?php echo $this->_tpl_vars['lang_mobile']; ?>
</td>
      <td class = 'even'> 
        <input type="text" name="mobile" size="20" maxlength="20" value="<?php echo $this->_tpl_vars['link']['mobile']; ?>
">
      </td>
    </tr>
    <tr> 
      <td align="right" class = 'head' ><?php echo $this->_tpl_vars['lang_fax']; ?>
</td>
      <td class = 'even'> 
        <input type="text" name="fax" size="20" maxlength="20" value="<?php echo $this->_tpl_vars['link']['fax']; ?>
">
      </td>
    </tr>
    <tr> 
      <td align="right" class = 'head'><?php echo $this->_tpl_vars['lang_contemail']; ?>
</td>
      <td class = 'even'> 
        <input type="text" name="contemail" size="50" maxlength="100" value="<?php echo $this->_tpl_vars['link']['contemail']; ?>
">
      </td>
    </tr>
    <tr> 
      <td align="right" class = 'head'><?php echo $this->_tpl_vars['lang_siteurl']; ?>
</td>
      <td class = 'even'> 
        <input type="text" name="url" size="50" maxlength="100" value="<?php echo $this->_tpl_vars['link']['url']; ?>
">
      </td>
    </tr>
     <tr> 
      <td align="right" class = 'head'><?php echo $this->_tpl_vars['lang_opened']; ?>
</td>
      <td class = 'even'> 
        <textarea name=opentime cols="40" rows="4" class="text"><?php echo $this->_tpl_vars['link']['opentime']; ?>
</textarea>
      </td>
    </tr>
    <tr> 
      <td></td>
      <td></td>
    </tr>
    <tr> 
      <td align="right" valign="top" class = 'head'><?php echo $this->_tpl_vars['lang_description']; ?>
</td>
      <td class = 'even'> 
        <textarea name=description cols=45 rows=7><?php echo $this->_tpl_vars['link']['description']; ?>
</textarea>
      </td>
    </tr>
    <tr> 
      <td colspan="2" align="center" class = 'even'><br />
        <input type="hidden" name="logourl" value="<?php echo $this->_tpl_vars['link']['logourl']; ?>
"></input> 
        <input type="hidden" name="lid" value="<?php echo $this->_tpl_vars['link']['id']; ?>
"></input>
        <input type="submit" name="submit" value="<?php echo $this->_tpl_vars['lang_sendrequest']; ?>
"></input> 
        &nbsp; 
        <input type=button value="<?php echo $this->_tpl_vars['lang_cancel']; ?>
" onclick="javascript:history.go(-1)"></input> 
      </td>
    </tr>
  </table>
</form>