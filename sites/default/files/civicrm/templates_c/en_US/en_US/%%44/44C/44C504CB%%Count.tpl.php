<?php /* Smarty version 2.6.26, created on 2010-11-16 17:13:31
         compiled from CRM/Mailing/Form/Count.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'ts', 'CRM/Mailing/Form/Count.tpl', 27, false),array('modifier', 'crmNumberFormat', 'CRM/Mailing/Form/Count.tpl', 27, false),)), $this); ?>
<div class="messages status float-right" style="margin-left: 1em;">
    <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Total Recipients:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <strong><?php echo ((is_array($_tmp=$this->_tpl_vars['count'])) ? $this->_run_mod_handler('crmNumberFormat', true, $_tmp) : smarty_modifier_crmNumberFormat($_tmp)); ?>
</strong>
</div>