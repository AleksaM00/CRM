<?php /* Smarty version 2.6.31, created on 2021-02-16 16:01:58
         compiled from cache/include/InlineEditing/CampaignsEditViewexpected_cost.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_number_format', 'cache/include/InlineEditing/CampaignsEditViewexpected_cost.tpl', 8, false),)), $this); ?>

<?php if (strlen ( $this->_tpl_vars['fields']['expected_cost']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['expected_cost']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['expected_cost']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['expected_cost']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['expected_cost']['name']; ?>
' size='30'  value='<?php echo smarty_function_sugar_number_format(array('var' => $this->_tpl_vars['value']), $this);?>
' title='' tabindex='1'
 >