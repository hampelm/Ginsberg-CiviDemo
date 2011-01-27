<?php /* Smarty version 2.6.26, created on 2011-01-27 14:28:41
         compiled from CRM/Custom/Form/Field.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'ts', 'CRM/Custom/Form/Field.tpl', 141, false),array('modifier', 'crmReplace', 'CRM/Custom/Form/Field.tpl', 160, false),array('function', 'crmURL', 'CRM/Custom/Form/Field.tpl', 274, false),)), $this); ?>
<?php echo '
<script type="text/Javascript">
function custom_option_html_type( ) {
    var html_type_name = document.getElementsByName("data_type[1]")[0].value;
    var data_type_id   = document.getElementsByName("data_type[0]")[0].value;

    if ( !html_type_name && !data_type_id ) {
        return;
    }

    if ( data_type_id < 4 ) {
        if ( html_type_name != "Text" ) {
            cj("#showoption").show();
            cj("#hideDefault").hide();
            cj("#hideDesc").hide();
            cj("#searchByRange").hide();
            cj("#searchable").show();
        } else {
            cj("#showoption").hide();
            cj("#hideDefault").show();
            cj("#hideDesc").show();
            cj("#searchable").show();
        }
    } else {
        if ( data_type_id == 9 ) { 
            document.getElementById("default_value").value = \'\';
            cj("#hideDefault").hide();
            cj("#searchable").hide();
            cj("#hideDesc").hide();
        } else if ( data_type_id == 11 ) {
            cj("#hideDefault").hide();
        } else {
            cj("#hideDefault").show();
            cj("#searchable").show();
            cj("#hideDesc").show();
        }
        cj("#showoption").hide();
    }

    var radioOption, checkBoxOption;

    for ( var i=1; i<=11; i++) {
        radioOption = \'radio\'+i;
        checkBoxOption = \'checkbox\'+i	
        if ( data_type_id < 4 ) {
            if ( html_type_name != "Text") {
                if ( html_type_name == "CheckBox" || html_type_name == "Multi-Select") {
                    cj("#"+checkBoxOption).show();
                    cj("#"+radioOption).hide();
                } else {
                    cj("#"+radioOption).show();
                    cj("#"+checkBoxOption).hide();
                }
            }
        }
    }

    if ( data_type_id < 4 ) {	
        if (html_type_name == "CheckBox" || html_type_name == "Radio") {
            cj("#optionsPerLine").show();
        } else {
            cj("#optionsPerLine").hide();
        }
    }

    if ( data_type_id == 5) {
        cj("#startDateRange").show();
        cj("#endDateRange").show();
        cj("#includedDatePart").show();
    } else {
        cj("#startDateRange").hide();
        cj("#endDateRange").hide();
        cj("#includedDatePart").hide();
    }

    if ( data_type_id == 0 ) {
        cj("#textLength").show();
    } else {
        cj("#textLength").hide();
    }

    if ( data_type_id == 4 ) {
        cj("#noteColumns").show();
        cj("#noteRows").show();
    } else {
        cj("#noteColumns").hide();
        cj("#noteRows").hide();
    }

    if ( data_type_id > 3) {
        cj("#optionsPerLine").hide();
    }

    '; ?>
<?php if ($this->_tpl_vars['action'] == 1): ?><?php echo '
    clearSearchBoxes( );
    '; ?>
<?php endif; ?><?php echo '
}
</script>
'; ?>

<div class="crm-block crm-form-block crm-custom-field-form-block">
<div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
    <table class="form-layout">
        <tr class="crm-custom-field-form-block-label">
            <td class="label"><?php echo $this->_tpl_vars['form']['label']['label']; ?>

            <?php if ($this->_tpl_vars['action'] == 2): ?>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_custom_field','field' => 'label','id' => $this->_tpl_vars['id'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <?php endif; ?>
            </td>
            <td class="html-adjust"><?php echo $this->_tpl_vars['form']['label']['html']; ?>
</td>
        </tr>
        <tr class="crm-custom-field-form-block-data_type">
            <td class="label"><?php echo $this->_tpl_vars['form']['data_type']['label']; ?>
</td>
            <td class="html-adjust"><?php echo $this->_tpl_vars['form']['data_type']['html']; ?>

                <?php if ($this->_tpl_vars['action'] != 4 && $this->_tpl_vars['action'] != 2): ?>
                    <br /><span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Select the type of data you want to collect and store for this contact. Then select from the available HTML input field types (choices are based on the type of data being collected).<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
                <?php endif; ?>
            </td>
        </tr>
        <tr class="crm-custom-field-form-block-text_length"  id="textLength" <?php if (! ( $this->_tpl_vars['action'] == 1 || $this->_tpl_vars['action'] == 2 ) && ( $this->_tpl_vars['form']['data_type']['value']['0']['0'] != 0 )): ?>class="hide-block"<?php endif; ?>>
            <td class="label"><?php echo $this->_tpl_vars['form']['text_length']['label']; ?>
</td>
            <td class="html-adjust"><?php echo $this->_tpl_vars['form']['text_length']['html']; ?>
</td> 
        </tr>
        
        <tr id='showoption' <?php if ($this->_tpl_vars['action'] == 1 || $this->_tpl_vars['action'] == 2): ?>class="hide-block"<?php endif; ?>>
            <td colspan="2">
            <table class="form-layout-compressed">
                                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Custom/Form/Optionfields.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            </table>
            </td>
        </tr>
        <tr  class="crm-custom-field-form-block-options_per_line" id="optionsPerLine" <?php if ($this->_tpl_vars['action'] != 2 && ( $this->_tpl_vars['form']['data_type']['value']['0']['0'] >= 4 && $this->_tpl_vars['form']['data_type']['value']['1']['0'] != 'CheckBox' || $this->_tpl_vars['form']['data_type']['value']['1']['0'] != 'Radio' )): ?>class="hide-block"<?php endif; ?>>
            <td class="label"><?php echo $this->_tpl_vars['form']['options_per_line']['label']; ?>
</td>	
            <td class="html-adjust"><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['options_per_line']['html'])) ? $this->_run_mod_handler('crmReplace', true, $_tmp, 'class', 'two') : smarty_modifier_crmReplace($_tmp, 'class', 'two')); ?>
</td>
        </tr>
	    <tr  class="crm-custom-field-form-block-start_date_years" id="startDateRange" <?php if ($this->_tpl_vars['action'] != 2 && ( $this->_tpl_vars['form']['data_type']['value']['0']['0'] != 5 )): ?>class="hide-block"<?php endif; ?>>
            <td class="label"><?php echo $this->_tpl_vars['form']['start_date_years']['label']; ?>
</td>
            <td class="html-adjust"><?php echo $this->_tpl_vars['form']['start_date_years']['html']; ?>
 <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>years prior to current date.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td> 
        </tr>
        <tr class="crm-custom-field-form-block-end_date_years" id="endDateRange" <?php if ($this->_tpl_vars['action'] != 2 && ( $this->_tpl_vars['form']['data_type']['value']['0']['0'] != 5 )): ?>class="hide-block"<?php endif; ?>>
            <td class="label"><?php echo $this->_tpl_vars['form']['end_date_years']['label']; ?>
</td>
            <td class="html-adjust"><?php echo $this->_tpl_vars['form']['end_date_years']['html']; ?>
 <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>years after the current date.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td> 
        </tr>
        <tr  class="crm-custom-field-form-block-date_format"  id="includedDatePart" <?php if ($this->_tpl_vars['action'] != 2 && ( $this->_tpl_vars['form']['data_type']['value']['0']['0'] != 5 )): ?>class="hide-block"<?php endif; ?>>
            <td class="label"><?php echo $this->_tpl_vars['form']['date_format']['label']; ?>
</td>
            <td class="html-adjust"><?php echo $this->_tpl_vars['form']['date_format']['html']; ?>
&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['form']['time_format']['label']; ?>
&nbsp;&nbsp;<?php echo $this->_tpl_vars['form']['time_format']['html']; ?>
</td> 
        </tr>
        <tr  class="crm-custom-field-form-block-note_rows"  id="noteRows" <?php if ($this->_tpl_vars['action'] != 2 && ( $this->_tpl_vars['form']['data_type']['value']['0']['0'] != 4 )): ?>class="hide-block"<?php endif; ?>>
            <td class="label"><?php echo $this->_tpl_vars['form']['note_rows']['label']; ?>
</td>
            <td class="html-adjust"><?php echo $this->_tpl_vars['form']['note_rows']['html']; ?>
</td> 
        </tr>
	    <tr class="crm-custom-field-form-block-note_columns" id="noteColumns" <?php if ($this->_tpl_vars['action'] != 2 && ( $this->_tpl_vars['form']['data_type']['value']['0']['0'] != 4 )): ?>class="hide-block"<?php endif; ?>>
            <td class="label"><?php echo $this->_tpl_vars['form']['note_columns']['label']; ?>
</td>
            <td class="html-adjust"><?php echo $this->_tpl_vars['form']['note_columns']['html']; ?>
</td>
        </tr>
        <tr class="crm-custom-field-form-block-weight" >
            <td class="label"><?php echo $this->_tpl_vars['form']['weight']['label']; ?>
</td>
            <td><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['weight']['html'])) ? $this->_run_mod_handler('crmReplace', true, $_tmp, 'class', 'two') : smarty_modifier_crmReplace($_tmp, 'class', 'two')); ?>

                <?php if ($this->_tpl_vars['action'] != 4): ?>
                <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Weight controls the order in which fields are displayed in a group. Enter a positive or negative integer - lower numbers are displayed ahead of higher numbers.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
                <?php endif; ?>
            </td>
        </tr>
        <tr class="crm-custom-field-form-block-default_value" id="hideDefault" <?php if ($this->_tpl_vars['action'] == 2 && ( $this->_tpl_vars['form']['data_type']['value']['0']['0'] < 4 && $this->_tpl_vars['form']['data_type']['value']['1']['0'] != 'Text' )): ?>class="hide-block"<?php endif; ?>>
            <td title="hideDefaultValTxt" class="label"><?php echo $this->_tpl_vars['form']['default_value']['label']; ?>
</td>
            <td title="hideDefaultValDef" class="html-adjust"><?php echo $this->_tpl_vars['form']['default_value']['html']; ?>
</td>
        </tr>
        <tr  class="crm-custom-field-form-block-description"  id="hideDesc" <?php if ($this->_tpl_vars['action'] != 4 && $this->_tpl_vars['action'] == 2 && ( $this->_tpl_vars['form']['data_type']['value']['0']['0'] < 4 && $this->_tpl_vars['form']['data_type']['value']['1']['0'] != 'Text' )): ?>class="hide-block"<?php endif; ?>>
            <td title="hideDescTxt" class="label">&nbsp;</td>
            <td title="hideDescDef" class="html-adjust"><span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>If you want to provide a default value for this field, enter it here. For date fields, format is YYYY-MM-DD.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td>
        </tr>
        <tr class="crm-custom-field-form-block-help_pre">
            <td class="label"><?php echo $this->_tpl_vars['form']['help_pre']['label']; ?>
 <?php if ($this->_tpl_vars['action'] == 2): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_custom_field','field' => 'help_pre','id' => $this->_tpl_vars['id'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?></td>
            <td class="html-adjust"><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['help_pre']['html'])) ? $this->_run_mod_handler('crmReplace', true, $_tmp, 'class', 'huge') : smarty_modifier_crmReplace($_tmp, 'class', 'huge')); ?>
</td>
        </tr>
        <tr class="crm-custom-field-form-block-help_post">
            <td class="label"><?php echo $this->_tpl_vars['form']['help_post']['label']; ?>
 <?php if ($this->_tpl_vars['action'] == 2): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_custom_field','field' => 'help_post','id' => $this->_tpl_vars['id'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?></td>
            <td class="html-adjust"><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['help_post']['html'])) ? $this->_run_mod_handler('crmReplace', true, $_tmp, 'class', 'huge') : smarty_modifier_crmReplace($_tmp, 'class', 'huge')); ?>

                <?php if ($this->_tpl_vars['action'] != 4): ?>
                    <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Explanatory text displayed for this field. Pre help is displayed inline on the form (above the field). Post help is displayed in a pop-up - users click the help balloon to view help text.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
                <?php endif; ?>
            </td>
        </tr>
        <tr class="crm-custom-field-form-block-is_required">
            <td class="label"><?php echo $this->_tpl_vars['form']['is_required']['label']; ?>
</td>
            <td class="html-adjust"><?php echo $this->_tpl_vars['form']['is_required']['html']; ?>
</td>
        </tr>
        <tr id ="searchable" class="crm-custom-field-form-block-is_searchable">
            <td class="label"><?php echo $this->_tpl_vars['form']['is_searchable']['label']; ?>
</td>
            <td class="html-adjust"><?php echo $this->_tpl_vars['form']['is_searchable']['html']; ?>

                <?php if ($this->_tpl_vars['action'] != 4): ?>
                    <br /><span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Can you search on this field in the Advanced and component search forms? NOTE: This feature is available to custom fields used for <strong>Contacts (individuals, organizations and househoulds), Contributions, Pledges, Memberships, Event Participants, Activities, and Relationships</strong>.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
                <?php endif; ?>        
            </td>
        </tr>
        <tr id="searchByRange" class="crm-custom-field-form-block-is_search_range">
	    <td class="label"><?php echo $this->_tpl_vars['form']['is_search_range']['label']; ?>
</td>
            <td class="html-adjust"><?php echo $this->_tpl_vars['form']['is_search_range']['html']; ?>
</td>
        </tr>
        <tr class="crm-custom-field-form-block-is_active">
            <td class="label"><?php echo $this->_tpl_vars['form']['is_active']['label']; ?>
</td>
            <td class="html-adjust"><?php echo $this->_tpl_vars['form']['is_active']['html']; ?>
</td>
        </tr>    
        <tr class="crm-custom-field-form-block-is_view">
            <td class="label"><?php echo $this->_tpl_vars['form']['is_view']['label']; ?>
</td>
            <td class="html-adjust"><?php echo $this->_tpl_vars['form']['is_view']['html']; ?>

                <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Is this field set by PHP code (via a custom hook). This field will not be updated by CiviCRM.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
            </td>
        </tr>
    </table>
   	    <?php if ($this->_tpl_vars['action'] != 4): ?>
	       <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
	    <?php else: ?>
	       <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
	    <?php endif; ?>     </div> 
<?php echo '
<script type="text/javascript">
    //when page is reload, build show hide boxes
    //as per data type and html type selected.
    custom_option_html_type( );

    function showSearchRange(chkbox) {
        var html_type = document.getElementsByName("data_type[1]")[0].value;
	var data_type = document.getElementsByName("data_type[0]")[0].value;

        if ( ((data_type == 1 || data_type == 2 || data_type == 3) && (html_type == "Text")) || data_type == 5) {
            if (chkbox.checked) {
		document.getElementsByName("is_search_range")[0].checked = true;
                cj("#searchByRange").show();
            } else {
                clearSearchBoxes( );
            }
        }
    }
      
    //should not clear search boxes for update mode. 
    function clearSearchBoxes( ) {
    	document.getElementsByName("is_searchable")[0].checked   = false; 
	document.getElementsByName("is_search_range")[1].checked = true;
        cj("#searchByRange").hide();
    }
</script>
'; ?>

<?php if ($this->_tpl_vars['action'] == 2 && ( $this->_tpl_vars['form']['data_type']['value']['1']['0'] == 'CheckBox' || ( $this->_tpl_vars['form']['data_type']['value']['1']['0'] == 'Radio' && $this->_tpl_vars['form']['data_type']['value']['0']['0'] != 6 ) || $this->_tpl_vars['form']['data_type']['value']['1']['0'] == 'Select' || ( $this->_tpl_vars['form']['data_type']['value']['1']['0'] == 'Multi-Select' && $this->_tpl_vars['dontShowLink'] != 1 ) )): ?>
    <div class="action-link">
        <a href="<?php echo CRM_Utils_System::crmURL(array('p' => "civicrm/admin/custom/group/field/option",'q' => "reset=1&action=browse&fid=".($this->_tpl_vars['id'])."&gid=".($this->_tpl_vars['gid'])), $this);?>
">&raquo; <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>View / Edit Multiple Choice Options<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
    </div>
<?php endif; ?>