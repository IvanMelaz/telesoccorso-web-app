<?php /* Smarty version 2.6.5-dev, created on 2020-10-18 14:13:56
         compiled from db:system_redirect.html */ ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->_tpl_vars['xoops_charset']; ?>
" />
<meta http-equiv="Refresh" content="<?php echo $this->_tpl_vars['time']; ?>
; url=<?php echo $this->_tpl_vars['url']; ?>
" />
<title><?php echo $this->_tpl_vars['xoops_sitename']; ?>
</title>
<link rel="stylesheet" type="text/css" media="all" href="<?php echo $this->_tpl_vars['xoops_themecss']; ?>
" />
</head>
<body>
<div style="text-align:center; background-color: #EBEBEB; border-top: 1px solid #FFFFFF; border-left: 1px solid #FFFFFF; border-right: 1px solid #AAAAAA; border-bottom: 1px solid #AAAAAA; font-weight : bold;">
  <h4><?php echo $this->_tpl_vars['message']; ?>
</h4>
  <p><?php echo $this->_tpl_vars['lang_ifnotreload']; ?>
</p>
</div>
<?php if ($this->_tpl_vars['xoops_logdump'] != ''): ?><div><?php echo $this->_tpl_vars['xoops_logdump']; ?>
</div><?php endif; ?>
</body>
</html>