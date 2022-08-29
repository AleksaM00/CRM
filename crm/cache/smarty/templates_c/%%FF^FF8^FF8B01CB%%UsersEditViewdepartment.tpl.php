<?php /* Smarty version 2.6.31, created on 2021-02-15 16:23:05
         compiled from cache/include/InlineEditing/UsersEditViewdepartment.tpl */ ?>

<?php if (strlen ( $this->_tpl_vars['fields']['department']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['department']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['department']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['department']['name']; ?>
' 
    id='<?php echo $this->_tpl_vars['fields']['department']['name']; ?>
' size='30' 
    maxlength='50' 
    value='<?php echo $this->_tpl_vars['value']; ?>
' title=''  tabindex='1'      >