<?php /* Smarty version 2.6.5-dev, created on 2007-08-11 21:39:03
         compiled from db:agendax_eventform.html */ ?>
<?php require_once(SMARTY_DIR . 'core' . DIRECTORY_SEPARATOR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'db:agendax_eventform.html', 17, false),)), $this); ?>
<!-- begin Agenda-X contents-->
<div align="center">
<!-- navbar -->
    <?php echo $this->_tpl_vars['agendax']['navbar']; ?>

    <?php echo $this->_tpl_vars['agendax']['date']; ?>

</div>
<form name="<?php echo $this->_tpl_vars['agendax']['name']; ?>
" action="<?php echo $this->_tpl_vars['agendax']['action']; ?>
" method="<?php echo $this->_tpl_vars['agendax']['method']; ?>
" <?php echo $this->_tpl_vars['agendax']['extra']; ?>
>
  <table class="outer" cellspacing="1">
    <tr>
    <th colspan="2"><br /><?php echo $this->_tpl_vars['agendax']['title']; ?>
&nbsp;</th>
    </tr>
    <!-- start of form elements loop -->
    <?php if (count($_from = (array)$this->_tpl_vars['agendax']['elements'])):
    foreach ($_from as $this->_tpl_vars['element']):
?>
      <?php if ($this->_tpl_vars['element']['hidden'] != true): ?>
      <tr>
        <td class="head" align="right" valign="top"><?php echo $this->_tpl_vars['element']['caption']; ?>
&nbsp;</td>
        <td class="<?php echo smarty_function_cycle(array('values' => "even,odd"), $this);?>
" align="left" valign="top"><?php echo $this->_tpl_vars['element']['body']; ?>
</td>
      </tr>
      <?php else: ?>
      <?php echo $this->_tpl_vars['element']['body']; ?>

      <?php endif; ?>
    <?php endforeach; unset($_from); endif; ?>
    <!-- end of form elements loop -->
  </table>
</form>
<div align="center"><small><?php echo $this->_tpl_vars['agendax']['credits']; ?>
</small></div>
<!-- end of Agenda-X contents -->