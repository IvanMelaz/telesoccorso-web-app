<?php /* Smarty version 2.6.5-dev, created on 2007-08-11 20:43:01
         compiled from db:pical_coming_schedule.html */ ?>
<?php if ($this->_tpl_vars['block']['num_rows'] == 0): ?>
  <?php echo $this->_tpl_vars['block']['lang_PICAL_MB_NOEVENT']; ?>

<?php endif; ?>

  <dl>
    <?php if (count($_from = (array)$this->_tpl_vars['block']['events'])):
    foreach ($_from as $this->_tpl_vars['event']):
?>
      <dt>
        <?php if ($this->_tpl_vars['event']['distance'] == 0): ?>
          <font size='2'><img border='0' src='<?php echo $this->_tpl_vars['block']['images_url']; ?>
/<?php echo $this->_tpl_vars['event']['dot_gif']; ?>
' />&nbsp;&nbsp;<?php echo $this->_tpl_vars['block']['lang_PICAL_MB_CONTINUING']; ?>
 - <?php echo $this->_tpl_vars['event']['end_desc']; ?>
</font>
        <?php elseif ($this->_tpl_vars['event']['distance'] == 1): ?>
          <font size='2'><img border='0' src='<?php echo $this->_tpl_vars['block']['images_url']; ?>
/<?php echo $this->_tpl_vars['event']['dot_gif']; ?>
' />&nbsp;&nbsp;<?php echo $this->_tpl_vars['event']['start_desc']; ?>
 - <?php echo $this->_tpl_vars['event']['end_desc']; ?>
</font>
        <?php elseif ($this->_tpl_vars['event']['distance'] == 2): ?>
          <font size='2'><img border='0' src='<?php echo $this->_tpl_vars['block']['images_url']; ?>
/<?php echo $this->_tpl_vars['event']['dot_gif']; ?>
' />&nbsp;&nbsp;<?php echo $this->_tpl_vars['event']['start_desc']; ?>
</font>
        <?php else: ?>
          <font size='2'><img border='0' src='<?php echo $this->_tpl_vars['block']['images_url']; ?>
/<?php echo $this->_tpl_vars['event']['dot_gif']; ?>
' />&nbsp;&nbsp;<?php echo $this->_tpl_vars['event']['start_desc']; ?>
</font>
        <?php endif; ?>
      </dt>
      <dd style='margin-left:20px;'>
        <font size='2'><a href='<?php echo $this->_tpl_vars['block']['get_target']; ?>
?smode=Daily&amp;action=View&amp;event_id=<?php echo $this->_tpl_vars['event']['id']; ?>
&amp;caldate=<?php echo $this->_tpl_vars['block']['caldate']; ?>
' class='calsummary'><?php echo $this->_tpl_vars['event']['summary']; ?>
</a></font>
      </dd>
    <?php endforeach; unset($_from); endif; ?>
  </dl>

  <?php if ($this->_tpl_vars['block']['num_rows_rest'] > 0): ?>
    <table border='0' cellspacing='0' cellpadding='0' width='100%'>
      <tr>
        <td align='right'><small><?php echo $this->_tpl_vars['block']['lang_PICAL_MB_RESTEVENT_PRE']; ?>
 <?php echo $this->_tpl_vars['block']['num_rows_rest']; ?>
 <?php echo $this->_tpl_vars['block']['lang_PICAL_MB_RESTEVENT_SUF']; ?>
</small></td>
      </tr>
    </table>
  <?php endif; ?>

  <?php if ($this->_tpl_vars['block']['insertable'] <> false): ?>
    <dl>
      <dt>
        &nbsp; <font size='2'><a href='<?php echo $this->_tpl_vars['block']['get_target']; ?>
?smode=Daily&amp;action=Edit&amp;caldate=<?php echo $this->_tpl_vars['block']['caldate']; ?>
'><img src='<?php echo $this->_tpl_vars['block']['images_url']; ?>
/addevent.gif' border='0' width='14' height='12' /><?php echo $this->_tpl_vars['block']['lang_PICAL_MB_ADDEVENT']; ?>
</a></font>
      </dt>
    </dl>
  <?php endif; ?>