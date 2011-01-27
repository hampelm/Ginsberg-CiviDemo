<?php /* Smarty version 2.6.26, created on 2011-01-27 10:39:16
         compiled from CRM/Contact/Form/Edit/Address.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'ts', 'CRM/Contact/Form/Edit/Address.tpl', 40, false),array('function', 'help', 'CRM/Contact/Form/Edit/Address.tpl', 83, false),array('function', 'crmURL', 'CRM/Contact/Form/Edit/Address.tpl', 160, false),)), $this); ?>

<?php if ($this->_tpl_vars['title'] && $this->_tpl_vars['className'] == 'CRM_Contact_Form_Contact'): ?>
<div id = "addressBlockId" class="crm-accordion-wrapper crm-address-accordion crm-accordion-closed">
 <div class="crm-accordion-header">
  <div class="icon crm-accordion-pointer"></div> 
	<?php echo $this->_tpl_vars['title']; ?>

 </div><!-- /.crm-accordion-header -->
 <div class="crm-accordion-body" id="addressBlock">
<?php endif; ?>

 <div id="Address_Block_<?php echo $this->_tpl_vars['blockId']; ?>
" <?php if ($this->_tpl_vars['className'] == 'CRM_Contact_Form_Contact'): ?> class="boxBlock crm-edit-address-block" <?php endif; ?>>
  <?php if ($this->_tpl_vars['blockId'] > 1): ?><fieldset><legend><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Additional Address<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></legend><?php endif; ?>
  <table class="form-layout-compressed crm-edit-address-form">
     <?php if ($this->_tpl_vars['masterAddress'][$this->_tpl_vars['blockId']] > 0): ?>
        <tr><td><div class="message status"><div class="icon inform-icon"></div>&nbsp; <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['masterAddress'][$this->_tpl_vars['blockId']])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>This address is shared with %1 contact record(s). Modifying this address will automatically update the shared address for these contacts.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div></td></tr>
     <?php endif; ?>
     <tr>
	 <?php if ($this->_tpl_vars['className'] == 'CRM_Contact_Form_Contact'): ?>
        <td id='Address-Primary-html' colspan="2">
           <span class="crm-address-element location_type_id-address-element"><?php echo $this->_tpl_vars['form']['address'][$this->_tpl_vars['blockId']]['location_type_id']['label']; ?>

           <?php echo $this->_tpl_vars['form']['address'][$this->_tpl_vars['blockId']]['location_type_id']['html']; ?>
</span>
           <span class="crm-address-element is_primary-address-element"><?php echo $this->_tpl_vars['form']['address'][$this->_tpl_vars['blockId']]['is_primary']['html']; ?>
</span>
           <span class="crm-address-element is_billing-address-element"><?php echo $this->_tpl_vars['form']['address'][$this->_tpl_vars['blockId']]['is_billing']['html']; ?>
</span>
        </td>
     <?php if ($this->_tpl_vars['blockId'] > 0): ?>
         <td>
             <a href="#" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Delete Address Block<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" onClick="removeBlock( 'Address', '<?php echo $this->_tpl_vars['blockId']; ?>
' ); return false;"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Delete this address<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
         </td>
     <?php endif; ?>
     </tr>
     <script type="text/javascript">
     <?php echo '
         function showHideSharedAddress( blockNo, showSelect ) {
             // based on checkbox, show or hide
             if ( cj( \'#address\\\\[\' + blockNo + \'\\\\]\\\\[use_shared_address\\\\]\' ).attr( \'checked\') ) {
                 if ( showSelect && cj( \'#shared-address-display-\' + blockNo ).length == 0 ) {
                     cj( \'#shared-address-\' + blockNo ).show( );
                 }
                 
                 cj( \'table#address_\' + blockNo ).hide( );
                 cj( \'#shared-address-display-\' + blockNo ).show( );
                 cj( \'#shared-address-display-cancel-\' + blockNo ).hide( );
             } else {
                 cj( \'#shared-address-\' + blockNo ).hide( );
                 cj( \'table#address_\' + blockNo ).show( );
                 cj( \'#shared-address-display-\' + blockNo ).hide( );
                 cj( \'#shared-address-display-cancel-\' + blockNo ).hide( );
             }
         }
     '; ?>

     </script>
     
     <tr>
        <td>
            <?php echo $this->_tpl_vars['form']['address'][$this->_tpl_vars['blockId']]['use_shared_address']['html']; ?>
<?php echo $this->_tpl_vars['form']['address'][$this->_tpl_vars['blockId']]['use_shared_address']['label']; ?>
<?php echo smarty_function_help(array('id' => "id-sharedAddress",'file' => "CRM/Contact/Form/Contact.hlp"), $this);?>
<br />
            <?php if ($this->_tpl_vars['sharedAddresses'][$this->_tpl_vars['blockId']]['shared_address_display']): ?>
                <span class="shared-address-display" id="shared-address-display-name-<?php echo $this->_tpl_vars['blockId']; ?>
">
                    <?php echo $this->_tpl_vars['sharedAddresses'][$this->_tpl_vars['blockId']]['shared_address_display']['name']; ?>

                </span>
                
                <span class="shared-address-display" id="shared-address-display-<?php echo $this->_tpl_vars['blockId']; ?>
" onclick="cj(this).hide( );cj('#shared-address-display-name-<?php echo $this->_tpl_vars['blockId']; ?>
').hide( );cj('#shared-address-display-cancel-<?php echo $this->_tpl_vars['blockId']; ?>
').show( );cj('#shared-address-<?php echo $this->_tpl_vars['blockId']; ?>
').show( );">
                    <?php echo $this->_tpl_vars['sharedAddresses'][$this->_tpl_vars['blockId']]['shared_address_display']['address']; ?>
 <a href='#' onclick='return false;'>( <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Change current shared address<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> )</a>
                </span>
                
                <span id="shared-address-display-cancel-<?php echo $this->_tpl_vars['blockId']; ?>
" class="hiddenElement" onclick="cj(this).hide( );cj('#shared-address-display-name-<?php echo $this->_tpl_vars['blockId']; ?>
').show( );cj('#shared-address-display-<?php echo $this->_tpl_vars['blockId']; ?>
').show( );cj('#shared-address-<?php echo $this->_tpl_vars['blockId']; ?>
').hide( );">
                    <a href='#' onclick='return false;'>( <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Cancel<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> )</a>
                </span>
            <?php endif; ?>
            <table id="shared-address-<?php echo $this->_tpl_vars['blockId']; ?>
" class="form-layout-compressed hiddenElement">
               <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Form/NewContact.tpl", 'smarty_include_vars' => array('blockNo' => ($this->_tpl_vars['blockId']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            </table>
        </td>
     </tr>
     
     <script type="text/javascript">
     <?php echo '
     cj( function( ) {
         var blockNo = '; ?>
<?php echo $this->_tpl_vars['blockId']; ?>
<?php echo ';
         
         // call this when form loads
         showHideSharedAddress( blockNo, true );
         
         // handle check / uncheck of checkbox
         cj( \'#address\\\\[\' + blockNo + \'\\\\]\\\\[use_shared_address\\\\]\' ).click( function( ) {
             showHideSharedAddress( blockNo, true );
         });
         
         // start of code to add onchange event for hidden element
         var contactHiddenElement = \'input[name=contact_select_id[\' + blockNo +\']]\';
         
         // store initial value
         var _default  = cj( contactHiddenElement ).val();

         // observe changes
         cj( contactHiddenElement ).change(function( ) {
            var sharedContactId = cj( this ).val( );
            if ( !sharedContactId || isNaN( sharedContactId ) ) {
                return;
            }
            
            var addressHTML = \'\';
            cj( ).crmAPI( \'location\', \'get\', { \'contact_id\': sharedContactId, \'version\': \'3.0\' }, {
                  success: function( response ) {
                      if ( response.address ) {
                          var selected = \'checked\';
                          var addressExists = false;
                          cj.each( response.address, function( i, val ) {
                              if ( i > 1 ) {
                                  selected = \'\';
                              } else {
                                  cj( \'input[name="address[\' + blockNo + \'][master_id]"]\' ).val( val.id );
                              }
                              addressHTML = addressHTML + \'<input type="radio" name="selected_shared_address-\'+ blockNo +\'" value=\' + val.id + \' \' + selected +\'>\' + val.display + \'<br/>\'; 
                              addressExists = true; 
                          });

                          if ( addressExists  ) {
                              cj( \'#shared-address-\' + blockNo + \' .shared-address-list\' ).remove( );
                              cj( \'#shared-address-\' + blockNo ).append( \'<tr class="shared-address-list"><td></td><td>\' + addressHTML + \'</td></tr>\');
                              cj( \'input[name^=selected_shared_address-]\' ).click( function( ) {
                                  // get the block id
                                  var elemId = cj(this).attr( \'name\' ).split(\'-\');
                                  cj( \'input[name="address[\' + elemId[1] + \'][master_id]"]\' ).val( cj(this).val( ) );
                              });
                          } else {
                              var helpText = '; ?>
"<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Selected contact does not have an address. Please select a contact with address else add an address to the existing selected contact."<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo ';        
                              cj( \'#shared-address-\' + blockNo + \' .shared-address-list\' ).remove( );
                              cj( \'#shared-address-\' + blockNo ).append( \'<tr class="shared-address-list"><td></td><td>\' + helpText + \'</td></tr>\');
                          }
                      }
                  },
                  ajaxURL: '; ?>
"<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/ajax/rest','h' => 0), $this);?>
"<?php echo ' 
            });            
         });

         // continuous check for changed value
         setInterval(function( ) {
           if ( cj( contactHiddenElement ).val( ) != _default ) {
             // trigger native
             cj( contactHiddenElement ).change( );

             // update stored value
             _default = cj( contactHiddenElement ).val( );
           }  

         }, 500);
         
         // end of code to add onchange event for hidden element
     });
     '; ?>

     </script>
 <?php endif; ?>    
     <tr><td>

     <table id="address_<?php echo $this->_tpl_vars['blockId']; ?>
" style="display:block" class="form-layout-compressed">
                  <?php $_from = $this->_tpl_vars['addressSequence']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['addressElement']):
?>
              <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Form/Edit/Address/".($this->_tpl_vars['addressElement']).".tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
         <?php endforeach; endif; unset($_from); ?>
         <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Form/Edit/Address/geo_code.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
     </table>

     </td></tr>
  </table>
  <div class="crm-edit-address-custom_data"> 
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Form/Edit/Address/CustomData.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  </div> 

  <?php if ($this->_tpl_vars['className'] == 'CRM_Contact_Form_Contact'): ?>
      <div id="addMoreAddress<?php echo $this->_tpl_vars['blockId']; ?>
" class="crm-add-address-wrapper">
          <a href="#" class="button" onclick="buildAdditionalBlocks( 'Address', '<?php echo $this->_tpl_vars['className']; ?>
' );return false;"><span><div class="icon add-icon"></div><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Another Address<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></a>
      </div>
  <?php endif; ?>

<?php if ($this->_tpl_vars['title'] && $this->_tpl_vars['className'] == 'CRM_Contact_Form_Contact'): ?>
</div>
 </div><!-- /.crm-accordion-body -->
</div><!-- /.crm-accordion-wrapper -->
<?php endif; ?>
<?php echo '
<script type="text/javascript">
//to check if same location type is already selected.
function checkLocation( object, noAlert ) {
    var selectedText = cj( \'#\' + object + \' :selected\').text();
	cj( \'td#Address-Primary-html select\' ).each( function() {
		element = cj(this).attr(\'id\');
		if ( cj(this).val() && element != object && selectedText == cj( \'#\' + element + \' :selected\').text() ) {
			if ( ! noAlert ) {
			    var alertText = "'; ?>
<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Location type<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php echo '" + selectedText + "'; ?>
 <?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>has already been assigned to another address. Please select another location type for this address.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '";
			    alert( alertText );
			}
			cj( \'#\' + object ).val(\'\');
		}
	});
}
</script>
'; ?>

<?php echo '
<script type="text/javascript">
cj(function() {
   cj().crmaccordions(); 
});
</script>
'; ?>

