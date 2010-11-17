<?php /* Smarty version 2.6.26, created on 2010-11-16 17:13:31
         compiled from CRM/Mailing/Form/Settings.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'ts', 'CRM/Mailing/Form/Settings.tpl', 55, false),)), $this); ?>

<script  type="text/javascript">
<?php echo '

cj( function($) {
  // hide all the selects that contains only one option
  cj(\'.crm-message-select select\').each(function (){
    if (cj(this).find(\'option\').size() == 1) { 
      cj(this).parent().parent().hide();
    }
  });
  if (!cj(\'#override_verp\').attr(\'checked\')){
    cj(\'.crm-mailing-settings-form-block-forward_replies,.crm-mailing-settings-form-block-auto_responder\').hide();
  }
  cj(\'#override_verp\').click(function(){
      cj(\'.crm-mailing-settings-form-block-forward_replies,.crm-mailing-settings-form-block-auto_responder\').toggle();
       if (!cj(\'#override_verp\').attr(\'checked\')) { 
             cj(\'#forward_replies\').attr(\'checked\',false);
             cj(\'#auto_responder\').attr(\'checked\',false);
           }
    });

});
'; ?>

</script>

<div class="crm-block crm-form-block crm-mailing-settings-form-block">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/WizardHeader.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="help">
    <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>These settings control tracking and responses to recipient actions. The number of recipients selected to receive this mailing is shown in the box to the right. If this count doesn't match your expectations, click <strong>Previous</strong> to review your selection(s).<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> 
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Mailing/Form/Count.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="crm-block crm-form-block crm-mailing-settings-form-block">
  <fieldset><legend><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Tracking<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></legend> 
    <table class="form-layout"><tr class="crm-mailing-settings-form-block-url_tracking">
    <td class="label"><?php echo $this->_tpl_vars['form']['url_tracking']['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['url_tracking']['html']; ?>

            <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Track the number of times recipients click each link in this mailing. NOTE: When this feature is enabled, all links in the message body will be automaticallly re-written to route through your CiviCRM server prior to redirecting to the target page.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
        </td></tr><tr class="crm-mailing-settings-form-block-open_tracking">
    <td class="label"><?php echo $this->_tpl_vars['form']['open_tracking']['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['open_tracking']['html']; ?>

            <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Track the number of times recipients open this mailing in their email software.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
        </td></tr>
    </table>
  </fieldset>
  <fieldset><legend><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Responding<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></legend> 
    <table class="form-layout">
        <tr class="crm-mailing-settings-form-block-override_verp"><td class="label"><?php echo $this->_tpl_vars['form']['override_verp']['label']; ?>
</td>
            <td><?php echo $this->_tpl_vars['form']['override_verp']['html']; ?>

                <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Recipients' replies are sent to a CiviMail specific address instead of the sender's address so they can be stored within CiviCRM.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
            </td>
        </tr>
        <tr class="crm-mailing-settings-form-block-forward_replies"><td class="label "><?php echo $this->_tpl_vars['form']['forward_replies']['label']; ?>
</td>
            <td><?php echo $this->_tpl_vars['form']['forward_replies']['html']; ?>

                <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>If a recipient replies to this mailing, forward the reply to the FROM Email address specified for the mailing.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
            </td>
	</tr>
    <tr class="crm-mailing-settings-form-block-auto_responder"><td class="label"><?php echo $this->_tpl_vars['form']['auto_responder']['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['auto_responder']['html']; ?>
 &nbsp; <?php echo $this->_tpl_vars['form']['reply_id']['html']; ?>

            <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>If a recipient replies to this mailing, send an automated reply using the selected message.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
        </td>
    </tr>
    <tr class="crm-mailing-settings-form-block-unsubscribe_id crm-message-select"><td class="label"><?php echo $this->_tpl_vars['form']['unsubscribe_id']['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['unsubscribe_id']['html']; ?>

            <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Select the automated message to be sent when a recipient unsubscribes from this mailing.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
        </td>
    <tr>
    <tr class="crm-mailing-settings-form-block-resubscribe_id crm-message-select"><td class="label"><?php echo $this->_tpl_vars['form']['resubscribe_id']['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['resubscribe_id']['html']; ?>

            <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Select the automated message to be sent when a recipient resubscribes to this mailing.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
        </td>
    </tr>
    <tr class="crm-mailing-settings-form-block-optout_id crm-message-select"><td class="label "><?php echo $this->_tpl_vars['form']['optout_id']['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['optout_id']['html']; ?>

            <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Select the automated message to be sent when a recipient opts out of all mailings from your site.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
        </td>
    </tr>
   </table>
  </fieldset>
  <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formNavigate.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>
