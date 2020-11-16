<?php /* Smarty version 2.6.5-dev, created on 2007-08-11 21:39:03
         compiled from db:agendax_flatview.html */ ?>
<!-- begin Agenda-X contents-->
<div align="center">
<!-- navbar -->
    <?php echo $this->_tpl_vars['agendax']['navbar']; ?>

    <?php echo $this->_tpl_vars['agendax']['date']; ?>

</div>
<div style="margin-left: 20px; margin-right:20px; margin-top: 20px">
    <?php echo $this->_tpl_vars['agendax']['previous']; ?>
&nbsp;&nbsp;<?php echo $this->_tpl_vars['agendax']['current']; ?>
&nbsp;&nbsp;<?php echo $this->_tpl_vars['agendax']['next']; ?>

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
<table width='100%' cellspacing='0' class='outer'>
  <tr> 
    <td width="65%" height="18" align='left' class="head"> 
      <?php echo $this->_tpl_vars['agendax']['edate'][$this->_sections['k']['index']]; ?>

    </td>
    <td width="35%" height="18" align='right' class="head"> 
      <?php echo $this->_tpl_vars['agendax']['adminmenu'][$this->_sections['k']['index']]; ?>

    </td>
  </tr>
  <tr> 
    <td colspan="2" align='left' valign="bottom" class='even'> 
      <?php echo $this->_tpl_vars['agendax']['title'][$this->_sections['k']['index']]; ?>

    </td>
  </tr>
  <tr> 
    <td colspan='2' class='odd' align='left'> 
      <?php echo $this->_tpl_vars['desc_caption']; ?>

      <br /><br /> <div style="text-align: justify"> 
        <?php echo $this->_tpl_vars['agendax']['description'][$this->_sections['k']['index']]; ?>

      </div>
      <br /></td>
  </tr>
  <tr> 
    <td colspan='2' class='even' align='left'> 
      <?php echo $this->_tpl_vars['contact_caption']; ?>

      &nbsp; 
      <?php echo $this->_tpl_vars['agendax']['contact'][$this->_sections['k']['index']]; ?>

      &nbsp;&nbsp;<img src='../agendax/images/home.gif' border='0' align='absmiddle' alt='<?php echo $this->_tpl_vars['agendax']['url'][$this->_sections['k']['index']]; ?>
' />&nbsp; 
      <?php echo $this->_tpl_vars['agendax']['url'][$this->_sections['k']['index']]; ?>

    </td>
  </tr>
</table>
<br /><br />
<?php endfor; endif; ?>   
</div>

<div align="center"><small><?php echo $this->_tpl_vars['agendax']['credits']; ?>
</small></div>
<!-- end of Agenda-X contents -->