<?php /* Smarty version 2.6.26, created on 2010-11-16 16:52:28
         compiled from CRM/common/accesskeys.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'ts', 'CRM/common/accesskeys.tpl', 28, false),array('function', 'help', 'CRM/common/accesskeys.tpl', 28, false),)), $this); ?>
<?php if (! $this->_tpl_vars['urlIsPublic']): ?>
 <div class="footer" id="access">
 <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Access Keys:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo smarty_function_help(array('id' => 'accesskeys'), $this);?>

 </div>
<?php endif; ?>