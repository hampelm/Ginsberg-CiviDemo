<?php /* Smarty version 2.6.26, created on 2010-11-16 16:52:28
         compiled from CRM/common/action.tpl */ ?>
<?php echo '
<script type="text/javascript">
 cj('; ?>
<?php if ($this->_tpl_vars['isSnippet']): ?>document<?php else: ?>'#crm-container'<?php endif; ?><?php echo ')
 	.bind(\'click\', function(event) {
    if (cj(event.target).is(\'.btn-slide\')) {
      cj(\'.panel\').css(\'display\', \'none\');
      cj(event.target).children().show();
    } else {
    	cj(\'.btn-slide .panel\').hide();	
	} 
  });
</script>
'; ?>