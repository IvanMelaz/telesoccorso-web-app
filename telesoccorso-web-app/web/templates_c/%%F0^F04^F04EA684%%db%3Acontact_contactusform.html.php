<?php /* Smarty version 2.6.5-dev, created on 2006-12-29 13:21:01
         compiled from db:contact_contactusform.html */ ?>
<?php require_once(SMARTY_DIR . 'core' . DIRECTORY_SEPARATOR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'db:contact_contactusform.html', 12, false),)), $this); ?>
<?php echo $this->_tpl_vars['contactform']['javascript']; ?>

<form name="<?php echo $this->_tpl_vars['contactform']['name']; ?>
" action="<?php echo $this->_tpl_vars['contactform']['action']; ?>
" method="<?php echo $this->_tpl_vars['contactform']['method']; ?>
" <?php echo $this->_tpl_vars['contactform']['extra']; ?>
>
  <table class="outer" cellspacing="1">
    <tr>
    <th colspan="2"><?php echo $this->_tpl_vars['contactform']['title']; ?>
</th>
    </tr>
    <!-- start of form elements loop -->
    <?php if (count($_from = (array)$this->_tpl_vars['contactform']['elements'])):
    foreach ($_from as $this->_tpl_vars['element']):
?>
      <?php if ($this->_tpl_vars['element']['hidden'] != true): ?>
      <tr>
        <td class="head"><?php echo $this->_tpl_vars['element']['caption']; ?>
</td>
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