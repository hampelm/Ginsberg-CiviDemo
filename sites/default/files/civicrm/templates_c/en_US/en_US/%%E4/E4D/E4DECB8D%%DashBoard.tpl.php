<?php /* Smarty version 2.6.26, created on 2010-11-16 17:18:31
         compiled from CRM/Member/Page/DashBoard.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'ts', 'CRM/Member/Page/DashBoard.tpl', 27, false),array('function', 'help', 'CRM/Member/Page/DashBoard.tpl', 27, false),)), $this); ?>
<h3><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Membership Summary<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php echo smarty_function_help(array('id' => "id-member-intro"), $this);?>
</h3>
<table class="report">
    <tr class="columnheader-dark">
        <th scope="col"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Members by Type<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
        <?php if ($this->_tpl_vars['preMonth']): ?>
            <th scope="col"><?php echo $this->_tpl_vars['premonth']; ?>
 &ndash; <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>New/Renew (Last Month)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
        <?php endif; ?>
        <th scope="col"><?php echo $this->_tpl_vars['month']; ?>
 &ndash; <?php if ($this->_tpl_vars['isCurrent']): ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>New/Renew (MTD)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php else: ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>New/Renew<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php endif; ?></th>
        <th scope="col">
            <?php if ($this->_tpl_vars['year'] == $this->_tpl_vars['currentYear']): ?>
                <?php echo $this->_tpl_vars['year']; ?>
 &ndash; <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>New/Renew (YTD)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            <?php else: ?>
                <?php echo $this->_tpl_vars['year']; ?>
 &ndash; <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['month'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>New/Renew through %1<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            <?php endif; ?>
        </th>
        <th scope="col">
            <?php if ($this->_tpl_vars['isCurrent']): ?>
                <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Current #<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            <?php else: ?>
                <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['month'],'2' => $this->_tpl_vars['year'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Members as of %1 %2<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            <?php endif; ?>
        </th>
    </tr>

    <?php $_from = $this->_tpl_vars['membershipSummary']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['row']):
?>
        <tr>
            <td><strong><?php echo $this->_tpl_vars['row']['month']['name']; ?>
</strong></td>
            <?php if ($this->_tpl_vars['preMonth']): ?>
                <td class="label"><a href="<?php echo $this->_tpl_vars['row']['premonth']['url']; ?>
" title="view details"><?php echo $this->_tpl_vars['row']['premonth']['count']; ?>
</a></td>             <?php endif; ?>
            <td class="label"><a href="<?php echo $this->_tpl_vars['row']['month']['url']; ?>
" title="view details"><?php echo $this->_tpl_vars['row']['month']['count']; ?>
</a></td>             <td class="label"><a href="<?php echo $this->_tpl_vars['row']['year']['url']; ?>
" title="view details"><?php echo $this->_tpl_vars['row']['year']['count']; ?>
</a></td>  
            <td class="label">
                <?php if ($this->_tpl_vars['isCurrent']): ?>
                    <a href="<?php echo $this->_tpl_vars['row']['current']['url']; ?>
" title="view details"><?php echo $this->_tpl_vars['row']['current']['count']; ?>
</a>
                <?php else: ?>
                    <a href="<?php echo $this->_tpl_vars['row']['total']['url']; ?>
" title="view details"><?php echo $this->_tpl_vars['row']['total']['count']; ?>

                <?php endif; ?>
            </td>   
        </tr>
    <?php endforeach; endif; unset($_from); ?>

    <tr class="columnfooter">
        <td><strong><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Totals (all types)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></strong></td>
        <?php if ($this->_tpl_vars['preMonth']): ?>
            <td class="label"><a href="<?php echo $this->_tpl_vars['totalCount']['premonth']['url']; ?>
" title="view details"><?php echo $this->_tpl_vars['totalCount']['premonth']['count']; ?>
</a></td>         <?php endif; ?>
        <td class="label"><a href="<?php echo $this->_tpl_vars['totalCount']['month']['url']; ?>
" title="view details"><?php echo $this->_tpl_vars['totalCount']['month']['count']; ?>
</a></td>         <td class="label"><a href="<?php echo $this->_tpl_vars['totalCount']['year']['url']; ?>
" title="view details"><?php echo $this->_tpl_vars['totalCount']['year']['count']; ?>
</a></td>         <td class="label">
            <?php if ($this->_tpl_vars['isCurrent']): ?>
                <a href="<?php echo $this->_tpl_vars['row']['total']['url']; ?>
" title="view details"><?php echo $this->_tpl_vars['totalCount']['current']['count']; ?>
</a>
            <?php else: ?>
                <a href="<?php echo $this->_tpl_vars['totalCount']['total']['url']; ?>
" title="view details"><?php echo $this->_tpl_vars['totalCount']['total']['count']; ?>
</a>
            <?php endif; ?>
        </td>     </tr>
</table>

<div class="spacer"></div>

<?php if ($this->_tpl_vars['rows']): ?>
    <h3><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Recent Memberships<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h3>
    <div class="form-item">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Member/Form/Selector.tpl", 'smarty_include_vars' => array('context' => 'dashboard')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>
<?php endif; ?>