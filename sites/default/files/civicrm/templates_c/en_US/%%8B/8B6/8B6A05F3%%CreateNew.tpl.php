<?php /* Smarty version 2.6.26, created on 2011-01-27 10:38:40
         compiled from CRM/Block/CreateNew.tpl */ ?>
<div class="block-civicrm">
<div id="crm-create-new-wrapper">
	<div id="crm-create-new-link"><span><div class="icon dropdown-icon"></div>Create New</span></div>
		<div id="crm-create-new-list" class="ac_results">
			<div class="crm-create-new-list-inner">
			<ul>
			<?php $_from = $this->_tpl_vars['shortCuts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['short']):
?>
				    <li><a href="<?php echo $this->_tpl_vars['short']['url']; ?>
" class="crm-<?php echo $this->_tpl_vars['short']['ref']; ?>
"><?php echo $this->_tpl_vars['short']['title']; ?>
</a></li>
			    <?php endforeach; endif; unset($_from); ?>
			</ul>
			</div>
		</div>
	</div>
</div>
<?php echo '
<script>

cj(\'body\').click(function() {
	 	cj(\'#crm-create-new-list\').hide();
	 	});
	
	 cj(\'#crm-create-new-list\').click(function(event){
	     event.stopPropagation();
	 	});

cj(\'#crm-create-new-list li\').hover(
	function(){ cj(this).addClass(\'ac_over\');},
	function(){ cj(this).removeClass(\'ac_over\');}
	);

cj(\'#crm-create-new-link\').click(function(event) {
	cj(\'#crm-create-new-list\').toggle();
	event.stopPropagation();
	});

</script>

'; ?>