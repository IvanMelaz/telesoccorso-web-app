<?php /* Smarty version 2.6.5-dev, created on 2007-01-19 14:43:23
         compiled from db:mydownloads_modfile.html */ ?>
<br /><br />

<p align="center">
    <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/mydownloads/index.php"><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/mydownloads/images/logo-en.gif" alt="" /></a>
</p>

<br /><br /><br />
<h4><?php echo $this->_tpl_vars['lang_requestmod']; ?>
</h4>
<form action="modfile.php" method="post">
<table width="80%">
  <tr>
    <td align="right"><?php echo $this->_tpl_vars['lang_fileid']; ?>
</td>
    <td><b><?php echo $this->_tpl_vars['file']['id']; ?>
</b></td>
  </tr>
  <tr>
    <td align="right"><?php echo $this->_tpl_vars['lang_sitetitle']; ?>
</td>
    <td><input type="text" name="title" size="50" maxlength="100" value="<?php echo $this->_tpl_vars['file']['title']; ?>
"></td>
  </tr>
  <tr>
    <td align="right"><?php echo $this->_tpl_vars['lang_siteurl']; ?>
</td>
    <td><input type="text" name="url" size="50" maxlength="100" value="<?php echo $this->_tpl_vars['file']['url']; ?>
"></td>
  </tr>
  <tr>
    <td align="right"><?php echo $this->_tpl_vars['lang_category']; ?>
</td>
    <td><?php echo $this->_tpl_vars['category_selbox']; ?>
</td>
  </tr>
  <tr>
    <td></td><td></td>
  </tr>
  <tr>
    <td align="right"><?php echo $this->_tpl_vars['lang_homepage']; ?>
</td>
    <td><input type="text" name="homepage" size="50" maxlength="100" value="<?php echo $this->_tpl_vars['file']['homepage']; ?>
"></td>
  </tr>
  <tr>
    <td align="right"><?php echo $this->_tpl_vars['lang_version']; ?>
</td>
    <td><input type="text" name="version" size="10" maxlength="20" value="<?php echo $this->_tpl_vars['file']['version']; ?>
"></td>
  </tr>
  <tr>
    <td align="right"><?php echo $this->_tpl_vars['lang_size']; ?>
</td>
    <td><input type="text" name="size" size="10" maxlength="20" value="<?php echo $this->_tpl_vars['file']['size']; ?>
"> <?php echo $this->_tpl_vars['lang_bytes']; ?>
</td>
  </tr>
  <tr>
    <td align="right"><?php echo $this->_tpl_vars['lang_platform']; ?>
</td>
    <td><input type="text" name="platform" size="50" maxlength="50" value="<?php echo $this->_tpl_vars['file']['plataform']; ?>
"></td>
  </tr>
  <tr>
    <td align="right" valign="top"><?php echo $this->_tpl_vars['lang_description']; ?>
</td>
    <td><textarea name=description cols=60 rows=5><?php echo $this->_tpl_vars['file']['description']; ?>
</textarea></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><br /><input type="hidden" name="logourl" value="<?php echo $this->_tpl_vars['file']['logourl']; ?>
"></input><input type="hidden" name="lid" value="<?php echo $this->_tpl_vars['file']['id']; ?>
"></input><input type="submit" name="submit" value="<?php echo $this->_tpl_vars['lang_sendrequest']; ?>
"></input>&nbsp;<input type=button value="<?php echo $this->_tpl_vars['lang_cancel']; ?>
" onclick="javascript:history.go(-1)"></input></td>
  </tr>
</table>
</form>