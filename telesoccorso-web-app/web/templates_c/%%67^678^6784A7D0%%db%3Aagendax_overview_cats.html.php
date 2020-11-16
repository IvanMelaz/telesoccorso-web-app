<?php /* Smarty version 2.6.5-dev, created on 2007-08-11 21:39:03
         compiled from db:agendax_overview_cats.html */ ?>
<!-- begin Agenda-X contents-->
<div align="center">
<!-- navbar -->
    <?php echo $this->_tpl_vars['agendax']['navbar']; ?>

    <?php echo $this->_tpl_vars['agendax']['date']; ?>

</div>
<div style="margin-left:150px; margin-top:20px">
<?php if ($this->_tpl_vars['agendax']['empty'] == 'true'): ?>
   <?php echo $this->_tpl_vars['agendax']['noresult']; ?>
<br /><br />
<?php else: ?>
   <div class=mainCategory> <?php echo $this->_tpl_vars['agendax']['catList']; ?>
 <br /><br /></div>
     <div>
     <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['agendax']['categories']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
        <li><?php echo $this->_tpl_vars['agendax']['categories'][$this->_sections['k']['index']]; ?>
(<?php echo $this->_tpl_vars['agendax']['eventNb'][$this->_sections['k']['index']]; ?>
) <?php echo $this->_tpl_vars['agendax']['edit'][$this->_sections['k']['index']]; ?>
</li>
     <?php endfor; endif; ?>
     <?php echo $this->_tpl_vars['agendax']['addcat']; ?>

   </div>           
<?php endif; ?>
<p><?php echo $this->_tpl_vars['agendax']['searchform']; ?>
</p>
</div>
<div align="center"><small><?php echo $this->_tpl_vars['agendax']['credits']; ?>
</small></div>
<!-- end of Agenda-X contents -->