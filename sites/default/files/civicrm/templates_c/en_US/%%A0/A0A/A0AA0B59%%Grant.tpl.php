<?php /* Smarty version 2.6.26, created on 2011-01-27 10:18:30
         compiled from CRM/Grant/Form/Grant.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'ts', 'CRM/Grant/Form/Grant.tpl', 29, false),array('modifier', 'crmDate', 'CRM/Grant/Form/Grant.tpl', 80, false),)), $this); ?>

<?php if ($this->_tpl_vars['action'] == 1 && $this->_tpl_vars['context'] != 'standalone'): ?>
	<h3><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>New Grant<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h3>
<?php elseif ($this->_tpl_vars['action'] == 2): ?>
	<h3><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Edit Grant<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h3>
<?php elseif ($this->_tpl_vars['action'] == 8): ?>
	<h3><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Delete Grant<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h3>
<?php endif; ?>

<div class="crm-block crm-form-block crm-grant-form-block">

  <?php if ($this->_tpl_vars['action'] == 8): ?> 
      <div class="messages status">
             <p><div class="icon inform-icon"></div>&nbsp;
             <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Are you sure you want to delete this Grant?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>This operation cannot be undone.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
             <p><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Grant/Form/Task.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></p>
      </div>
  <?php else: ?>

<div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div> 	

		<table class="form-layout-compressed">  
		    <?php if ($this->_tpl_vars['context'] == 'standalone'): ?>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Form/NewContact.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <?php endif; ?>
			<tr class="crm-grant-form-block-status_id">
			     <td class="label"><?php echo $this->_tpl_vars['form']['status_id']['label']; ?>
</td>
			     <td><?php echo $this->_tpl_vars['form']['status_id']['html']; ?>
</td>
			</tr>   
			<tr class="crm-grant-form-block-grant_type_id">
			     <td class="label"><?php echo $this->_tpl_vars['form']['grant_type_id']['label']; ?>
</td>
			     <td><?php echo $this->_tpl_vars['form']['grant_type_id']['html']; ?>
</td>
			</tr>   
			<tr class="crm-grant-form-block-amount_total">
			     <td class="label"><?php echo $this->_tpl_vars['form']['amount_total']['label']; ?>
</td>
			     <td><?php echo $this->_tpl_vars['form']['amount_total']['html']; ?>
</td>
			</tr>
			<tr class="crm-grant-form-block-amount_requested">
			     <td class="label"><?php echo $this->_tpl_vars['form']['amount_requested']['label']; ?>
</td>
			     <td><?php echo $this->_tpl_vars['form']['amount_requested']['html']; ?>
<br />
                	     <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Amount requested for grant in original currency (if different).<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td>
		        </tr>
			<tr class="crm-grant-form-block-amount_granted">
			     <td class="label"><?php echo $this->_tpl_vars['form']['amount_granted']['label']; ?>
</td>
			     <td><?php echo $this->_tpl_vars['form']['amount_granted']['html']; ?>
</td>
		        </tr>

			<tr class="crm-grant-form-block-application_received_date">
			     <td class="label"><?php echo $this->_tpl_vars['form']['application_received_date']['label']; ?>
</td>
				<td>
    				<?php if ($this->_tpl_vars['hideCalendar'] != true): ?>
                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/jcalendar.tpl", 'smarty_include_vars' => array('elementName' => 'application_received_date')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    <?php else: ?>
                        <?php echo ((is_array($_tmp=$this->_tpl_vars['form']['application_received_date']['html'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>

                    <?php endif; ?>
				</td>
			</tr>
			<tr class="crm-grant-form-block-decision_date"><td class="label"><?php echo $this->_tpl_vars['form']['decision_date']['label']; ?>
</td>
			<td><?php if ($this->_tpl_vars['hideCalendar'] != true): ?>
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/jcalendar.tpl", 'smarty_include_vars' => array('elementName' => 'decision_date')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                <?php else: ?>
                    <?php echo ((is_array($_tmp=$this->_tpl_vars['form']['decision_date']['html'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>

                <?php endif; ?>
			<br />
                <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Date on which the grant decision was finalized.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td></tr>
			<tr class="crm-grant-form-block-money_transfer_date"><td class="label"><?php echo $this->_tpl_vars['form']['money_transfer_date']['label']; ?>
</td>
				<td><?php if ($this->_tpl_vars['hideCalendar'] != true): ?>
                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/jcalendar.tpl", 'smarty_include_vars' => array('elementName' => 'money_transfer_date')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    <?php else: ?>
                        <?php echo ((is_array($_tmp=$this->_tpl_vars['form']['money_transfer_date']['html'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>

                    <?php endif; ?><br />
                    <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Date on which the grant money was transferred.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td></tr>
			<tr class="crm-grant-form-block-grant_due_date"><td class="label"><?php echo $this->_tpl_vars['form']['grant_due_date']['label']; ?>
</td>
				<td>
				    <?php if ($this->_tpl_vars['hideCalendar'] != true): ?>
                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/jcalendar.tpl", 'smarty_include_vars' => array('elementName' => 'grant_due_date')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    <?php else: ?>
                        <?php echo ((is_array($_tmp=$this->_tpl_vars['form']['grant_due_date']['html'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>

                    <?php endif; ?>
				</td>
			</tr>
			<tr class="crm-grant-form-block-grant_report_received"><td class="label"><?php echo $this->_tpl_vars['form']['grant_report_received']['label']; ?>
</td><td><?php echo $this->_tpl_vars['form']['grant_report_received']['html']; ?>
</td></tr>
			<tr class="crm-grant-form-block-rationale"><td class="label"><?php echo $this->_tpl_vars['form']['rationale']['label']; ?>
</td><td><?php echo $this->_tpl_vars['form']['rationale']['html']; ?>
</td></tr>
			<tr class="crm-grant-form-block-note">
			     <td class="label"><?php echo $this->_tpl_vars['form']['note']['label']; ?>
</td>
			     <td><?php echo $this->_tpl_vars['form']['note']['html']; ?>
</td>
			</tr>

		</table>
		
		<div class="crm-grant-form-block-custom_data">
		     <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Custom/Form/CustomData.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</div>
		<div class="crm-grant-form-block-attachment">
		     <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Form/attachment.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</div>

   <?php endif; ?>
<div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
</div>