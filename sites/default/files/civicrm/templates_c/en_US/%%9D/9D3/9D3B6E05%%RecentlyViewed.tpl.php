<?php /* Smarty version 2.6.26, created on 2011-01-27 10:14:14
         compiled from CRM/Block/RecentlyViewed.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'mb_truncate', 'CRM/Block/RecentlyViewed.tpl', 36, false),)), $this); ?>
<div id="recently-viewed">
    <ul>
    <?php $_from = $this->_tpl_vars['recentlyViewed']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
         <li class="crm-recently-viewed" ><a  href="<?php echo $this->_tpl_vars['item']['url']; ?>
" title="<?php echo $this->_tpl_vars['item']['title']; ?>
">
         <?php if ($this->_tpl_vars['item']['image_url']): ?>
            <span class="icon crm-icon <?php if ($this->_tpl_vars['item']['subtype']): ?><?php echo $this->_tpl_vars['item']['subtype']; ?>
<?php else: ?><?php echo $this->_tpl_vars['item']['type']; ?>
<?php endif; ?>-icon" style="background: url('<?php echo $this->_tpl_vars['item']['image_url']; ?>
')"></span>
         <?php else: ?>
            <span class="icon crm-icon <?php echo $this->_tpl_vars['item']['type']; ?>
<?php if ($this->_tpl_vars['item']['subtype']): ?>-subtype<?php endif; ?>-icon"></span>
         <?php endif; ?>
         <?php if ($this->_tpl_vars['item']['isDeleted']): ?><del><?php endif; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('mb_truncate', true, $_tmp, 25, "..", true) : smarty_modifier_mb_truncate($_tmp, 25, "..", true)); ?>
<?php if ($this->_tpl_vars['item']['isDeleted']): ?></del><?php endif; ?></a>
         <ul class="crm-recentview-wrapper" style="display:none;">
      
         <li><br /><a href='<?php echo $this->_tpl_vars['item']['url']; ?>
'>View</a> &nbsp;
	           <?php if ($this->_tpl_vars['item']['edit_url']): ?><a href='<?php echo $this->_tpl_vars['item']['edit_url']; ?>
'>Edit</a> &nbsp;<?php endif; ?>    
		   <?php if ($this->_tpl_vars['item']['delete_url']): ?><a href='<?php echo $this->_tpl_vars['item']['delete_url']; ?>
'>Delete</a> &nbsp;<?php endif; ?>
	</li>
         </ul>
         </li>
	 
    <?php endforeach; endif; unset($_from); ?>
   </ul>
</div>
<?php echo '
<script type="text/javascript">
    cj( function( ) {
       	cj(\'li.crm-recently-viewed\')
	.addClass(\'crm-processed\')
	.hover(
		function(e)  {
		    cj(this).addClass(\'crm-recentview-active\');
		
		      var pos       = cj(this).parent().offset();
		      var eleWidth  = cj(this).width( );
		      var eleHeight = cj(this).height( );
		    
		      var addStyle  = \'display:block;\';
		      if ( eleWidth == \'undefined\' ) {
		      	 eleWidth   = 180;
		      }
		      if ( eleHeight == \'undefined\' ) {
		         eleHeight  = 24;    
		      }
		      		      
		      var linkCount = cj(\'ul li\',this).children().size();
		      if ( linkCount ) {
		      	addStyle += \'width:\'+ ( linkCount*30) + \'px;\'; 
		      }		      

 		      if ( pos.left >= 150 ) {
		      	// hack for IE6 and IE7  
		        if ( cj.browser.msie && ( cj.browser.version.substr( 0,1 ) == \'7\' ||  cj.browser.version.substr( 0,1 ) == \'6\' ) ) {
			    gethtml =   \'<ul class="crm-recentview-wrapper" style="display:none;">\'+  cj(this).children(\'ul\').html( ) +\'</ul>\' ;
			    cj(this).children(\'ul\').remove();			
			    cj(this).prepend(gethtml );
			    addStyle += \'margin-top:\'+ (eleHeight+2) + \'px;\';
			} else {
		      	    addStyle += \'margin-left:-\'+ (linkCount*30+2) + \'px;\';
			    addStyle += \'margin-top:-\'+ (eleHeight+2) + \'px;\';
			}
		        if (cj(this).children(\'ul.crm-recentview-wrapper-right\').length == \'\' ) {
		            cj(this).children(\'ul\').addClass(\'crm-recentview-wrapper-right\');
		        }
		        cj(this).children(\'ul\').attr(\'style\', addStyle);
		      } else {
		        // hack for IE6 and IE7  
			if ( cj.browser.msie && ( cj.browser.version.substr( 0,1 ) == \'7\' ||  cj.browser.version.substr( 0,1 ) == \'6\' ) ) {
			    addStyle += \'margin-top:-3px;\';
			} else {   
		            addStyle += \'margin-left:\'+ (eleWidth-1) + \'px;\';
		      	    addStyle += \'margin-top:-\'+ (eleHeight+2) + \'px;\';
			}   
		        if (cj(this).children(\'ul.crm-recentview-wrapper-left\').length == \'\' ) {
		      	    cj(this).children(\'ul\').addClass(\'crm-recentview-wrapper-left\');
		        }
		        cj(this).children(\'ul\').attr(\'style\', addStyle);
		      }	 
		      
		},
		function(){
		 cj(this).children(\'ul.crm-recentview-wrapper\').attr(\'style\',\'display:none\' );
		 cj(this).removeClass(\'crm-recentview-active\');
		}
		)
	.click(function() {return true;});	
	
    });
 
'; ?>

</script>