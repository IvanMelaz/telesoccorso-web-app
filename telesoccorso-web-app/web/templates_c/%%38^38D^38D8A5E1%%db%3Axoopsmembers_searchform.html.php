<?php /* Smarty version 2.6.5-dev, created on 2006-05-06 11:27:20
         compiled from db:xoopsmembers_searchform.html */ ?>
<?php require_once(SMARTY_DIR . 'core' . DIRECTORY_SEPARATOR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'db:xoopsmembers_searchform.html', 13, false),)), $this); ?>
<h4 style='text-align:left;'><?php echo $this->_tpl_vars['lang_search']; ?>
</h4>(<?php echo $this->_tpl_vars['lang_totalusers']; ?>
)

<?php echo $this->_tpl_vars['searchform']['javascript']; ?>

<b><?php echo $this->_tpl_vars['searchform']['title']; ?>
</b>
<br /><br />
<form name="<?php echo $this->_tpl_vars['searchform']['name']; ?>
" action="<?php echo $this->_tpl_vars['searchform']['action']; ?>
" method="<?php echo $this->_tpl_vars['searchform']['method']; ?>
" <?php echo $this->_tpl_vars['searchform']['extra']; ?>
>
  <table class="outer" cellpadding="4" cellspacing="1">
    <!-- start of form elements loop -->
    <?php if (count($_from = (array)$this->_tpl_vars['searchform']['elements'])):
    foreach ($_from as $this->_tpl_vars['element']):
?>
      <?php if ($this->_tpl_vars['element']['hidden'] != true): ?>
      <tr>
        <td class="head"><b><?php echo $this->_tpl_vars['element']['caption']; ?>
</b></td>
        <td class="<?php echo smarty_function_cycle(array('values' => "even,odd"), $this);?>
"><?php echo $this->_tpl_vars['element']['body']; ?>
</td>
      </tr>
      <?php else: ?>
      <?php echo $this->_tpl_vars['element']['body']; ?>

      <?php endif; ?>
    <?php endforeach; unset($_from); endif; ?>
    <!-- end of form elements loop -->
  </table>
</form>