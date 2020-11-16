<?php /* Smarty version 2.6.5-dev, created on 2007-08-11 21:39:03
         compiled from db:agendax_searchresults.html */ ?>
<!-- begin Agenda-X contents-->
<div align="center">
<!-- navbar -->
    <?php echo $this->_tpl_vars['agendax']['navbar']; ?>

    <?php echo $this->_tpl_vars['agendax']['date']; ?>

</div>
<div style="margin-left:60px; margin-top:20px">
<?php echo $this->_tpl_vars['agendax']['searchTitle']; ?>

<?php if ($this->_tpl_vars['agendax']['resultsFound'] == 'yes'): ?>
    <?php echo $this->_tpl_vars['agendax']['resultsNb']; ?>

    <?php echo $this->_tpl_vars['agendax']['eventsOf']; ?>
&nbsp;:&nbsp;<?php echo $this->_tpl_vars['agendax']['year']; ?>
&nbsp;<?php echo $this->_tpl_vars['agendax']['month']; ?>
&nbsp;<?php echo $this->_tpl_vars['agendax']['day']; ?>
&nbsp;<?php echo $this->_tpl_vars['agendax']['week']; ?>

    <br /><br />
    <?php echo $this->_tpl_vars['agendax']['prevNext']; ?>
<br /><br />
    <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['agendax']['results']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
        <?php echo $this->_tpl_vars['agendax']['results'][$this->_sections['k']['index']]['title']; ?>
 ( <?php echo $this->_tpl_vars['agendax']['results'][$this->_sections['k']['index']]['date']; ?>
 ) | <?php echo $this->_tpl_vars['agendax']['results'][$this->_sections['k']['index']]['category']; ?>
<br />
        <?php echo $this->_tpl_vars['agendax']['results'][$this->_sections['k']['index']]['description']; ?>
<br />
        <?php echo $this->_tpl_vars['agendax']['results'][$this->_sections['k']['index']]['contact']; ?>
 &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['agendax']['results'][$this->_sections['k']['index']]['readmore']; ?>
<br /><br />
    <?php endfor; endif; ?>
<?php else: ?>
    <?php echo $this->_tpl_vars['agendax']['noresults']; ?>
<br /><br />
<?php endif; ?>    
<?php echo $this->_tpl_vars['agendax']['searchform']; ?>
<br />
</div>
<div align="center"><small><?php echo $this->_tpl_vars['agendax']['credits']; ?>
</small></div>
<!-- end of Agenda-X contents -->