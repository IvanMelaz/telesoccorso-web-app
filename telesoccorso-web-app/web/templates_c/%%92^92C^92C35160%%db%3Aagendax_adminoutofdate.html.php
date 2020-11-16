<?php /* Smarty version 2.6.5-dev, created on 2007-08-11 21:39:03
         compiled from db:agendax_adminoutofdate.html */ ?>
<!-- begin Agenda-X contents-->
<div align="center">
<!-- navbar -->
    <?php echo $this->_tpl_vars['agendax']['navbar']; ?>

    <?php echo $this->_tpl_vars['agendax']['date']; ?>

</div>
<?php if ($this->_tpl_vars['agendax']['no_content']): ?>
    <?php echo $this->_tpl_vars['agendax']['no_content']; ?>

<?php else: ?>
    <?php echo $this->_tpl_vars['agendax']['content']; ?>

<?php endif; ?>

<div align="center"><small><?php echo $this->_tpl_vars['agendax']['credits']; ?>
</small></div>
<!-- end of Agenda-X contents -->