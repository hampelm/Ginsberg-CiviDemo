<?php /* Smarty version 2.6.26, created on 2011-01-27 14:25:30
         compiled from CRM/Contact/Page/View/Relationship.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'crmURL', 'CRM/Contact/Page/View/Relationship.tpl', 37, false),array('function', 'cycle', 'CRM/Contact/Page/View/Relationship.tpl', 67, false),array('block', 'ts', 'CRM/Contact/Page/View/Relationship.tpl', 37, false),array('modifier', 'crmDate', 'CRM/Contact/Page/View/Relationship.tpl', 89, false),array('modifier', 'replace', 'CRM/Contact/Page/View/Relationship.tpl', 91, false),)), $this); ?>
<?php if ($this->_tpl_vars['cdType']): ?>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Custom/Form/CustomData.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?>
 <div class="view-content">
   <?php if ($this->_tpl_vars['action'] == 1 || $this->_tpl_vars['action'] == 2 || $this->_tpl_vars['action'] == 4 || $this->_tpl_vars['action'] == 8): ?>     <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Form/Relationship.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <?php endif; ?>
<div class="crm-block crm-content-block">
  <?php if ($this->_tpl_vars['action'] != 1 && $this->_tpl_vars['action'] != 2 && $this->_tpl_vars['permission'] == 'edit'): ?>
        <div class="action-link">
            <a accesskey="N" href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/view/rel','q' => "cid=".($this->_tpl_vars['contactId'])."&action=add&reset=1"), $this);?>
" class="button"><span><div class="icon add-icon"></div><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Add Relationship<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></a>
        </div>
  <?php endif; ?>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/jsortable.tpl", 'smarty_include_vars' => array('useAjax' => 0)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>   
    <?php if ($this->_tpl_vars['currentRelationships']): ?>
          <div id="current-relationships">
        <?php if ($this->_tpl_vars['relationshipTabContext']): ?>          <h3><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Current Relationships<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h3>
        <?php endif; ?>
        <?php echo '<table id="current_relationship" class="display"><thead><tr><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Relationship'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th></th><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Start'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'End'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th></th></tr></thead>'; ?><?php $_from = $this->_tpl_vars['currentRelationships']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rel']):
?><?php echo ''; ?><?php echo '<tr id="rel_'; ?><?php echo $this->_tpl_vars['rel']['id']; ?><?php echo '" class="'; ?><?php echo smarty_function_cycle(array('values' => "odd-row,even-row"), $this);?><?php echo ' row-relationship '; ?><?php if ($this->_tpl_vars['rel']['is_permission_a_b'] == 1 || $this->_tpl_vars['rel']['is_permission_b_a'] == 1): ?><?php echo 'row-highlight'; ?><?php endif; ?><?php echo '">'; ?><?php if ($this->_tpl_vars['relationshipTabContext']): ?><?php echo '<td class="bold"><a href="'; ?><?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/view/rel','q' => "action=view&reset=1&selectedChild=rel&cid=".($this->_tpl_vars['contactId'])."&id=".($this->_tpl_vars['rel']['id'])."&rtype=".($this->_tpl_vars['rel']['rtype'])), $this);?><?php echo '">'; ?><?php echo $this->_tpl_vars['rel']['relation']; ?><?php echo '</a>'; ?><?php if (( $this->_tpl_vars['rel']['cid'] == $this->_tpl_vars['rel']['contact_id_a'] && $this->_tpl_vars['rel']['is_permission_a_b'] == 1 ) || ( $this->_tpl_vars['rel']['cid'] == $this->_tpl_vars['rel']['contact_id_b'] && $this->_tpl_vars['rel']['is_permission_b_a'] == 1 )): ?><?php echo '<span id="permission-b-a" class="crm-marker permission-relationship"> *</span>'; ?><?php endif; ?><?php echo '</td><td><a href="'; ?><?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/view','q' => "action=view&reset=1&cid=".($this->_tpl_vars['rel']['cid'])), $this);?><?php echo '">'; ?><?php echo $this->_tpl_vars['rel']['name']; ?><?php echo '</a>'; ?><?php if (( $this->_tpl_vars['contactId'] == $this->_tpl_vars['rel']['contact_id_a'] && $this->_tpl_vars['rel']['is_permission_a_b'] == 1 ) || ( $this->_tpl_vars['contactId'] == $this->_tpl_vars['rel']['contact_id_b'] && $this->_tpl_vars['rel']['is_permission_b_a'] == 1 )): ?><?php echo '<span id="permission-a-b" class="crm-marker permission-relationship"> *</span>'; ?><?php endif; ?><?php echo '<br />'; ?><?php echo $this->_tpl_vars['rel']['city']; ?><?php echo '</td>'; ?><?php else: ?><?php echo '<td class="bold">'; ?><?php echo $this->_tpl_vars['rel']['relation']; ?><?php echo '</strong></td><td>'; ?><?php echo $this->_tpl_vars['rel']['name']; ?><?php echo '<br />'; ?><?php echo $this->_tpl_vars['rel']['city']; ?><?php echo '</td>'; ?><?php endif; ?><?php echo '<td>'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['rel']['start_date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?><?php echo '</td><td>'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['rel']['end_date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?><?php echo '</td><td class="nowrap">'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['rel']['action'])) ? $this->_run_mod_handler('replace', true, $_tmp, 'xx', $this->_tpl_vars['rel']['id']) : smarty_modifier_replace($_tmp, 'xx', $this->_tpl_vars['rel']['id'])); ?><?php echo '</td></tr>'; ?><?php endforeach; endif; unset($_from); ?><?php echo '</table>'; ?>

        </div>

<!--
        <div id="permission-legend" class="crm-content-block">
         <span class="crm-marker">* </span><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Indicates a permissioned relationship. This contact can be viewed and updated by the other.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </div>
-->
<?php endif; ?>

<?php if (! ( $this->_tpl_vars['currentRelationships'] || $this->_tpl_vars['inactiveRelationships'] )): ?>

  <?php if ($this->_tpl_vars['action'] != 1): ?>        <div class="messages status">
            <div class="icon inform-icon"></div>
           <?php ob_start(); ?><?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/view/rel','q' => "cid=".($this->_tpl_vars['contactId'])."&action=add&reset=1"), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('crmURL', ob_get_contents());ob_end_clean(); ?>
           <?php if ($this->_tpl_vars['permission'] == 'edit'): ?>
                    <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['crmURL'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>There are no Relationships entered for this contact. You can <a accesskey="N" href='%1'>add one</a>.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                <?php elseif (! $this->_tpl_vars['relationshipTabContext']): ?>
                    <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>There are no related contacts / organizations on record for you.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                <?php else: ?>
                    <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>There are no Relationships entered for this contact.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                <?php endif; ?>
        </div>
  <?php endif; ?>
<?php endif; ?>
</div>
<div class="spacer"></div>

<?php if ($this->_tpl_vars['inactiveRelationships']): ?>
          <div id="inactive-relationships">
        <p></p>
        <div class="label font-red"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Inactive Relationships<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
        <div class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>These relationships are Disabled OR have a past End Date.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
        <?php echo '<table id="inactive_relationship" class="display"><thead><tr><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Relationship'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th></th><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'City'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'State/Prov'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Phone'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'End Date'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th></th></tr></thead>'; ?><?php $_from = $this->_tpl_vars['inactiveRelationships']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rel']):
?><?php echo ''; ?><?php $this->assign('rtype', ""); ?><?php echo ''; ?><?php if ($this->_tpl_vars['rel']['contact_a'] > 0): ?><?php echo ''; ?><?php $this->assign('rtype', 'b_a'); ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php $this->assign('rtype', 'a_b'); ?><?php echo ''; ?><?php endif; ?><?php echo '<tr id="rel_'; ?><?php echo $this->_tpl_vars['rel']['id']; ?><?php echo '" class="'; ?><?php echo smarty_function_cycle(array('values' => "odd-row,even-row"), $this);?><?php echo '"><td class="bold">'; ?><?php echo $this->_tpl_vars['rel']['relation']; ?><?php echo '</td><td><a href="'; ?><?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/view','q' => "reset=1&cid=".($this->_tpl_vars['rel']['cid'])), $this);?><?php echo '">'; ?><?php echo $this->_tpl_vars['rel']['name']; ?><?php echo '</a></td><td>'; ?><?php echo $this->_tpl_vars['rel']['city']; ?><?php echo '</td><td>'; ?><?php echo $this->_tpl_vars['rel']['state']; ?><?php echo '</td><td>'; ?><?php echo $this->_tpl_vars['rel']['phone']; ?><?php echo '</td><td>'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['rel']['end_date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?><?php echo '</td><td class="nowrap">'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['rel']['action'])) ? $this->_run_mod_handler('replace', true, $_tmp, 'xx', $this->_tpl_vars['rel']['id']) : smarty_modifier_replace($_tmp, 'xx', $this->_tpl_vars['rel']['id'])); ?><?php echo '</td></tr>'; ?><?php endforeach; endif; unset($_from); ?><?php echo '</table>'; ?>

        </div>    
<?php endif; ?>



</div>
<?php endif; ?> 
<?php if ($this->_tpl_vars['searchRows']): ?>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/customData.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>