<?php /* Smarty version 2.6.26, created on 2010-11-16 17:18:19
         compiled from CRM/Event/Form/ManageEvent/EventInfo.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'crmURL', 'CRM/Event/Form/ManageEvent/EventInfo.tpl', 28, false),array('function', 'help', 'CRM/Event/Form/ManageEvent/EventInfo.tpl', 49, false),array('block', 'ts', 'CRM/Event/Form/ManageEvent/EventInfo.tpl', 32, false),array('modifier', 'crmReplace', 'CRM/Event/Form/ManageEvent/EventInfo.tpl', 101, false),)), $this); ?>
 
<?php if ($this->_tpl_vars['noEventTemplates']): ?>
	<?php ob_start(); ?><?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/admin/eventTemplate','q' => "reset=1"), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('etUrl', ob_get_contents());ob_end_clean(); ?>
        <div class="status message">
	<table class="form-layout">
	        <tr><td><div class="icon inform-icon"></div></td>
	            <td class="status"><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['etUrl'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>If you find that you are creating multiple events with similar settings, you may want to use the <a href='%1'>Event Templates</a> feature to streamline your workflow.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
	        </tr>
	</table>
        </div>
<?php endif; ?>
<div class="crm-block crm-form-block crm-event-manage-eventinfo-form-block">
<?php if ($this->_tpl_vars['cdType']): ?> 
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Custom/Form/CustomData.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
<?php else: ?> 
	<?php $this->assign('eventID', $this->_tpl_vars['id']); ?>
        <div class="crm-submit-buttons">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </div>
	<table class="form-layout-compressed">
    	       <?php if ($this->_tpl_vars['form']['template_id']): ?>
			<tr class="crm-event-manage-eventinfo-form-block-template_id">
				<td class="label"><?php echo $this->_tpl_vars['form']['template_id']['label']; ?>
</td>
    				<td><?php echo $this->_tpl_vars['form']['template_id']['html']; ?>
 <?php echo smarty_function_help(array('id' => "id-select-template"), $this);?>
</td>
    			</tr>
    		<?php endif; ?>
		<?php if ($this->_tpl_vars['form']['template_title']): ?>
			<tr class="crm-event-manage-eventinfo-form-block-template_title">
				<td class="label"><?php echo $this->_tpl_vars['form']['template_title']['label']; ?>
 <?php if ($this->_tpl_vars['action'] == 2): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_event','field' => 'template_title','id' => $this->_tpl_vars['eventID'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?></td>
				<td><?php echo $this->_tpl_vars['form']['template_title']['html']; ?>
 <?php echo smarty_function_help(array('id' => "id-template-title"), $this);?>
</td>
			</tr>
		<?php endif; ?>
		<tr class="crm-event-manage-eventinfo-form-block-event_type_id">
			<td class="label"><?php echo $this->_tpl_vars['form']['event_type_id']['label']; ?>
</td>
			<td><?php echo $this->_tpl_vars['form']['event_type_id']['html']; ?>
<br />
			<span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>After selecting an Event Type, this page will display any custom event fields for that type.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
		</tr>
		<tr class="crm-event-manage-eventinfo-form-block-default_role_id">
			<td class="label"><?php echo $this->_tpl_vars['form']['default_role_id']['label']; ?>
</td>
			<td><?php echo $this->_tpl_vars['form']['default_role_id']['html']; ?>
<br />
			<span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>The Role you select here is automatically assigned to people when they register online for this event (usually the default 'Attendee' role).<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
			<?php echo smarty_function_help(array('id' => "id-participant-role"), $this);?>
</td>
		</tr>
		<tr class="crm-event-manage-eventinfo-form-block-participant_listing_id">
			<td class="label"><?php echo $this->_tpl_vars['form']['participant_listing_id']['label']; ?>
</td>
			<td><?php echo $this->_tpl_vars['form']['participant_listing_id']['html']; ?>
<br />
			<span class="description"> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>To allow users to see a listing of participants, set this field to 'Name' (list names only), 'Name and Email', or 'Name, Status and Register Date'.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> 
			<?php echo smarty_function_help(array('id' => "id-listing"), $this);?>
 </span></td>
		</tr>
		<tr class="crm-event-manage-eventinfo-form-block-title">
			<td class="label"><?php echo $this->_tpl_vars['form']['title']['label']; ?>
 <?php if ($this->_tpl_vars['action'] == 2): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_event','field' => 'title','id' => $this->_tpl_vars['eventID'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?></td>
			<td><?php echo $this->_tpl_vars['form']['title']['html']; ?>
<br />
			<span class="description"> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Please use only alphanumeric, spaces, hyphens and dashes for event names.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> 
			</span></td>
		</tr>
		<tr class="crm-event-manage-eventinfo-form-block-summary">
			<td class="label"><?php echo $this->_tpl_vars['form']['summary']['label']; ?>
 <?php if ($this->_tpl_vars['action'] == 2): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_event','field' => 'summary','id' => $this->_tpl_vars['eventID'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?></td>
			<td><?php echo $this->_tpl_vars['form']['summary']['html']; ?>
</td>
		</tr>
		<tr class="crm-event-manage-eventinfo-form-block-description">
			<td class="label"><?php echo $this->_tpl_vars['form']['description']['label']; ?>
</td>
			<td><?php echo $this->_tpl_vars['form']['description']['html']; ?>
</td>
		</tr>
		<?php if (! $this->_tpl_vars['isTemplate']): ?>
			<tr class="crm-event-manage-eventinfo-form-block-start_date">
				<td class="label"><?php echo $this->_tpl_vars['form']['start_date']['label']; ?>
</td>
				<td><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/jcalendar.tpl", 'smarty_include_vars' => array('elementName' => 'start_date')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
			</tr>
			<tr class="crm-event-manage-eventinfo-form-block-end_date">
				<td class="label"><?php echo $this->_tpl_vars['form']['end_date']['label']; ?>
</td>
				<td><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/jcalendar.tpl", 'smarty_include_vars' => array('elementName' => 'end_date')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
			</tr>
		<?php endif; ?>
		<tr class="crm-event-manage-eventinfo-form-block-max_participants">
			<td class="label"><?php echo $this->_tpl_vars['form']['max_participants']['label']; ?>
</td>
			<td><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['max_participants']['html'])) ? $this->_run_mod_handler('crmReplace', true, $_tmp, 'class', 'four') : smarty_modifier_crmReplace($_tmp, 'class', 'four')); ?>
 <?php echo smarty_function_help(array('id' => "id-max_participants"), $this);?>
</td>
		</tr>
    <tr id="id-waitlist" class="crm-event-manage-eventinfo-form-block-has_waitlist">
      <?php if ($this->_tpl_vars['form']['has_waitlist']): ?>
        <td class="label"><?php echo $this->_tpl_vars['form']['has_waitlist']['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['has_waitlist']['html']; ?>
 <?php echo smarty_function_help(array('id' => "id-has_waitlist"), $this);?>
</td>
      <?php endif; ?>
    </tr>
		<tr id="id-event_full" class="crm-event-manage-eventinfo-form-block-event_full_text">
			<td class="label"><?php echo $this->_tpl_vars['form']['event_full_text']['label']; ?>
 <?php if ($this->_tpl_vars['action'] == 2): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_event','field' => 'event_full_text','id' => $this->_tpl_vars['eventID'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?><br /><?php echo smarty_function_help(array('id' => "id-event_full_text"), $this);?>
</td>
			<td><?php echo $this->_tpl_vars['form']['event_full_text']['html']; ?>
</td>
		</tr>
		<tr id="id-waitlist-text" class="crm-event-manage-eventinfo-form-block-waitlist_text">
      <?php if ($this->_tpl_vars['form']['waitlist_text']): ?>
        <td class="label"><?php echo $this->_tpl_vars['form']['waitlist_text']['label']; ?>
 <?php if ($this->_tpl_vars['action'] == 2): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_event','field' => 'waitlist_text','id' => $this->_tpl_vars['eventID'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?><br /><?php echo smarty_function_help(array('id' => "id-help-waitlist_text"), $this);?>
</td>
        <td><?php echo $this->_tpl_vars['form']['waitlist_text']['html']; ?>
</td>
      <?php endif; ?>
		</tr>
		<tr class="crm-event-manage-eventinfo-form-block-is_map">
			<td>&nbsp;</td>
			<td><?php echo $this->_tpl_vars['form']['is_map']['html']; ?>
 <?php echo $this->_tpl_vars['form']['is_map']['label']; ?>
 <?php echo smarty_function_help(array('id' => "id-is_map"), $this);?>
</td>
		</tr>
		<tr class="crm-event-manage-eventinfo-form-block-is_public">
			<td>&nbsp;</td>
			<td><?php echo $this->_tpl_vars['form']['is_public']['html']; ?>
 <?php echo $this->_tpl_vars['form']['is_public']['label']; ?>
<br />
			<span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Include this event in iCalendar feeds?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td>
		</tr>
		<tr class="crm-event-manage-eventinfo-form-block-is_active">
			<td>&nbsp;</td>
			<td><?php echo $this->_tpl_vars['form']['is_active']['html']; ?>
 <?php echo $this->_tpl_vars['form']['is_active']['label']; ?>
</td>
		</tr>

		<?php if ($this->_tpl_vars['eventID']): ?>
		<tr>
			<td>&nbsp;</td>
			<td class="description">
			<?php if ($this->_tpl_vars['config']->userFramework == 'Drupal'): ?>
				<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>When this Event is active, create links to the Event Information page by copying and pasting the following URL:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><br />
				<strong><?php echo CRM_Utils_System::crmURL(array('a' => true,'p' => 'civicrm/event/info','q' => "reset=1&id=".($this->_tpl_vars['eventID'])), $this);?>
</strong> 
			<?php elseif ($this->_tpl_vars['config']->userFramework == 'Joomla'): ?>
				<?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['eventID'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>When this Event is active, create front-end links to the Event Information page using the Menu Manager. Select <strong>Event Info Page</strong> and enter <strong>%1</strong> for the Event ID.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> 
			<?php endif; ?>
			</td>
		</tr>
		<?php endif; ?>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
	</table>
	<div id="customData"></div>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/customData.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>	
	<?php echo '
		<script type="text/javascript">
			cj(document).ready(function() {
				'; ?>

				<?php if ($this->_tpl_vars['customDataSubType']): ?> 
					buildCustomData( '<?php echo $this->_tpl_vars['customDataType']; ?>
', <?php echo $this->_tpl_vars['customDataSubType']; ?>
 );
				<?php else: ?>
					buildCustomData( '<?php echo $this->_tpl_vars['customDataType']; ?>
' );
				<?php endif; ?>
				<?php echo '
			});
		</script>
	'; ?>

        <div class="crm-submit-buttons">
           <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </div>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/showHide.tpl", 'smarty_include_vars' => array('elemType' => "table-row")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formNavigate.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>
</div>
<?php echo '
<script type="text/javascript">

function reloadWindow( tempId ) {

   //freeze the event type element 
   //when template form is loading.
   cj( "#event_type_id" ).attr(\'disabled\', true );

   window.location += \'&template_id=\' + tempId;
}

</script>
'; ?>

