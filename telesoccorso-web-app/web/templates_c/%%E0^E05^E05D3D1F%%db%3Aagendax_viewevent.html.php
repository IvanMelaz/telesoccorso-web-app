<?php /* Smarty version 2.6.5-dev, created on 2007-08-11 21:39:03
         compiled from db:agendax_viewevent.html */ ?>
<!-- begin Agenda-X contents-->
<div align="center">
<!-- navbar -->
    <?php echo $this->_tpl_vars['agendax']['navbar']; ?>

    <?php echo $this->_tpl_vars['agendax']['date']; ?>

</div>
<div align=center>
   <?php echo $this->_tpl_vars['agendax']['title']['caption']; ?>
 : <?php echo $this->_tpl_vars['agendax']['title']['body']; ?>
 (<?php echo $this->_tpl_vars['agendax']['category']['caption']; ?>
 : <?php echo $this->_tpl_vars['agendax']['category']['body']; ?>
)
   <br />
   <?php echo $this->_tpl_vars['agendax']['edate']['caption']; ?>
 : <?php echo $this->_tpl_vars['agendax']['edate']['body']; ?>

    <br /><br />
    <div style="margin-left: 120px; margin-right:120px; text-align: justify">
    <?php echo $this->_tpl_vars['agendax']['description']['body']; ?>

    </div>
    <br /><br />
    <?php echo $this->_tpl_vars['agendax']['rpt']; ?>

    <br /><br />
    <?php echo $this->_tpl_vars['agendax']['contact']['caption']; ?>
 : <?php echo $this->_tpl_vars['agendax']['contact']['body']; ?>

    <br />
    <?php echo $this->_tpl_vars['agendax']['url']['caption']; ?>
 : <?php echo $this->_tpl_vars['agendax']['url']['body']; ?>
 |
    <?php echo $this->_tpl_vars['agendax']['email']['caption']; ?>
 : <?php echo $this->_tpl_vars['agendax']['email']['body']; ?>

    <br /><br />
    <?php echo $this->_tpl_vars['agendax']['image']; ?>

<br />
<div align=center><?php echo $this->_tpl_vars['agendax']['backLink']; ?>
<br />
<br />
<?php echo $this->_tpl_vars['agendax']['searchform']; ?>
<br />
</div><br /><br />
<div align="center"><small><?php echo $this->_tpl_vars['agendax']['credits']; ?>
</small></div>
<!-- end of Agenda-X contents -->