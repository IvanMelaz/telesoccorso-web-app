<?php /* Smarty version 2.6.5-dev, created on 2007-08-11 21:48:07
         compiled from db:addresses_submit.html */ ?>
<br /><br />
<p align='center'>
    <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/addresses/index.php"><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/addresses/images/logo.gif" alt="" /></a>
</p>

<br />

<table width="100%" cellspacing="1" cellpadding="4" border="0">
  <tr>
    <td>
	<ul>
	    <li><?php echo $this->_tpl_vars['lang_submitonce']; ?>
</li>
		<li><?php echo $this->_tpl_vars['lang_allpending']; ?>
</li>
		<li><?php echo $this->_tpl_vars['lang_dontabuse']; ?>
</li>
		<li><?php echo $this->_tpl_vars['lang_wetakeshot']; ?>
</li>
		<li><?php echo $this->_tpl_vars['lang_bannertise']; ?>
</li>
		</ul>
    <form action="submit.php" method="post">
        <table width="80%">
          <tr> 
            <td align="right" nowrap colspan="2" class="itemHead"> 
              <div align="left"><b><?php echo $this->_tpl_vars['lang_submitlinkh']; ?>
</b></div>
            </td>
          </tr>
          <tr> 
            <td class="head" align="right" nowrap> 
              <div align="left">
                <b><?php echo $this->_tpl_vars['lang_sitetitle']; ?>
*</b>
              </div>
            </td>
            <td class="even"> 
              <input type="text" name="title" size="50" maxlength="100" />
            </td>
          </tr>
		  <!-- <tr> 
            <td class="head" align="right" nowrap> 
              <div align="left"><b><?php echo $this->_tpl_vars['lang_siteurl']; ?>
</b></div>
            </td>
            <td class="odd"> 
              <input type="text" name="url" size="50" maxlength="255" value="http://" />
            </td>
          </tr> -->
          <tr> 
            <td class="head" align="right" nowrap> 
              <div align="left"><b><?php echo $this->_tpl_vars['lang_category']; ?>
*</b></div>
            </td>
            <td class="even">
				<?php echo $this->_tpl_vars['category_selbox']; ?>
</td> 
          </tr>
		  <!-- start adresses extra -->
          <tr> 
            <td class="head" align="right" nowrap> 
              <div align="left">
                <b><?php echo $this->_tpl_vars['lang_adress']; ?>
*</b>
              </div>
            </td>
            <td class="even"> 
              <input type="text" name="adress" size="50" maxlength="100" />
            </td>
          </tr>
		  <tr> 
            <td class="head" align="right" nowrap> 
              <div align="left">
                <b><?php echo $this->_tpl_vars['lang_zip']; ?>
</b>
              </div>
            </td>
            <td class="even"> 
              <input type="text" name="zip" size="20" maxlength="20" />
            </td>
          </tr>
		  <tr> 
            <td class="head" align="right" nowrap> 
              <div align="left">
                <b><?php echo $this->_tpl_vars['lang_city']; ?>
*</b>
              </div>
            </td>
            <td class="even"> 
              <input type="text" name="city" size="50" maxlength="100" />
            </td>
          </tr>
		  <tr> 
            <td class="head" align="right" nowrap> 
              <div align="left">
                <b><?php echo $this->_tpl_vars['lang_country']; ?>
</b>
              </div>
            </td>
            <td class="even"> 
              <input type="text" name="country" size="50" maxlength="100" />
            </td>
          </tr>
		  <tr> 
            <td class="head" align="right" nowrap> 
              <div align="left">
                <b><?php echo $this->_tpl_vars['lang_phone']; ?>
</b>
              </div>
            </td>
            <td class="even"> 
              <input type="text" name="phone" size="20" maxlength="20" />
            </td>
          </tr>
		  <tr> 
            <td class="head" align="right" nowrap> 
              <div align="left">
                <b><?php echo $this->_tpl_vars['lang_mobile']; ?>
</b>
              </div>
            </td>
            <td class="even"> 
              <input type="text" name="mobile" size="20" maxlength="20" />
            </td>
          </tr>
		  <tr> 
            <td class="head" align="right" nowrap> 
              <div align="left">
                <b><?php echo $this->_tpl_vars['lang_fax']; ?>
</b>
              </div>
            </td>
            <td class="even"> 
              <input type="text" name="fax" size="20" maxlength="20" />
            </td>
          </tr>
		  <tr> 
            <td class="head" align="right" nowrap> 
              <div align="left">
                <b><?php echo $this->_tpl_vars['lang_contemail']; ?>
</b>
              </div>
            </td>
            <td class="even"> 
              <input type="text" name="contemail" size="50" maxlength="100" />
            </td>
          </tr>
          <tr> 
            <td class="head" align="right" nowrap> 
              <div align="left"><b><?php echo $this->_tpl_vars['lang_siteurl']; ?>
</b></div>
            </td>
            <td class="even"> 
              <input type="text" name="url" size="50" maxlength="255" />
            </td>
          </tr>
          <tr> 
            <td class="head" align="right" valign="top" nowrap> 
              <div align="left">
                <b><?php echo $this->_tpl_vars['lang_opened']; ?>
</b>
              </div>
            </td>
            <td class="even"> 
              <textarea cols="40" rows="4" class="text" name="opentime"></textarea>
			  <!--<input type="text" name="opened" size="50" maxlength="100" />-->
            </td>
          </tr>
		  <!-- end adresses extra -->
          <tr> 
            <td class="head" align="right" valign="top" nowrap> 
              <div align="left"><b><?php echo $this->_tpl_vars['lang_description']; ?>
*</b></div>
            </td>
            <td class="even"> 
              <textarea cols="40" rows="7" class="text" name="message"></textarea>
			  </td>
            <!--<td class="odd" >
			<?php echo $this->_tpl_vars['xoops_codes'];  echo $this->_tpl_vars['xoops_smilies']; ?>
</td>-->
          </tr>
          <tr>
            <td class="head" align="right" valign="top">
              <div align="left"><b><?php echo $this->_tpl_vars['lang_options']; ?>
</b></div>
            </td>
              <td class="even" >
			  <?php if ($this->_tpl_vars['notify_show']): ?>
                <input type="checkbox" name="notify" value="1"><?php echo $this->_tpl_vars['lang_notify']; ?>
</input>
              <?php endif; ?>
              </td>
          </tr>
        </table>
      <br />
      <div style="text-align: center;"><input type="submit" name="submit" class="button" value="<?php echo $this->_tpl_vars['lang_submit']; ?>
" />&nbsp;<input type="button" value="<?php echo $this->_tpl_vars['lang_cancel']; ?>
" onclick="javascript:history.go(-1)" /></div>
    </form>
  </td>
</tr>
</table>