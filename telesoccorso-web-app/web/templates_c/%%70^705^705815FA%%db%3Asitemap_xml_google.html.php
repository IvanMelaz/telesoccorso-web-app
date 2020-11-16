<?php /* Smarty version 2.6.5-dev, created on 2006-05-04 11:09:39
         compiled from db:sitemap_xml_google.html */ ?>
<?php echo '<?xml'; ?>
 version="1.0" encoding="UTF-8"<?php echo '?>'; ?>

<urlset xmlns="http://www.google.com/schemas/sitemap/0.84">
<url>
<loc><?php echo $this->_tpl_vars['xoops_url']; ?>
/</loc>
<lastmod><?php echo $this->_tpl_vars['lastmod']; ?>
</lastmod>
<priority>1.0</priority>
</url>

<?php if (isset($this->_foreach['i'])) unset($this->_foreach['i']);
$this->_foreach['i']['total'] = count($_from = (array)$this->_tpl_vars['sitemap']['modules']);
$this->_foreach['i']['show'] = $this->_foreach['i']['total'] > 0;
if ($this->_foreach['i']['show']):
$this->_foreach['i']['iteration'] = 0;
    foreach ($_from as $this->_tpl_vars['module']):
        $this->_foreach['i']['iteration']++;
        $this->_foreach['i']['first'] = ($this->_foreach['i']['iteration'] == 1);
        $this->_foreach['i']['last']  = ($this->_foreach['i']['iteration'] == $this->_foreach['i']['total']);
?>


  <?php if ($this->_tpl_vars['module']['name']): ?>
    <url>
      <loc><?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['module']['directory']; ?>
/</loc>
      <?php if ($this->_tpl_vars['module']['lastmod']): ?><lastmod><?php echo $this->_tpl_vars['module']['lastmod']; ?>
</lastmod><?php endif; ?>
    </url>

    <?php if (count($_from = (array)$this->_tpl_vars['module']['parent'])):
    foreach ($_from as $this->_tpl_vars['parent']):
?>
      <url>
        <loc><?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['module']['directory']; ?>
/<?php echo $this->_tpl_vars['parent']['url']; ?>
</loc>
        <?php if ($this->_tpl_vars['parent']['lastmod']): ?><lastmod><?php echo $this->_tpl_vars['parent']['lastmod']; ?>
</lastmod><?php endif; ?>
      </url>
      
      <?php if ($this->_tpl_vars['show_subcategoris']): ?>
      <?php if (count($_from = (array)$this->_tpl_vars['parent']['child'])):
    foreach ($_from as $this->_tpl_vars['child']):
?>
        <url>
          <loc><?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['module']['directory']; ?>
/<?php echo $this->_tpl_vars['child']['url']; ?>
</loc>
          <?php if ($this->_tpl_vars['child']['lastmod']): ?><lastmod><?php echo $this->_tpl_vars['child']['lastmod']; ?>
</lastmod><?php endif; ?>
        </url>
      <?php endforeach; unset($_from); endif; ?>
      <?php endif; ?>

    <?php endforeach; unset($_from); endif; ?>
    <?php if (count($_from = (array)$this->_tpl_vars['module']['sublinks'])):
    foreach ($_from as $this->_tpl_vars['sublink']):
?>
      <url>
        <loc><?php echo $this->_tpl_vars['sublink']['url']; ?>
</loc>
        <?php if ($this->_tpl_vars['sublink']['lastmod']): ?><lastmod><?php echo $this->_tpl_vars['sublink']['lastmod']; ?>
</lastmod><?php endif; ?>
      </url>
    <?php endforeach; unset($_from); endif; ?>
  <?php endif; ?>

<?php endforeach; unset($_from); endif; ?>

</urlset>