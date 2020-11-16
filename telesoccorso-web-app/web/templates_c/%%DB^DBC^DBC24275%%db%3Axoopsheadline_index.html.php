<?php /* Smarty version 2.6.5-dev, created on 2006-05-04 07:00:24
         compiled from db:xoopsheadline_index.html */ ?>
<h4 style="text-align:left;"><?php echo $this->_tpl_vars['lang_headlines']; ?>
</h4>
<div style='padding: 1px; text-align: left;'>
      <ul style="list-style-image:url(images/rss.gif);">
      <!-- start site loop -->
      <?php if (count($_from = (array)$this->_tpl_vars['feed_sites'])):
    foreach ($_from as $this->_tpl_vars['site']):
?>
        <li>&nbsp;<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/xoopsheadline/index.php?id=<?php echo $this->_tpl_vars['site']['id']; ?>
"><?php echo $this->_tpl_vars['site']['name']; ?>
</a></li>
      <?php endforeach; unset($_from); endif; ?>
      <!-- end site loop -->
      </ul>
</div>

<?php echo $this->_tpl_vars['headline']; ?>