<?php /* Smarty version 2.6.5-dev, created on 2007-08-11 21:48:07
         compiled from db:addresses_ratelink.html */ ?>
<br /><br />

<p align="center">
    <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/addresses/index.php"><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/addresses/images/logo.gif" border="0" alt="" /></a>
</p>

<hr size=1 noshade>
<table border=0 cellpadding=1 cellspacing=0 width="80%">
  <tr>
    <td>
      <h4><?php echo $this->_tpl_vars['link']['title']; ?>
</h4>
      <ul>
     	<li><?php echo $this->_tpl_vars['lang_voteonce']; ?>

     	<li><?php echo $this->_tpl_vars['lang_ratingscale']; ?>

     	<li><?php echo $this->_tpl_vars['lang_beobjective']; ?>

     	<li><?php echo $this->_tpl_vars['lang_donotvote']; ?>

      </ul>
    </td>
  </tr>
  <tr>
    <td align="center">
      <form method="post" action="ratelink.php">
        <input type="hidden" name="lid" value="<?php echo $this->_tpl_vars['link']['id']; ?>
">
        <input type="hidden" name="cid" value="<?php echo $this->_tpl_vars['link']['cid']; ?>
">
     	<select name="rating"><option>--</option><option>10</option><option>9</option><option>8</option><option>7</option><option>6</option><option>5</option><option>4</option><option>3</option><option>2</option><option>1</option></select>&nbsp;&nbsp;
        <input type="submit" name="submit" value="<?php echo $this->_tpl_vars['lang_rateit']; ?>
" /><input type=button value="<?php echo $this->_tpl_vars['lang_cancel']; ?>
" onclick="location='<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/addresses/singlelink.php?cid=<?php echo $this->_tpl_vars['link']['cid']; ?>
&amp;lid=<?php echo $this->_tpl_vars['link']['id']; ?>
'" />
      </form>
    </td>
  </tr>
</table>