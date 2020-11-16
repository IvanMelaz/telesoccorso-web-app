<?php /* Smarty version 2.6.5-dev, created on 2007-08-11 21:39:03
         compiled from db:agendax_dayview.html */ ?>
<!-- begin Agenda-X contents-->
<div align="center">
<!-- navbar -->
    <?php echo $this->_tpl_vars['agendax']['navbar']; ?>

    <?php echo $this->_tpl_vars['agendax']['date']; ?>

</div>
<div style="margin-left:40px; margin-top:20px;">
<?php echo $this->_tpl_vars['agendax']['eventsOf']; ?>
&nbsp;:&nbsp;<?php echo $this->_tpl_vars['agendax']['eventdate']; ?>

<br /><br />
<?php echo $this->_tpl_vars['agendax']['navleft']; ?>
&nbsp;&nbsp;<?php echo $this->_tpl_vars['agendax']['navcenter']; ?>
&nbsp;&nbsp;<?php echo $this->_tpl_vars['agendax']['navright']; ?>

<br /><br />
<?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['agendax']['title']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['k']['show'] = true;
$this->_sections['k']['max'] = $this->_sections['k']['loop'];
$this->_sections['k']['step'] = 1;
$this->_sections['k']['start'] = $this->_sections['k']['step'] > 0 ? 0 : $this->_sections['k']['loop']-1;
if ($this->_sections['k']['show']) {
    $this->_sections['k']['total'] = $this->_sections['k']['loop'];
    if ($this->_sections['k']['total'] == 0)
        $this->_sections['k']['show'] = false;
} else
    $this->_sections['k']['total'] = 0;
if ($this->_sections['k']['show']):

            for ($this->_sections['k']['index'] = $this->_sections['k']['start'], $this->_sections['k']['iteration'] = 1;
                 $this->_sections['k']['iteration'] <= $this->_sections['k']['total'];
                 $this->_sections['k']['index'] += $this->_sections['k']['step'], $this->_sections['k']['iteration']++):
$this->_sections['k']['rownum'] = $this->_sections['k']['iteration'];
$this->_sections['k']['index_prev'] = $this->_sections['k']['index'] - $this->_sections['k']['step'];
$this->_sections['k']['index_next'] = $this->_sections['k']['index'] + $this->_sections['k']['step'];
$this->_sections['k']['first']      = ($this->_sections['k']['iteration'] == 1);
$this->_sections['k']['last']       = ($this->_sections['k']['iteration'] == $this->_sections['k']['total']);
?>
    <?php echo $this->_tpl_vars['agendax']['title'][$this->_sections['k']['index']]; ?>
&nbsp;|&nbsp;<?php echo $this->_tpl_vars['agendax']['category'][$this->_sections['k']['index']]; ?>
&nbsp;:&nbsp;<?php echo $this->_tpl_vars['agendax']['categoryName'][$this->_sections['k']['index']]; ?>
<br />
    <?php echo $this->_tpl_vars['agendax']['description'][$this->_sections['k']['index']]; ?>

    <?php echo $this->_tpl_vars['agendax']['readmore'][$this->_sections['k']['index']]; ?>
<br /><br />
<?php endfor; endif; ?>
</div>
<div align="center"><?php echo $this->_tpl_vars['agendax']['backLink']; ?>
</div><br />
<div align="center"><small><?php echo $this->_tpl_vars['agendax']['credits']; ?>
</small></div>
<!-- end of Agenda-X contents -->