<?php /* Smarty version 2.6.5-dev, created on 2007-08-11 20:43:00
         compiled from db:pical_print.html */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->_tpl_vars['charset']; ?>
" />
    <title><?php echo $this->_tpl_vars['sitename']; ?>
</title>
    <meta name="COPYRIGHT" content="Copyright (c) 2004 by <?php echo $this->_tpl_vars['sitename']; ?>
" />
    <meta name="GENERATOR" content="piCal with XOOPS" />
    <style><!--
	table.outer {
		border-collapse: collapse; border: 1px solid black;
}
	}
	.head {
		padding: 3px; border: 1px black solid;
	}
	.even {
		padding: 3px; border: 1px black solid;
	}
	.odd {
		padding: 3px; border: 1px black solid;
	}
	table td {
		vertical-align: top;
	}
	a {
		text-decoration: none;
	}
    --></style>
  </head>
  <body bgcolor="#ffffff" text="#000000" onload="window.print()">
    <table border="0" style="font: 12px;"><tr><td>
      <table border="0" width="640" cellpadding="0" cellspacing="1" bgcolor="#000000"><tr><td>
        <table border="0" width="640" cellpadding="20" cellspacing="1" bgcolor="#ffffff">
          <tr valign="top">
            <td>
              <?php if ($this->_tpl_vars['for_event_list'] == true): ?>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:pical_event_list.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
              <?php else: ?>
                <?php echo $this->_tpl_vars['contents']; ?>

              <?php endif; ?>
            </td>
          </tr>
        </table>
      </td></tr></table>
      <br /><br />
      <hr><br />
      <?php echo $this->_tpl_vars['lang_comesfrom']; ?>

      <br /><a href="<?php echo $this->_tpl_vars['site_url']; ?>
/"><?php echo $this->_tpl_vars['site_url']; ?>
</a>
    </td></tr></table>
  </body>
</html>