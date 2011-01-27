<?php /* Smarty version 2.6.26, created on 2011-01-27 10:18:26
         compiled from CRM/Grant/Page/DashBoard.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'crmURL', 'CRM/Grant/Page/DashBoard.tpl', 28, false),array('block', 'ts', 'CRM/Grant/Page/DashBoard.tpl', 29, false),)), $this); ?>
<div id="help" class="solid-border-bottom">
    <?php ob_start(); ?><?php echo CRM_Utils_System::crmURL(array('p' => "civicrm/contact/search/basic",'q' => "reset=1"), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('findContactURL', ob_get_contents());ob_end_clean(); ?>
    <p><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['findContactURL'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>CiviGrant allows you to input and track grants to Organizations, Individuals or Households. The grantee must first be entered as a contact in CiviCRM. Use <a href='%1'>Find Contacts</a> to see if there's already a record for the grantee. Once you've located or created the contact record, click <strong>View</strong> to go to their summary page, select the <strong>Grants</strong> tab and click <strong>New Grant</strong>.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    </p>
</div>
<h3><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Grants Summary<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h3>
<div class="description">
    <?php ob_start(); ?><?php echo CRM_Utils_System::crmURL(array('p' => "civicrm/grant/search",'q' => "reset=1"), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('findGrantsURL', ob_get_contents());ob_end_clean(); ?>
    <p><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['findGrantsURL'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>This table provides a summary of <strong>Grant Totals</strong>, and includes shortcuts to view the Grant details for these commonly used search periods. Click the Grant Status to see a list of Contacts for that grant status. To run your own customized searches - click <a href='%1'>Find Grants</a>. You can search by Contact Name, Amount, Grant type and a variety of other criteria.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    </p>
</div>

<?php if ($this->_tpl_vars['grantSummary']['total_grants']): ?>
You have <?php echo $this->_tpl_vars['grantSummary']['total_grants']; ?>
 grant(s) registered in your database.
<table class="report">
<tr class="columnheader-dark">
    <th scope="col"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Grant status<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
    <th scope="col"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Number of grants<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
</tr>

<?php $_from = $this->_tpl_vars['grantSummary']['per_status']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['status']):
?>
<tr>
    <td><a href="<?php echo CRM_Utils_System::crmURL(array('p' => "civicrm/grant/search",'q' => "reset=1&status=".($this->_tpl_vars['id'])."&force=1"), $this);?>
"><?php echo $this->_tpl_vars['status']['label']; ?>
</a></td>
    <td><a href="<?php echo CRM_Utils_System::crmURL(array('p' => "civicrm/grant/search",'q' => "reset=1&status=".($this->_tpl_vars['id'])."&force=1"), $this);?>
"><?php echo $this->_tpl_vars['status']['total']; ?>
</a></td>
</tr>
<?php endforeach; endif; unset($_from); ?>
<tr class="columnfooter">
    <td><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>TOTAL<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:</td>
    <td><?php echo $this->_tpl_vars['grantSummary']['total_grants']; ?>
</td>
</tr>
</table>
<?php else: ?>
<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>You have no Grants registered in your database.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

<?php endif; ?>


<?php if ($this->_tpl_vars['pager']->_totalItems): ?>
    
    <h3><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Recent Grants<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h3>
    <div class="form-item">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Grant/Form/Selector.tpl", 'smarty_include_vars' => array('context' => 'DashBoard')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>
<?php endif; ?>