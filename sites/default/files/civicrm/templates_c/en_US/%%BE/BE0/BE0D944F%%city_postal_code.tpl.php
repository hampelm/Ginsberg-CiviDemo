<?php /* Smarty version 2.6.26, created on 2011-01-27 10:39:16
         compiled from CRM/Contact/Form/Edit/Address/city_postal_code.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'ts', 'CRM/Contact/Form/Edit/Address/city_postal_code.tpl', 40, false),)), $this); ?>
<tr><td colspan="3" style="padding:0;">
<table style="border:none;">
<tr>
    <?php if ($this->_tpl_vars['form']['address'][$this->_tpl_vars['blockId']]['city']): ?>
       <td>
          <?php echo $this->_tpl_vars['form']['address'][$this->_tpl_vars['blockId']]['city']['label']; ?>
<br />
          <?php echo $this->_tpl_vars['form']['address'][$this->_tpl_vars['blockId']]['city']['html']; ?>

       </td>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['form']['address'][$this->_tpl_vars['blockId']]['postal_code']): ?>
       <td>
          <?php echo $this->_tpl_vars['form']['address'][$this->_tpl_vars['blockId']]['postal_code']['label']; ?>
<br />
          <?php echo $this->_tpl_vars['form']['address'][$this->_tpl_vars['blockId']]['postal_code']['html']; ?>

          <?php echo $this->_tpl_vars['form']['address'][$this->_tpl_vars['blockId']]['postal_code_suffix']['html']; ?>
<br />
          <span class="description font-italic" style="white-space:nowrap;"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Enter optional 'add-on' code after the dash ('plus 4' code for U.S. addresses).<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
       </td>
    <?php endif; ?>
    <td colspan="2">&nbsp;&nbsp;</td>
</tr>
</table>
</td></tr>