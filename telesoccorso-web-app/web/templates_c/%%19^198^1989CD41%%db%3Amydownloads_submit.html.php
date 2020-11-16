<?php /* Smarty version 2.6.5-dev, created on 2007-01-19 14:43:23
         compiled from db:mydownloads_submit.html */ ?>
<br /><br />

<p align="center">
    <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/mydownloads/index.php"><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/mydownloads/images/logo-en.gif" alt="" /></a>
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
        </ul><br />
    <form action="submit.php" method="post">
        <table class ="outer" width="80%">
          <tr> 
            <td class="itemHead" align="left" nowrap colspan="2"><b><?php echo $this->_tpl_vars['lang_submitcath']; ?>
</b> 
            </td>
          </tr>
          <tr> 
            <td class="head" align="left" nowrap><b><?php echo $this->_tpl_vars['lang_sitetitle']; ?>
</b></td>
            <td class="even"> 
              <input type="text" name="title" size="50" maxlength="100" />
            </td>
          </tr>
          <tr> 
            <td class="head" align="left" nowrap><b><?php echo $this->_tpl_vars['lang_siteurl']; ?>
</b></td>
            <td class="odd" > 
              <input type="text" name="url" size="50" maxlength="250" value="http://" />
            </td>
          </tr>
          <tr> 
            <td class="head" align="left" nowrap><b><?php echo $this->_tpl_vars['lang_category']; ?>
</b></td>
            <td class="even"><?php echo $this->_tpl_vars['category_selbox']; ?>
</td>
          </tr>
          <tr> 
            <td class="head" align="left"><b><?php echo $this->_tpl_vars['lang_homepage']; ?>
</b></td>
            <td class="odd" > 
              <input type="text" name="homepage" size="50" maxlength="100" value="<?php echo $this->_tpl_vars['file']['homepage']; ?>
">
            </td>
          </tr>
          <tr> 
            <td class="head" align="left"><b><?php echo $this->_tpl_vars['lang_version']; ?>
</b></td>
            <td class="even"> 
              <input type="text" name="version" size="10" maxlength="20" value="<?php echo $this->_tpl_vars['file']['version']; ?>
">
            </td>
          </tr>
          <tr> 
            <td class="head" align="left"><b><?php echo $this->_tpl_vars['lang_size']; ?>
</b></td>
            <td class="odd"> 
              <input type="text" name="size" size="10" maxlength="20" value="<?php echo $this->_tpl_vars['file']['size']; ?>
">
              <?php echo $this->_tpl_vars['lang_bytes']; ?>
</td>
          </tr>
          <tr> 
            <td class="head" align="left"><b><?php echo $this->_tpl_vars['lang_platform']; ?>
</b></td>
            <td class="even"> 
              <input type="text" name="platform" size="50" maxlength="50" value="<?php echo $this->_tpl_vars['file']['plataform']; ?>
">
            </td>
          </tr>
          <tr> 
            <td class="head" align="left" valign="top" nowrap><b><?php echo $this->_tpl_vars['lang_description']; ?>
</b></td>
            <td class="odd"><?php echo $this->_tpl_vars['xoops_codes'];  echo $this->_tpl_vars['xoops_smilies']; ?>
</td>
          </tr>
          <tr>
            <td class="head"><b><?php echo $this->_tpl_vars['lang_options']; ?>
</b></td>
            <td class="even">
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