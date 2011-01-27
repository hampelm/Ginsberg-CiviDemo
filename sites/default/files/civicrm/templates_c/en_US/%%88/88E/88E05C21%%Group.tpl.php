<?php /* Smarty version 2.6.26, created on 2011-01-27 14:28:15
         compiled from CRM/Custom/Form/Group.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'ts', 'CRM/Custom/Form/Group.tpl', 28, false),array('function', 'help', 'CRM/Custom/Form/Group.tpl', 28, false),array('function', 'crmURL', 'CRM/Custom/Form/Group.tpl', 82, false),)), $this); ?>
<div class="crm-block crm-form-block">
    <div id="help"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Use Custom Field Sets to add logically related fields for a specific type of CiviCRM record (e.g. contact records, contribution records, etc.).<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php echo smarty_function_help(array('id' => "id-group_intro"), $this);?>
</div>
    <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
    <table class="form-layout">
    <tr>
        <td class="label"><?php echo $this->_tpl_vars['form']['title']['label']; ?>
 <?php if ($this->_tpl_vars['action'] == 2): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_custom_group','field' => 'title','id' => $this->_tpl_vars['gid'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?></td> 
        <td class="html-adjust"><?php echo $this->_tpl_vars['form']['title']['html']; ?>
 <?php echo smarty_function_help(array('id' => "id-title"), $this);?>
</td>
    </tr>
    <tr>
        <td class="label"><?php echo $this->_tpl_vars['form']['extends']['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['extends']['html']; ?>
 <?php echo smarty_function_help(array('id' => "id-extends"), $this);?>
</td>
    </tr>
    <tr>
        <td class="label"><?php echo $this->_tpl_vars['form']['weight']['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['weight']['html']; ?>
 <?php echo smarty_function_help(array('id' => "id-weight"), $this);?>
</td>
    </tr>
    <tr id="is_multiple" class="hiddenElement">         <td></td>
        <td class="html-adjust"><?php echo $this->_tpl_vars['form']['is_multiple']['html']; ?>
&nbsp;<?php echo $this->_tpl_vars['form']['is_multiple']['label']; ?>
 <?php echo smarty_function_help(array('id' => "id-is_multiple"), $this);?>
</td>
    </tr>
    <tr id="multiple" class="hiddenElement">	
                <td class="label"><?php echo $this->_tpl_vars['form']['max_multiple']['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['max_multiple']['html']; ?>
 <?php echo smarty_function_help(array('id' => "id-max_multiple"), $this);?>
</td>
    </tr>
    <tr id="style" class="hiddenElement">
        <td class="label"><?php echo $this->_tpl_vars['form']['style']['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['style']['html']; ?>
 <?php echo smarty_function_help(array('id' => "id-display_style"), $this);?>
</td>
    </tr>
    <tr class="html-adjust">
        <td>&nbsp;</td>
        <td><?php echo $this->_tpl_vars['form']['collapse_display']['html']; ?>
 <?php echo $this->_tpl_vars['form']['collapse_display']['label']; ?>
 <?php echo smarty_function_help(array('id' => "id-collapse"), $this);?>
</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td><?php echo $this->_tpl_vars['form']['collapse_adv_display']['html']; ?>
 <?php echo $this->_tpl_vars['form']['collapse_adv_display']['label']; ?>
 <?php echo smarty_function_help(array('id' => "id-collapse-adv"), $this);?>
</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td><?php echo $this->_tpl_vars['form']['is_active']['html']; ?>
 <?php echo $this->_tpl_vars['form']['is_active']['label']; ?>
</td>
    </tr>
    <tr class="html-adjust">
        <td class="label"><?php echo $this->_tpl_vars['form']['help_pre']['label']; ?>
 <!--<?php if ($this->_tpl_vars['action'] == 2): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_custom_group','field' => 'help_pre','id' => $this->_tpl_vars['gid'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>--><?php echo smarty_function_help(array('id' => "id-help_pre"), $this);?>
</td>
        <td><?php echo $this->_tpl_vars['form']['help_pre']['html']; ?>
</td>
    </tr>
    <tr class="html-adjust">
        <td class="label"><?php echo $this->_tpl_vars['form']['help_post']['label']; ?>
 <!--<?php if ($this->_tpl_vars['action'] == 2): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_custom_group','field' => 'help_post','id' => $this->_tpl_vars['gid'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>--><?php echo smarty_function_help(array('id' => "id-help_post"), $this);?>
</td>
        <td><?php echo $this->_tpl_vars['form']['help_post']['html']; ?>
</td>
    </tr>
    </table>
    <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
</div>
<?php if ($this->_tpl_vars['action'] == 2 || $this->_tpl_vars['action'] == 4): ?>     <p></p>
    <div class="action-link">
    <a href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/admin/custom/group/field','q' => "action=browse&reset=1&gid=".($this->_tpl_vars['gid'])), $this);?>
" class="button"><span><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Custom Fields for this Set<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></a>
    </div>
<?php endif; ?>
<?php echo $this->_tpl_vars['initHideBlocks']; ?>

<?php echo '
<script type="text/Javascript">

showHideStyle( );

var  isGroupEmpty = "'; ?>
<?php echo $this->_tpl_vars['isGroupEmpty']; ?>
<?php echo '";

if ( isGroupEmpty ) {
     showRange();
}	

function showHideStyle()
{   	     
	var isShow          = false;
	var extend          = document.getElementById("extends[0]").value;
    var contactTypes    = '; ?>
'<?php echo $this->_tpl_vars['contactTypes']; ?>
'<?php echo ';
    var showStyle       = "'; ?>
<?php echo $this->_tpl_vars['showStyle']; ?>
<?php echo '";
    var showMultiple    = "'; ?>
<?php echo $this->_tpl_vars['showMultiple']; ?>
<?php echo '";
    var showMaxMultiple = "'; ?>
<?php echo $this->_tpl_vars['showMaxMultiple']; ?>
<?php echo '";
  
    eval(\'var contactTypes = \' + contactTypes);
    
    if ( cj.inArray(extend, contactTypes) >= 0 ) {
        isShow  = true;
    }
	if( isShow  ) {	
        cj("tr#style").show();
        cj("tr#is_multiple").show();
	} else {
        cj("tr#style").hide();
        cj("tr#is_multiple").hide();
   	}

    if ( showStyle ) {
        cj("tr#style").show();
    }

    if ( showMultiple ) {
        cj("tr#style").show();
        cj("tr#is_multiple").show();
    }

    if ( !showMaxMultiple ) {
         cj("tr#multiple").hide();
    } else if( cj( \'#is_multiple\').attr(\'checked\') ) {
         cj("tr#multiple").show();
    }
}

function showRange()
{
    if( cj("#is_multiple :checked").length ) {
        cj("tr#multiple").show();
        cj("select#style option[value=\'Tab\']").attr("selected", "selected");
    } else { 
        cj("tr#multiple").hide();
        cj("select#style option[value=\'Inline\']").attr("selected", "selected");
    } 
}

// In update mode, when \'extends\' is set to an option which doesn\'t have 
// any options in 2nd selector (for subtypes)  -
var subtypes = document.getElementById(\'extends[1]\');
if ( subtypes ) {
     if ( subtypes.options.length <= 0 ) {
          subtypes.style.display = \'none\';
     } else {
          subtypes.style.display = \'inline\';
     }
}
</script>
'; ?>
