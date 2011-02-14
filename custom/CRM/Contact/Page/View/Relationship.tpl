{*
 +--------------------------------------------------------------------+
 | CiviCRM version 3.2                                                |
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
{* Relationship tab within View Contact - browse, and view relationships for a contact *}
{if $cdType }
  {include file="CRM/Custom/Form/CustomData.tpl"}
{else}
 <div class="view-content">
   {if $action eq 1 or $action eq 2 or $action eq 4 or $action eq 8} {* add, update or view *}
    {include file="CRM/Contact/Form/Relationship.tpl"}
  {/if}
<div class="crm-block crm-content-block clear-block">
  {if $action NEQ 1 AND $action NEQ 2 AND $permission EQ 'edit'}
        <div class="action-link">
            <a accesskey="N" href="{crmURL p='civicrm/contact/view/rel' q="cid=`$contactId`&action=add&reset=1"}" class="add button"><span><div class="icon add-icon"></div>{ts}Add Relationship{/ts}</span></a>
        </div>
  {/if}
  {* include file="CRM/common/jsortable.tpl" useAjax=0* }  
   
  {* start of code to show current relationships *}
  {if $currentRelationships}
    {* show browse table for any action *}
      <div id="active-relationships">
        {if $relationshipTabContext} {*to show the title and links only when viewed from relationship tab, not from dashboard*}
         <h3>{ts}Current Relationships{/ts}</h3>
        {/if}
        
        {strip}
        {foreach from=$currentRelationships item=rel}
            {*assign var = "rtype" value = "" }
            {if $rel.contact_a eq $contactId }
                {assign var = "rtype" value = "a_b" }
            {else}
                {assign var = "rtype" value = "b_a" }
            {/if*}
            <div id="rel_{$rel.id}" class="relationship">
                <div class="relationship-actions">{$rel.action|replace:'xx':$rel.id}</div>
                
            {if $relationshipTabContext}
                <div class="relationship-type"><a href="{crmURL p='civicrm/contact/view/rel' q="action=view&reset=1&selectedChild=rel&cid=`$contactId`&id=`$rel.id`&rtype=`$rel.rtype`"}">{$rel.relation}</a></div>
                <div class="relationship-with"><p class="name"><a href="{crmURL p='civicrm/contact/view' q="action=view&reset=1&cid=`$rel.cid`"}">{$rel.name}</a> {if $rel.description} ({$rel.description}) {/if}</p>
            {else}
                <div class="relationship-type">{$rel.relation}</div>
                <div class="relationship-with"><p class="name">{$rel.name} {if $rel.description} ({$rel.description}) {/if}</p>
            {/if}
                
            {if $rel.start_date}<p>{$rel.start_date|crmDate} {if $rel.end_date}to {$rel.end_date|crmDate}{/if}</p>{/if}
<!--
{$rel|@debug_print_var}

                <td>{$rel.city}</td>
                <td>{$rel.state}</td>
                <td>{$rel.email}</td>
                <td>{$rel.phone}</td> 
-->
                </div><!-- end relationship-with -->
            </div><!-- end relationship -->
            
        {/foreach}
        {/strip}
{/if}
{* end of code to show current relationships *}
</div>

<!--
{if NOT ($currentRelationships or $inactiveRelationships) }

  {if $action NEQ 1} {* show 'no relationships' message - unless already in 'add' mode. *}
       <div class="messages status">
            <div class="icon inform-icon"></div>
           {capture assign=crmURL}{crmURL p='civicrm/contact/view/rel' q="cid=`$contactId`&action=add&reset=1"}{/capture}
           {if $permission EQ 'edit'}
                    {ts 1=$crmURL}There are no Relationships entered for this contact. You can <a accesskey="N" href='%1'>add one</a>.{/ts}
                {elseif ! $relationshipTabContext}
                    {ts}There are no related contacts / organizations on record for you.{/ts}
                {else}
                    {ts}There are no Relationships entered for this contact.{/ts}
                {/if}
        </div>
  {/if}
{/if}
-->

{* start of code to show inactive relationships *}
{if $inactiveRelationships}
    {* show browse table for any action *}
      <div id="inactive-relationships">
        <h3>{ts}Past Relationships{/ts}</h3>
        {strip}
        <div id="inactive_relationship">

        {foreach from=$inactiveRelationships item=rel}
          {assign var = "rtype" value = "" }
          {if $rel.contact_a > 0 }
            {assign var = "rtype" value = "b_a" }
          {else}
            {assign var = "rtype" value = "a_b" }
          {/if}
          <div id="rel_{$rel.id}">
            <div class="relationship-type">{$rel.relation}</div>
            <div class="relationship-with">
                <div class="relationship-actions">{$rel.action|replace:'xx':$rel.id}</div>
                
                <p class="name"><a href="{crmURL p='civicrm/contact/view' q="reset=1&cid=`$rel.cid`"}">{$rel.name}</a> {if $rel.description} ({$rel.description}) {/if}</p>
                
                <p>From {$rel.start_date|crmDate} to {$rel.end_date|crmDate}</p>
            </div>
          </div>
        {/foreach}
        </div><!-- end inactive relationships -->
        {/strip}
        </div>    
{/if}
{* end of code to show inactive relationships *}


{/if} {* close of custom data else*}

{if $searchRows }
 {*include custom data js file*}
 {include file="CRM/common/customData.tpl"}
{/if}
</div>
