<?php /* Smarty version 2.6.5-dev, created on 2006-05-04 10:14:32
         compiled from db:extcal_rss.html */ ?>
<?php echo '<?xml'; ?>
 version="1.0" encoding="UTF-8"<?php echo '?>'; ?>

<?php if ($this->_tpl_vars['xoops_rsscss']): ?>
    <?php echo '<?xml'; ?>
-stylesheet type="text/css" href="<?php echo $this->_tpl_vars['xoops_themecss']; ?>
"<?php echo '?>'; ?>

<?php endif; ?>
<rss version="2.0">
  <channel>
    <title><?php echo $this->_tpl_vars['channel_title']; ?>
</title>
    <link><?php echo $this->_tpl_vars['channel_link']; ?>
</link>
    <description><?php echo $this->_tpl_vars['channel_desc']; ?>
</description>
    <lastBuildDate><?php echo $this->_tpl_vars['channel_lastbuild']; ?>
</lastBuildDate>
    <docs>http://backend.userland.com/rss/</docs>
    <generator><?php echo $this->_tpl_vars['channel_generator']; ?>
</generator>
    <category><?php echo $this->_tpl_vars['channel_category']; ?>
</category>
    <managingEditor><?php echo $this->_tpl_vars['channel_editor']; ?>
</managingEditor>
    <webMaster><?php echo $this->_tpl_vars['channel_webmaster']; ?>
</webMaster>
    <language><?php echo $this->_tpl_vars['channel_language']; ?>
</language>
    <?php if ($this->_tpl_vars['image_url'] != ""): ?>
    <image>
      <title><?php echo $this->_tpl_vars['channel_title']; ?>
</title>
      <url><?php echo $this->_tpl_vars['image_url']; ?>
</url>
      <link><?php echo $this->_tpl_vars['channel_link']; ?>
</link>
      <width><?php echo $this->_tpl_vars['image_width']; ?>
</width>
      <height><?php echo $this->_tpl_vars['image_height']; ?>
</height>
    </image>
    <?php endif; ?>
    <?php if (count($_from = (array)$this->_tpl_vars['items'])):
    foreach ($_from as $this->_tpl_vars['item']):
?>
    <item>
      <title><?php echo $this->_tpl_vars['item']['title']; ?>
</title>
      <link><?php echo $this->_tpl_vars['item']['link']; ?>
</link>
      <description><?php echo $this->_tpl_vars['item']['description']; ?>
</description>
      <pubDate><?php echo $this->_tpl_vars['item']['pubdate']; ?>
</pubDate>
      <guid><?php echo $this->_tpl_vars['item']['guid']; ?>
</guid>
    </item>
    <?php endforeach; unset($_from); endif; ?>
  </channel>
</rss>