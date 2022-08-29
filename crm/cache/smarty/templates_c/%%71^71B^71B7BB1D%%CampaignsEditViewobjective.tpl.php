<?php /* Smarty version 2.6.31, created on 2021-02-16 16:02:16
         compiled from cache/include/InlineEditing/CampaignsEditViewobjective.tpl */ ?>

<?php if (empty ( $this->_tpl_vars['fields']['objective']['value'] )): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['objective']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['objective']['value']); ?>
<?php endif; ?>




<textarea  id='<?php echo $this->_tpl_vars['fields']['objective']['name']; ?>
' name='<?php echo $this->_tpl_vars['fields']['objective']['name']; ?>
'
rows="2"
cols="32"
title='' tabindex="1" 
 ><?php echo $this->_tpl_vars['value']; ?>
</textarea>


<?php echo ''; ?>