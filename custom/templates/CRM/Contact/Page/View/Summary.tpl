{*
 +--------------------------------------------------------------------+
 | CiviCRM version 3.3                                                |
 +--------------------------------------------------------------------+
 | Copyright CiviCRM LLC (c) 2004-2010                                |
 +--------------------------------------------------------------------+
 | This file is a part of CiviCRM.                                    |
 |                                                                    |
 | CiviCRM is free software; you can copy, modify, and distribute it  |
 | under the terms of the GNU Affero General Public License           |
 | Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
 |                                                                    |
 | CiviCRM is distributed in the hope that it will be useful, but     |
 | WITHOUT ANY WARRANTY; without even the implied warranty of         |
 | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
 | See the GNU Affero General Public License for more details.        |
 |                                                                    |
 | You should have received a copy of the GNU Affero General Public   |
 | License and the CiviCRM Licensing Exception along                  |
 | with this program; if not, contact CiviCRM LLC                     |
 | at info[AT]civicrm[DOT]org. If you have questions about the        |
 | GNU Affero General Public License or the licensing of CiviCRM,     |
 | see the CiviCRM license FAQ at http://civicrm.org/licensing        |
 +--------------------------------------------------------------------+
*}
{* Contact Summary template for new tabbed interface. Replaces Basic.tpl *}
{if $imageURL }
    <div>
        {include file="CRM/Contact/Page/ContactImage.tpl"}
    </div>
{/if}
{if $action eq 2}
    {include file="CRM/Contact/Form/Contact.tpl"}
{else}


<div class="crm-actions-ribbon">
                    <ul id="actions">
                    	{* CRM-4418 *}
                        {* user should have edit permission to delete contact *}
                        {if (call_user_func(array('CRM_Core_Permission','check'), 'access deleted contacts') and 
                        $is_deleted)}

                        <li class="crm-delete-action crm-contact-restore">
                        <a href="{crmURL p='civicrm/contact/view/delete' q="reset=1&cid=$contactId&restore=1"}" class="delete button" title="{ts}Restore{/ts}">
                        <span><div class="icon restore-icon"></div>{ts}Restore from Trash{/ts}</span>
                        </a>
                        </li>
                        
                        {if call_user_func(array('CRM_Core_Permission','check'), 'delete contacts')} 
                        <li class="crm-delete-action crm-contact-permanently-delete">
                        <a href="{crmURL p='civicrm/contact/view/delete' q="reset=1&delete=1&cid=$contactId&skip_undelete=1"}" class="delete button" title="{ts}Delete Permanently{/ts}">
                        <span><div class="icon delete-icon"></div>{ts}Delete Permanently{/ts}</span>
                        </a>
                        </li>
                        {/if}

                        {elseif call_user_func(array('CRM_Core_Permission','check'), 'delete contacts')}
                        <li class="crm-delete-action crm-contact-delete">
                        <a href="{crmURL p='civicrm/contact/view/delete' q="reset=1&delete=1&cid=$contactId"}" class="delete button" title="{ts}Delete{/ts}">
                        <span><div class="icon delete-icon"></div>{ts}Delete{/ts}</span>
                        </a>
                        </li>
                        {/if}
                    
                    	{* Include the Actions button with dropdown if session has 'edit' permission *}
                        {if $permission EQ 'edit' and !$isDeleted}
                        <li class="crm-contact-activity">
                            {include file="CRM/Contact/Form/ActionsButton.tpl"}
                        </li>
                        <li>
			{assign var='urlParams' value="reset=1&action=update&cid=$contactId"}
		        {if $searchKey}
		            {assign var='urlParams' value="reset=1&action=update&cid=$contactId&key=$searchKey"}
 		        {/if}
			{if $context}
			    {assign var='urlParams' value=$urlParams|cat:"&context=$context"}
			{/if}
			
                        <a href="{crmURL p='civicrm/contact/add' q=$urlParams}" class="edit button" title="{ts}Edit{/ts}">
                        <span><div class="icon edit-icon"></div>{ts}Edit{/ts}</span>
                        </a>
                        </li>
                        {/if}
                        
                        {if $groupOrganizationUrl}
                        <li class="crm-contact-associated-groups">
                        <a href="{$groupOrganizationUrl}" class="associated-groups button" title="{ts}Associated Multi-Org Group{/ts}">
                        <span><div class="icon associated-groups-icon"></div>{ts}Associated Multi-Org Group{/ts}</span>
                        </a>   
                        </li>
                        {/if}
                    </ul> 
                    <div class="clear"></div>
                        
                        
                </div><!-- .crm-actions-ribbon -->

<div class="crm-block crm-content-block crm-contact-page">

    <div id="mainTabContainer" class="ui-tabs ui-widget ui-widget-content ui-corner-all">
        <ul class="crm-contact-tabs-list">
            <li id="tab_summary" class="crm-tab-button">
            	<a href="#contact-summary" title="{ts}Summary{/ts}">
            	<span> </span> {ts}Summary{/ts}
            	<em>&nbsp;</em>
            	</a>
            </li>
            {foreach from=$allTabs key=tabName item=tabValue}
            <li id="tab_{$tabValue.id}" class="crm-tab-button crm-count-{$tabValue.count}">
            	<a href="{$tabValue.url}" title="{$tabValue.title}">
            		<span> </span> {$tabValue.title}
            		<em>{$tabValue.count}</em>
            	</a>
            </li>
            {/foreach}
        </ul>

        <div title="Summary" id="contact-summary" class="ui-tabs-panel ui-widget-content ui-corner-bottom">
            
            {if $hookContentPlacement neq 3}
                            
                {if $hookContent and $hookContentPlacement eq 2}
                    {include file="CRM/Contact/Page/View/SummaryHook.tpl"}
                {/if}
                
                    
                    {if $current_employer_id}
                        <h3 class="jobtitle">
                        {if $job_title}{$job_title}{/if} at 
                        <a href="{crmURL p='civicrm/contact/view' q="reset=1&cid=`$current_employer_id`"}" title="{ts}view current employer{/ts}">{$current_employer}</a>
                        </h3>
                    {/if}
                    {if $contactTag}<div id="tags"><a href="{crmURL p='civicrm/contact/view' q="reset=1&cid=$contactId&selectedChild=tag"}" title="{ts}Edit Tags{/ts}">{ts}Tags{/ts}</a>: {$contactTag}</div>{/if}
                
                
                <div class="floatcontainer">
                <div class="left-half">
                
                
                {if $nick_name}
                {ts}Nickname{/ts}: {$nick_name}
                {/if}
                
                {if $email}
                {foreach from=$email key="blockId" item=item}
                    {if $item.email}
                        <div class="contact-email">
                            <span class={if $privacy.do_not_email}"do-not-email" title="{ts}Privacy flag: Do Not Email{/ts}" {elseif $item.on_hold}"email-hold" title="{ts}Email on hold - generally due to bouncing.{/ts}" {elseif $item.is_primary eq 1}"primary"{/if}>
                                <a href="mailto:{$item.email}">{$item.email}</a> 
                                ({$item.location_type}) 
                                {if $item.on_hold}
                                    ({ts}On Hold{/ts})
                                {/if}
                                {if $item.is_bulkmail}
                                    ({ts}Bulk{/ts})
                                {/if}
                            </span>
                        </div>
                    {/if}
                {/foreach} {* end foreach email *}
                {/if}
                
                {if $website}
                {foreach from=$website item=item}
                    {if $item.url}
                        <div class="contact-website"><a href="{$item.url}" target="_blank">{$item.url}</a></divs>
                    {/if}
                {/foreach}
                {/if}
                
                {if $phone OR $im OR $openid}
                        {foreach from=$phone item=item}
                            {if $item.phone}
                                <div class="{if $item.is_primary eq 1}primary{/if}">
                                    <span class="crm-phone {if $privacy.do_not_phone}do-not-phone{/if}" {if $privacy.do_not_phone}title={ts}"Privacy flag: Do Not Phone"{/ts}{/if}>
                                        {$item.phone}
                                         ({$item.location_type}&nbsp;{$item.phone_type} - {if $privacy.do_not_phone}do not call{/if})
                                    </span>
                                </div>
                            {/if}
                        {/foreach}
                        {foreach from=$im item=item}
                            {if $item.name or $item.provider}
                                {if $item.name}
                                    <div class="crm-im">{$item.provider}&nbsp;({$item.location_type})</td><td {if $item.is_primary eq 1}class="primary"{/if}>{$item.name}</div>
                                {/if}
                            {/if}
                        {/foreach}
				{/if}
				
				<ul class="privacy font-red upper">
                    {foreach from=$privacy item=priv key=index}
                        {if $priv}<li>{$privacy_values.$index}</li>{/if}
                    {/foreach}
                    {if $is_opt_out}<li>{ts}No Bulk Emails (User Opt Out){/ts}</li>{/if}
                </ul>
                
				</div> <!-- end left -->
				
				<div class="right-half">
				{if $address}
				
                    {foreach from=$address item=add key=locationIndex}
                    <div class="crm-address_{$locationIndex} crm-address-block crm-address_type_{$add.location_type}">
                                    <h3>{ts 1=$add.location_type}%1&nbsp;Address{/ts}:</h3>
                                    {if $config->mapAPIKey AND $add.geo_code_1 AND $add.geo_code_2}
                                        <br /><a href="{crmURL p='civicrm/contact/map' q="reset=1&cid=`$contactId`&lid=`$add.location_type_id`"}" title="{ts 1='&#123;$add.location_type&#125;'}Map %1 Address{/ts}"><span class="geotag">{ts}Map{/ts}</span></a>
                                    {/if}
                                    {if $sharedAddresses.$locationIndex.shared_address_display.name}
                                         <strong>{ts}Shared with:{/ts}</strong><br />
                                         {$sharedAddresses.$locationIndex.shared_address_display.name}<br />
                                     {/if}
                                     
                                     {$add.display|nl2br}

                        
		                {foreach from=$add.custom item=customGroup key=cgId}
                            {assign var="isAddressCustomPresent" value=1}
		                    {foreach from=$customGroup item=customValue key=cvId}
		                        <div id="address_custom_{$cgId}_{$locationIndex}" class="crm-accordion-wrapper crm-address-custom-{$cgId}-{$locationIndex}-accordion crm-accordion-closed">
				                    {$customValue.title}
	                                {foreach from=$customValue.fields item=customField key=cfId}
		                                <div class="contact-address">{$customField.field_title}: {$customField.field_value}</div>
          	                        {/foreach}
		                        </div>
                            {/foreach}
                        {/foreach}
                    {/foreach}{* end foreach address *}

                    <div class="clear"></div>
                </div>
				{/if} {* end if address *}
				
				</div>
                </div>
                    

                        {include file="CRM/Contact/Page/View/Demographics.tpl"}
						
<!--

{if $userRecordUrl OR $source}
<tr>
    {if $userRecordUrl}
    <td class="label">{ts}User ID{/ts}</td><td><a title="View user record" class="user-record-link" href="{$userRecordUrl}">{$userRecordId}</a></div>
    {/if}
</tr>
{/if}

                    {if $legal_name}
                    <td class="label">{ts}Legal Name{/ts}</td>
                    <td>{$legal_name}</td>
                    {/if}
                    
                    {if $source}
                    <td class="label">{ts}Source{/ts}</td><td>{$source}</td>
                    {/if}


                        
                        {if $sic_code}
                        <td class="label">{ts}SIC Code{/ts}</td>
                        <td>{$sic_code}</td>
                        {/if}


                        {if $user_unique_id}
                            <tr>
                                <td class="label">{ts}Unique Id{/ts}</td>
                                <td>{$user_unique_id}</td>
                                <td></td>
                            </tr>
                        {/if}

                        <tr>
                            <td class="label">{ts}Email Format{/ts}</td><td>{$preferred_mail_format}</td>
                        </tr>


                        {if $preferred_language}
                        <tr>
                            <td class="label">{ts}Preferred Language{/ts}</td><td>{$preferred_language}</td>
                        </tr>
                        {/if}

                        <div class="contactCardLeft">
                        {if $contact_type neq 'Organization'}
                         <table>
                            <tr>
                                <td class="label">{ts}Email Greeting{/ts}{if $email_greeting_custom}<br/><span style="font-size:8px;">({ts}Customized{/ts})</span>{/if}</td>
                                <td>{$email_greeting_display}</td>
                            </tr>
                            <tr>
                                <td class="label">{ts}Postal Greeting{/ts}{if $postal_greeting_custom}<br/><span style="font-size:8px;">({ts}Customized{/ts})</span>{/if}</td>
                                <td>{$postal_greeting_display}</td>
                            </tr>
                         </table>
                         {/if}
                        </div>
                        <div class="contactCardRight">
                         <table>
                            <tr>
                                <td class="label">{ts}Addressee{/ts}{if $addressee_custom}<br/><span style="font-size:8px;">({ts}Customized{/ts})</span>{/if}</td>
                                <td>{$addressee_display}</td>
                            </tr>
                         </table>
                        </div>
-->
						

                <div id="customFields">
                            {include file="CRM/Contact/Page/View/CustomDataView.tpl" side='1'}

                            {include file="CRM/Contact/Page/View/CustomDataView.tpl" side='0'}
                </div>
                
                {literal}
                <script type="text/javascript">
                    cj('.columnheader').click( function( ) {
                        var aTagObj = cj(this).find('a');
                        if ( aTagObj.hasClass( "expanded" ) ) {
                            cj(this).parent().find('tr:not(".columnheader")').hide( );
                        } else {    
                            cj(this).parent().find('tr:not(".columnheader")').show( );
                        }
                        aTagObj.toggleClass("expanded");
                        return false;
                    });
                </script>
                {/literal}
                {if $hookContent and $hookContentPlacement eq 1}
                    {include file="CRM/Contact/Page/View/SummaryHook.tpl"}
                {/if}
            {else}
                {include file="CRM/Contact/Page/View/SummaryHook.tpl"}
            {/if}
        </div>
		<div class="clear"></div>
    </div>
 <script type="text/javascript"> 
 var selectedTab  = 'summary';
 var spinnerImage = '<img src="{$config->resourceBase}i/loading.gif" style="width:10px;height:10px"/>';
 {if $selectedChild}selectedTab = "{$selectedChild}";{/if}  
 {literal}
 function fixTabAbort(event,ui){
//	jQuery(ui.tab).data("cache.tabs",(jQuery(ui.panel).html() == "") ? false : true);
    }

//explicitly stop spinner
function stopSpinner( ) {
 cj('li.crm-tab-button').each(function(){ cj(this).find('span').text(' ');})	 
}
 cj( function() {
     var tabIndex = cj('#tab_' + selectedTab).prevAll().length;
     cj("#mainTabContainer").tabs({ selected: tabIndex, spinner: spinnerImage,cache: true, select: fixTabAbort, load: stopSpinner});
     cj(".crm-tab-button").addClass("ui-corner-bottom");     
 });
 {/literal}
 </script>

{/if}
{literal}
<script type="text/javascript">
function showHideSignature( blockId ) {
	  cj("#Email_Block_" + blockId + "_signature").show( );   
	  
	  cj("#Email_Block_" + blockId + "_signature").dialog({
		title: "Signature",
		modal: true,
		bgiframe: true,
		width: 900,
		height: 500,
		overlay: { 
			opacity: 0.5, 
			background: "black"
		},

		beforeclose: function(event, ui) {
            		cj(this).dialog("destroy");
        	},

		open:function() {
		},

		buttons: { 
			"Done": function() { 
				cj(this).dialog("destroy"); 
			} 
		} 
		
	  });
}

</script>
{/literal}

{if $isAddressCustomPresent}
    {literal}
        <script type="text/javascript">
            cj(function() {
                cj().crmaccordions(); 
            });
        </script>
    {/literal}
{/if}
<div class="clear"></div>
</div><!-- /.crm-content-block -->
