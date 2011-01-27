<?php /* Smarty version 2.6.26, created on 2011-01-27 10:45:52
         compiled from CRM/Profile/Form/Search.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'ts', 'CRM/Profile/Form/Search.tpl', 32, false),array('modifier', 'cat', 'CRM/Profile/Form/Search.tpl', 43, false),)), $this); ?>
<?php if (! empty ( $this->_tpl_vars['fields'] )): ?>

    <?php if ($this->_tpl_vars['groupId']): ?>
<div class="crm-accordion-wrapper crm-group-<?php echo $this->_tpl_vars['groupId']; ?>
-accordion <?php if ($this->_tpl_vars['rows']): ?>crm-accordion-closed<?php else: ?>crm-accordion-open<?php endif; ?>">
 <div class="crm-accordion-header crm-master-accordion-header">
  <div class="icon crm-accordion-pointer"></div> 
	<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Edit Search Criteria<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
 </div>
 <div class="crm-accordion-body">
    <?php else: ?>
        <div>
    <?php endif; ?>

    <table class="form-layout-compressed" id="profile">
    <?php $_from = $this->_tpl_vars['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['fieldName'] => $this->_tpl_vars['field']):
?>
        <?php $this->assign('n', $this->_tpl_vars['field']['name']); ?>
	<?php if ($this->_tpl_vars['field']['is_search_range']): ?>
	   <?php $this->assign('from', ((is_array($_tmp=$this->_tpl_vars['field']['name'])) ? $this->_run_mod_handler('cat', true, $_tmp, '_from') : smarty_modifier_cat($_tmp, '_from'))); ?>
	   <?php $this->assign('to', ((is_array($_tmp=$this->_tpl_vars['field']['name'])) ? $this->_run_mod_handler('cat', true, $_tmp, '_to') : smarty_modifier_cat($_tmp, '_to'))); ?>
	   <?php if ($this->_tpl_vars['field']['data_type'] != 'Date'): ?>
	        <tr>
        	    <td class="label"><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['from']]['label']; ?>
</td>
                <td class="description"><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['from']]['html']; ?>
&nbsp;&nbsp;<?php echo $this->_tpl_vars['form'][$this->_tpl_vars['to']]['label']; ?>
&nbsp;&nbsp;<?php echo $this->_tpl_vars['form'][$this->_tpl_vars['to']]['html']; ?>
</td>
	        </tr>
	   <?php else: ?>
       <tr>
   	       <td class="label"><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['from']]['label']; ?>
</td>
           <td class="description"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/jcalendar.tpl", 'smarty_include_vars' => array('elementName' => $this->_tpl_vars['from'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            &nbsp;&nbsp;<?php echo $this->_tpl_vars['form'][$this->_tpl_vars['to']]['label']; ?>
&nbsp;&nbsp;<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/jcalendar.tpl", 'smarty_include_vars' => array('elementName' => $this->_tpl_vars['to'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
       </tr>
	   <?php endif; ?>    
	<?php elseif ($this->_tpl_vars['field']['options_per_line']): ?>
	<tr>
        <td class="option-label"><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['n']]['label']; ?>
</td>
        <td>
	    <?php $this->assign('count', '1'); ?>
        <?php echo '<table class="form-layout-compressed"><tr>'; ?><?php echo ''; ?><?php $this->assign('index', '1'); ?><?php echo ''; ?><?php $_from = $this->_tpl_vars['form'][$this->_tpl_vars['n']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['outer'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['outer']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['outer']['iteration']++;
?><?php echo ''; ?><?php if ($this->_tpl_vars['index'] < 10): ?><?php echo ' '; ?><?php echo ''; ?><?php $this->assign('index', ($this->_tpl_vars['index']+1)); ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php if ($this->_tpl_vars['field']['html_type'] == 'CheckBox' && ($this->_foreach['outer']['iteration'] == $this->_foreach['outer']['total']) == 1): ?><?php echo ' '; ?><?php echo '</tr><tr><td class="op-checkbox" colspan="'; ?><?php echo $this->_tpl_vars['field']['options_per_line']; ?><?php echo '" style="padding-top: 0px;">'; ?><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['n']][$this->_tpl_vars['key']]['html']; ?><?php echo '</td>'; ?><?php else: ?><?php echo '<td class="labels font-light">'; ?><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['n']][$this->_tpl_vars['key']]['html']; ?><?php echo '</td>'; ?><?php if ($this->_tpl_vars['count'] == $this->_tpl_vars['field']['options_per_line']): ?><?php echo '</tr><tr>'; ?><?php $this->assign('count', '1'); ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php $this->assign('count', ($this->_tpl_vars['count']+1)); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo '</tr></table>'; ?><?php if ($this->_tpl_vars['field']['html_type'] == 'Radio' && $this->_tpl_vars['form']['formName'] == 'Search'): ?><?php echo '<span class="crm-clear-link">(<a href="#" title="unselect" onclick="unselectRadio(\''; ?><?php echo $this->_tpl_vars['n']; ?><?php echo '\', \''; ?><?php echo $this->_tpl_vars['form']['formName']; ?><?php echo '\'); return false;">'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'clear'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</a>)</span>'; ?><?php endif; ?><?php echo ''; ?>

        </td>
    </tr>
	<?php else: ?>
	    <tr>
            <td class="label"><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['n']]['label']; ?>
</td>
            <?php if ($this->_tpl_vars['n'] == 'addressee' || $this->_tpl_vars['n'] == 'email_greeting' || $this->_tpl_vars['n'] == 'postal_greeting'): ?>  
              <td class="description"> 
                 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Profile/Form/GreetingType.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
              </td> 
            <?php elseif ($this->_tpl_vars['n'] == 'group'): ?> 
	 	      <td>
	 	        <table id="selector" class="selector" style="width:auto;">
			        <tr><td><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['n']]['html']; ?>
		        </table>
		      </td>
            <?php else: ?>
                <td class="description">
                    <?php if (( $this->_tpl_vars['field']['data_type'] == 'Date' || ( ( ( $this->_tpl_vars['n'] == 'birth_date' ) || ( $this->_tpl_vars['n'] == 'deceased_date' ) ) ) )): ?>
                       <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/jcalendar.tpl", 'smarty_include_vars' => array('elementName' => $this->_tpl_vars['n'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>  
        		    <?php else: ?>       
                       <?php echo $this->_tpl_vars['form'][$this->_tpl_vars['n']]['html']; ?>

                    <?php endif; ?>
		    	<?php if (( $this->_tpl_vars['n'] == 'gender' ) || ( $this->_tpl_vars['field']['html_type'] == 'Radio' && $this->_tpl_vars['form']['formName'] == 'Search' )): ?>
			        <span class="crm-clear-link">(<a href="#" title="unselect" onclick="unselectRadio('<?php echo $this->_tpl_vars['n']; ?>
', '<?php echo $this->_tpl_vars['form']['formName']; ?>
'); return false;"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>clear<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>)</span>
	    	    <?php elseif ($this->_tpl_vars['field']['html_type'] == 'Autocomplete-Select'): ?>
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Custom/Form/AutoComplete.tpl", 'smarty_include_vars' => array('element_name' => $this->_tpl_vars['n'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        		<?php endif; ?>
		        </td>
            <?php endif; ?>
        </tr>
	<?php endif; ?>
    <?php endforeach; endif; unset($_from); ?>
    
    <?php if ($this->_tpl_vars['proximity_search']): ?>
        <tr><td colspan="2"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Form/Task/ProximityCommon.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td></tr>
    <?php endif; ?>
    
    <tr><td></td><td><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td></tr>
    </table>



<?php if ($this->_tpl_vars['groupId']): ?>

 </div><!-- /.crm-accordion-body -->
</div><!-- /.crm-accordion-wrapper -->

<?php echo '
<script type="text/javascript">
cj(function() {
   cj().crmaccordions(); 
});
</script>
'; ?>


<?php endif; ?>

<?php elseif ($this->_tpl_vars['statusMessage']): ?>
    <div class="messages status">
        <div class="icon inform-icon"></div>
        <?php echo $this->_tpl_vars['statusMessage']; ?>

    </div>
<?php else: ?>     <div class="messages status">
        <div class="icon inform-icon"></div>
        <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>No fields in this Profile have been configured as searchable. Ask the site administrator to check the Profile setup.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    </div>
<?php endif; ?>
<?php echo '
<script type="text/javascript">

cj(document).ready(function(){ 
	cj(\'#selector tr:even\').addClass(\'odd-row \');
	cj(\'#selector tr:odd \').addClass(\'even-row\');
});
</script>
'; ?>