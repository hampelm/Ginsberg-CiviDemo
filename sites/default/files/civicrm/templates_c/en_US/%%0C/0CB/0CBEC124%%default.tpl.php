<?php /* Smarty version 2.6.26, created on 2011-01-27 10:14:38
         compiled from CRM/Form/default.tpl */ ?>
<?php if (! $this->_tpl_vars['suppressForm']): ?>
<form <?php echo $this->_tpl_vars['form']['attributes']; ?>
 >
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Form/body.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['tplFile'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if (! $this->_tpl_vars['suppressForm']): ?>
</form>
<?php endif; ?>