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
<div class="contactCardRight">
    {if $contact_type eq 'Individual' AND $showDemographics}
    <table>
        {if $gender_display}
        <tr>
            <td class="label">{ts}Gender{/ts}</td><td>{$gender_display}</td>
        </tr>
        {/if}
        
        {if $birth_date_display}
        <tr>
            <td class="label">{ts}Date of birth{/ts}</td><td>
            {if $birthDateViewFormat}	 
                {$birth_date_display|crmDate:$birthDateViewFormat}
            {else}
                {$birth_date_display|crmDate}
            {/if} 
        </td>        
        </tr>
        {/if}
        
        {if $is_deceased eq 1 OR $age}
            <tr>
            {if $is_deceased eq 1}
               {if $deceased_date}<td class="label">{ts}Date Deceased{/ts}</td>
                 <td>
                 {if $birthDateViewFormat}          
    		        {$deceased_date_display|crmDate:$birthDateViewFormat}
                 {else}
                    {$deceased_date_display|crmDate}
                 {/if}
                 </td>
               {else}<td class="label" colspan=2><span class="font-red upper">{ts}Contact is Deceased{/ts}</span></td>
               {/if}
             {else}
                <td class="label">{ts}Age{/ts}</td>
                <td>{if $age.y}{ts count=$age.y plural='%count years'}%count year{/ts}{elseif $age.m}{ts count=$age.m plural='%count months'}%count month{/ts}{/if} </td>
             {/if}
            </tr>
        {/if}
        
    </table>
  {/if}
</div><!-- #contactCardRight -->
