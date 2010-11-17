<?php /* Smarty version 2.6.26, created on 2010-11-16 17:13:42
         compiled from CRM/Mailing/Form/Upload.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'ts', 'CRM/Mailing/Form/Upload.tpl', 30, false),array('function', 'help', 'CRM/Mailing/Form/Upload.tpl', 30, false),array('function', 'docURL', 'CRM/Mailing/Form/Upload.tpl', 57, false),array('modifier', 'crmReplace', 'CRM/Mailing/Form/Upload.tpl', 40, false),)), $this); ?>
<div class="crm-block crm-form-block crm-mailing-upload-form-block">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/WizardHeader.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div id="help">
    <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>You can either <strong>upload</strong> the mailing content from your computer OR <strong>compose</strong> the content on this screen.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php echo smarty_function_help(array('id' => "content-intro"), $this);?>
 
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Mailing/Form/Count.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table class="form-layout-compressed">
    <tr class="crm-mailing-upload-form-block-from_email_address"><td class="label"><?php echo $this->_tpl_vars['form']['from_email_address']['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['from_email_address']['html']; ?>
 <?php echo smarty_function_help(array('id' => "id-from_email"), $this);?>
</td>
    </tr>
    <tr class="crm-mailing-upload-form-block-subject"><td class="label"><?php echo $this->_tpl_vars['form']['subject']['label']; ?>
</td>
        <td colspan="2"><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['subject']['html'])) ? $this->_run_mod_handler('crmReplace', true, $_tmp, 'class', 'huge') : smarty_modifier_crmReplace($_tmp, 'class', 'huge')); ?>

                        <a href="#" onClick="return showToken('Subject', 3);"><?php echo $this->_tpl_vars['form']['token3']['label']; ?>
</a>
                        <?php echo smarty_function_help(array('id' => "id-token-subject",'file' => "CRM/Contact/Form/Task/Email.hlp"), $this);?>

                        <div id='tokenSubject' style="display:none">
                           <input style="border:1px solid #999999;" type="text" id="filter3" size="20" name="filter3" onkeyup="filter(this, 3)"/><br />
                           <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Begin typing to filter list of tokens<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span><br/>
                           <?php echo $this->_tpl_vars['form']['token3']['html']; ?>

                        </div>
        </td>
    </tr>
    <tr class="crm-mailing-upload-form-block-upload_type"><td></td><td colspan="2"><?php echo $this->_tpl_vars['form']['upload_type']['label']; ?>
 <?php echo $this->_tpl_vars['form']['upload_type']['html']; ?>
 <?php echo smarty_function_help(array('id' => "upload-compose"), $this);?>
</td></tr>
</table>

<fieldset id="compose_id"><legend><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Compose On-screen<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></legend>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Form/Task/EmailCommon.tpl", 'smarty_include_vars' => array('upload' => 1,'noAttach' => 1)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</fieldset>

  <?php ob_start(); ?><?php echo smarty_function_docURL(array('page' => 'Sample CiviMail Messages','text' => "More information and sample messages..."), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('docLink', ob_get_contents());ob_end_clean(); ?>
  <fieldset id="upload_id"><legend><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Upload Content<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></legend>
    <table class="form-layout-compressed">
        <tr class="crm-mailing-upload-form-block-textFile">
            <td class="label"><?php echo $this->_tpl_vars['form']['textFile']['label']; ?>
</td>
            <td><?php echo $this->_tpl_vars['form']['textFile']['html']; ?>
<br />
                <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Browse to the <strong>TEXT</strong> message file you have prepared for this mailing.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><br /> <?php echo $this->_tpl_vars['docLink']; ?>
</span>
            </td>
        </tr>
        <tr class="crm-mailing-upload-form-block-htmlFile">
            <td class="label"><?php echo $this->_tpl_vars['form']['htmlFile']['label']; ?>
</td>
            <td><?php echo $this->_tpl_vars['form']['htmlFile']['html']; ?>
<br />
                <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Browse to the <strong>HTML</strong> message file you have prepared for this mailing.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><br /> <?php echo $this->_tpl_vars['docLink']; ?>
</span>
            </td>
        </tr>
    </table>
  </fieldset>

  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Form/attachment.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

  <fieldset><legend><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Header / Footer<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></legend>
    <table class="form-layout-compressed">
        <tr class="crm-mailing-upload-form-block-header_id">
            <td class="label"><?php echo $this->_tpl_vars['form']['header_id']['label']; ?>
</td>
            <td><?php echo $this->_tpl_vars['form']['header_id']['html']; ?>
<br />
                <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>You may choose to include a pre-configured Header block above your message.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
            </td>
        </tr>
        <tr class="crm-mailing-upload-form-block-footer_id">
            <td class="label"><?php echo $this->_tpl_vars['form']['footer_id']['label']; ?>
</td>
            <td><?php echo $this->_tpl_vars['form']['footer_id']['html']; ?>
<br />
                <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>You may choose to include a pre-configured Footer block below your message. This is a good place to include the required unsubscribe, opt-out and postal address tokens.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
            </td>
        </tr>
    </table> 
  </fieldset>

  <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
</div><!-- / .crm-form-block -->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/showHide.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo '
<script type="text/javascript">
    showHideUpload();
    function showHideUpload()
    { 
	if (document.getElementsByName("upload_type")[0].checked) {
            hide(\'compose_id\');
	    show(\'upload_id\');	
        } else {
            show(\'compose_id\');
	    hide(\'upload_id\');
            verify( );
        }
    }
</script>
'; ?>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formNavigate.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>