<?php /* Smarty version 2.6.26, created on 2011-01-27 10:39:16
         compiled from CRM/common/additionalBlocks.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'crmURL', 'CRM/common/additionalBlocks.tpl', 59, false),)), $this); ?>
<?php echo '
<script type="text/javascript" >
cj( function( ) {
    '; ?>

    <?php if ($this->_tpl_vars['generateAjaxRequest']): ?>
        <?php $_from = $this->_tpl_vars['ajaxRequestBlocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['blockName'] => $this->_tpl_vars['instances']):
?>
            <?php $_from = $this->_tpl_vars['instances']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['instance'] => $this->_tpl_vars['active']):
?>
                buildAdditionalBlocks( '<?php echo $this->_tpl_vars['blockName']; ?>
', '<?php echo $this->_tpl_vars['className']; ?>
' );
            <?php endforeach; endif; unset($_from); ?>  	
        <?php endforeach; endif; unset($_from); ?>
    <?php endif; ?>

    <?php if ($this->_tpl_vars['loadShowHideAddressFields']): ?>
        <?php $_from = $this->_tpl_vars['showHideAddressFields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['blockId'] => $this->_tpl_vars['fieldName']):
?>
           processAddressFields( '<?php echo $this->_tpl_vars['fieldName']; ?>
', '<?php echo $this->_tpl_vars['blockId']; ?>
', 0 );
        <?php endforeach; endif; unset($_from); ?>  
    <?php endif; ?>
    <?php echo '
});

function buildAdditionalBlocks( blockName, className ) {
    var element = blockName + \'_Block_\';

    //get blockcount of last element of relevant blockName
    var previousInstance = cj( \'[id^="\'+ element +\'"]:last\' ).attr(\'id\').slice( element.length );
    var currentInstance  = parseInt( previousInstance ) + 1;

    //show primary option if block count = 2
    if ( currentInstance == 2) {
        cj("#" + blockName + \'-Primary\').show( );
        cj("#" + blockName + \'-Primary-html\').show( );
    }

    var dataUrl = '; ?>
"<?php echo CRM_Utils_System::crmURL(array('h' => 0,'q' => 'snippet=4'), $this);?>
"<?php echo ' + \'&block=\' + blockName + \'&count=\' + currentInstance;;

    if ( className == \'CRM_Event_Form_ManageEvent_Location\' ) {
        dataUrl = ( currentInstance <= 2 ) ? dataUrl + \'&subPage=Location\' : \'\';
    }

    '; ?>

    <?php if ($this->_tpl_vars['qfKey']): ?>    
        dataUrl += "&qfKey=<?php echo $this->_tpl_vars['qfKey']; ?>
";
    <?php endif; ?>
    <?php echo '

    if ( !dataUrl ) {
        return;
    }

    var fname = \'#\' + blockName + \'_Block_\'+ previousInstance;

    cj(\'#addMore\' + blockName + previousInstance ).hide( );
    cj.ajax({ 
        url     : dataUrl,   
        async   : false,
        success : function(html){
            cj(fname).after(html);
        }
    });

    if ( blockName == \'Address\' ) {
        checkLocation(\'address_\' + currentInstance + \'_location_type_id\', true );
    }
}

//select single for is_bulk & is_primary
function singleSelect( object ) {
    var element = object.split( \'_\', 3 );

    var block = (element[\'0\'] == \'Address\') ? \'Primary\' : element[\'2\'].slice(\'2\');
    var execBlock  = \'#\' + element[\'0\'] + \'-\' + block + \'-html Input[id*="\' + element[\'2\'] + \'"]\';

    //element to check for checkbox
    var elementChecked =  cj( \'#\' + object ).attr(\'checked\');
    if ( elementChecked ) {
        cj( execBlock ).each( function() {
            if ( cj(this).attr(\'id\') != object ) {
                cj(this).attr( \'checked\', false );
            }
        });
    } else {
        cj( \'#\' + object ).attr( \'checked\', false );
    }

	//check if non of elements is set Primary / Allowed to Login.
	if( cj.inArray( element[\'2\'].slice(\'2\'), [ \'Primary\', \'Login\' ] ) != -1 ) {
		primary = false;
		cj( execBlock ).each( function( ) { 
			if ( cj(this).attr( \'checked\' ) ) {
				primary = true;				
			}
		});
		if( ! primary ) {
			cj(\'#\' + object).attr( \'checked\', true );
		}
	}
}

function removeBlock( blockName, blockId ) {
    var element = cj("#addressBlock > div").size();
    if ( ( blockName == \'Address\' ) && element == 1 ) {
      return clearFirstBlock(blockName , blockId);
    }

    if ( cj( "#"+ blockName + "_" + blockId + "_IsPrimary").attr(\'checked\') ) {
       	var primaryBlockId = 1;
        // consider next block as a primary,
        // when user delete first block 
        if ( blockId >= 1 ) {
           var blockIds = getAddressBlock(\'next\');
           for ( var i = 0; i <= blockIds.length; i++) {
               var curBlockId = blockIds[i];
	           if ( curBlockId != blockId ) {
	               primaryBlockId = curBlockId;
	               break;
	           }
            }  
        } 
    
        // finally sets the primary address
        cj( \'#\'+ blockName + \'_\' + primaryBlockId + \'_IsPrimary\').attr(\'checked\', true);
    }
    
    //remove the spacer for address block only.
    if ( blockName == \'Address\' && cj( "#"+ blockName + "_Block_" + blockId ).prev().attr(\'class\') == \'spacer\' ){
        cj( "#"+ blockName + "_Block_" + blockId ).prev().remove();
    }

    //unset block from html
    cj( "#"+ blockName + "_Block_" + blockId ).empty().remove();

    //show the link \'add address\' to last element of Address Block
    if ( blockName == \'Address\' ) {
        var lastAddressBlock = cj(\'div[id^=Address_Block_]\').last().attr(\'id\');
        var lastBlockId = lastAddressBlock.split( \'_\' );
        if ( lastBlockId[2] ) {
            cj( \'#addMoreAddress\' + lastBlockId[2] ).show();
        } 
    }
}

function clearFirstBlock( blockName , blockId ) {
    var element =  blockName + \'_Block_\' + blockId;
    cj("#" + element +" input, " + "#" + element + " select").each(function () {
        cj(this).val(\'\'); 
    });
    cj("#addressBlockId").removeClass(\'crm-accordion-open\').addClass(\'crm-accordion-closed\');
}

function getAddressBlock( position ) {
   var addressBlockIds = new Array();
   var i = 0;
   switch ( position ) {
        case \'last\':
              var lastBlockInfo = cj("#addressBlockId > div").children(\':last\').attr(\'id\').split( \'_\', 3);
              addressBlockIds[i] = lastBlockInfo[\'2\'];
              break;
        case \'next\':
              cj("#addressBlockId > div").children().each( function() {
                  if ( cj(this).attr(\'id\') ) {    
                     var blockInfo = cj(this).attr(\'id\').split( \'_\', 3);
                     addressBlockIds[i] = blockInfo[\'2\'];
                     i++;
                  }
              });
              break;
   }
   return addressBlockIds;
}
</script>
'; ?>
