<?php /* Smarty version 2.6.26, created on 2011-01-27 10:14:14
         compiled from CRM/common/Navigation.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'crmURL', 'CRM/common/Navigation.tpl', 30, false),)), $this); ?>
<div id="menu-container" style="display:none;">
    <ul id="civicrm-menu">
        <?php if (call_user_func ( array ( 'CRM_Core_Permission' , 'giveMeAllACLs' ) )): ?>
        <li id="crm-qsearch" class="menumain">
            <form action="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/search/basic','h' => 0), $this);?>
" name="search_block" id="id_search_block" method="post" onsubmit="getSearchURLValue( );">
            	<div id="quickSearch">
            	</div>
            </form>
        </li>
	<?php endif; ?>
        <?php echo $this->_tpl_vars['navigation']; ?>

    </ul>
</div>

<?php echo '
<script type="text/javascript">
//CRM-6776, enter-to-submit functionality is broken for IE due to hidden field
cj( document ).ready( function( ) {
   var htmlContent = \'\';
      if ( cj.browser.msie ) {
          if( cj.browser.version.substr( 0,1 ) == \'7\' ) {
              htmlContent = \'<input type="submit" value="Go" name="_qf_Basic_refresh" class="form-submit default" style ="margin-right: -5px" />\';
          } else {
              htmlContent = \'<input type="submit" value="Go" name="_qf_Basic_refresh" class="form-submit default" />\';
          }
          htmlContent += \'<input type="text" class="form-text" id="sort_name_navigation" name="sort_name" style="width: 12em; margin-left: -45px;" />\' + 
                         \'<input type="text" id="sort_contact_id" style="display: none" />\';
          cj( \'#quickSearch\' ).html( htmlContent );            
      } else {
          htmlContent += \'<input type="text" class="form-text" id="sort_name_navigation" name="sort_name" style="width: 12em;" />\' + 
                         \'<input type="hidden" id="sort_contact_id" value="" />\' + 
                         \'<input type="submit" value="{ts}Go{/ts}" name="_qf_Basic_refresh" class="form-submit default" style="display: none;" />\';    
          cj( \'#quickSearch\' ).html( htmlContent );
   }
});
function getSearchURLValue( )
{
    var contactId =  cj( \'#sort_contact_id\' ).val();
    if ( ! contactId || isNaN( contactId ) ) {
        var sortValue = cj( \'#sort_name_navigation\' ).val();
        if ( sortValue ) { 
            //using xmlhttprequest check if there is only one contact and redirect to view page
            var dataUrl = '; ?>
"<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/ajax/contact','h' => 0,'q' => 'name='), $this);?>
"<?php echo ' + sortValue;

            var response = cj.ajax({
                url: dataUrl,
                async: false
                }).responseText;

            contactId = response;
        }
    }
    
    if ( contactId ) {
        var url = '; ?>
"<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/view','h' => 0,'q' => 'reset=1&cid='), $this);?>
"<?php echo ' + contactId;
        document.getElementById(\'id_search_block\').action = url;
    }
}

cj( function() {
    cj( "#admin-menu>ul>li>a" ).each( function( ) {
        if ( cj( this ).html( ) == \'CiviCRM\' ) {
            cj( this ).click ( function( ) {
                cj( "#civicrm-menu" ).toggle( );
                return false;
            });
        }
     });

    var contactUrl = '; ?>
"<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/ajax/rest','q' => 'className=CRM_Contact_Page_AJAX&fnName=getContactList&json=1&context=navigation','h' => 0), $this);?>
"<?php echo ';

    cj( \'#sort_name_navigation\' ).autocomplete( contactUrl, {
        width: 200,
        selectFirst: false,
        minChars:1,
        matchContains: true 	 
    }).result(function(event, data, formatted) {
       document.location='; ?>
"<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/view','h' => 0,'q' => 'reset=1&cid='), $this);?>
"<?php echo '+data[1];
       return false;
    });    
});

var framework = "'; ?>
<?php echo $this->_tpl_vars['config']->userFramework; ?>
<?php echo '";
if ( framework != \'Joomla\') {
	cj(\'body\').prepend( cj("#menu-container").html() );

	//Track Scrolling
	cj(window).scroll( function () { 
	   var scroll = document.documentElement.scrollTop || document.body.scrollTop;
	   cj(\'#civicrm-menu\').css({top: "scroll", position: "fixed", top: "0px"}); 
	   cj(\'div.sticky-header\').css({ \'top\' : "23px", position: "fixed" });
	});
} else {
	   cj(\'div#toolbar-box div.m\').html(cj("#menu-container").html());
	   cj(\'#civicrm-menu\').ready( function(){ 
			cj(\'.outerbox\').css({ \'margin-top\': \'6px\'});
			cj(\'#root-menu-div .menu-ul li\').css({ \'padding-bottom\' : \'2px\', \'margin-top\' : \'2px\' });
			cj(\'img.menu-item-arrow\').css({ \'top\' : \'4px\' }); 
		});
}
	var resourceBase   = '; ?>
"<?php echo $this->_tpl_vars['config']->resourceBase; ?>
"<?php echo ';
	cj(\'#civicrm-menu\').menu( {arrowSrc: resourceBase + \'packages/jquery/css/images/arrow.png\'} );
</script>
'; ?>
