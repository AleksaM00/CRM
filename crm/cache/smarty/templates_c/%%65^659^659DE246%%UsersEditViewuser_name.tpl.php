<?php /* Smarty version 2.6.31, created on 2021-02-15 23:48:33
         compiled from cache/include/InlineEditing/UsersEditViewuser_name.tpl */ ?>

<?php if (strlen ( $this->_tpl_vars['fields']['user_name']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['user_name']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['user_name']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['user_name']['name']; ?>
' 
    id='<?php echo $this->_tpl_vars['fields']['user_name']['name']; ?>
' size='30' 
    maxlength='60' 
    value='<?php echo $this->_tpl_vars['value']; ?>
' title=''  tabindex='1'      >