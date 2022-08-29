<?php /* Smarty version 2.6.31, created on 2021-02-16 00:34:11
         compiled from cache/include/InlineEditing/ProspectListsEditViewlist_type.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'cache/include/InlineEditing/ProspectListsEditViewlist_type.tpl', 9, false),)), $this); ?>


<select name="<?php echo $this->_tpl_vars['fields']['list_type']['name']; ?>
"
        id="<?php echo $this->_tpl_vars['fields']['list_type']['name']; ?>
"
        title=''  tabindex="1"          
        >

    <?php if (isset ( $this->_tpl_vars['fields']['list_type']['value'] ) && $this->_tpl_vars['fields']['list_type']['value'] != ''): ?>
        <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['list_type']['options'],'selected' => $this->_tpl_vars['fields']['list_type']['value']), $this);?>

    <?php else: ?>
        <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['list_type']['options'],'selected' => $this->_tpl_vars['fields']['list_type']['default']), $this);?>

    <?php endif; ?>
</select>