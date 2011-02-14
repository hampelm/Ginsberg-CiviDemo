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
    {if $form.address.$blockId.city}
    <div class="form-item">
          {$form.address.$blockId.city.label}
          {$form.address.$blockId.city.html}
    </div>
    {/if}
    {if $form.address.$blockId.postal_code}
       <div class="form-item zip-form">
          {$form.address.$blockId.postal_code.label}
          {$form.address.$blockId.postal_code.html}-{$form.address.$blockId.postal_code_suffix.html}
<!--
          <span class="description font-italic" style="white-space:nowrap;">{ts}Enter optional 'add-on' code after the dash ('plus 4' code for U.S. addresses).{/ts}</span>
-->
       </div>
    {/if}
    <td colspan="2">&nbsp;&nbsp;</td>
