<?php /* Smarty version 2.6.31, created on 2021-02-16 15:46:01
         compiled from cache/themes/SuiteP/modules/Contacts/ConvertLead.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_translate', 'cache/themes/SuiteP/modules/Contacts/ConvertLead.tpl', 46, false),array('function', 'counter', 'cache/themes/SuiteP/modules/Contacts/ConvertLead.tpl', 112, false),array('function', 'html_options', 'cache/themes/SuiteP/modules/Contacts/ConvertLead.tpl', 113, false),array('modifier', 'strip_semicolon', 'cache/themes/SuiteP/modules/Contacts/ConvertLead.tpl', 108, false),)), $this); ?>

<div>&nbsp;</div>
<span class="color"><?php echo $this->_tpl_vars['ERROR']; ?>
</span>
<div class="edit-view-row-item">
<input type="hidden" name="convert_create_Contacts" id="convert_create_Contacts"
<?php if (( $this->_tpl_vars['def']['required'] && empty ( $this->_tpl_vars['def']['select'] ) ) || ( ! empty ( $this->_tpl_vars['def']['default_action'] ) && $this->_tpl_vars['def']['default_action'] == 'create' )): ?> value="true" <?php endif; ?>/>
<input type="hidden" name="opportunity_id" value="<?php echo $_REQUEST['opportunity_id']; ?>
">
<input type="hidden" name="case_id" value="<?php echo $_REQUEST['case_id']; ?>
">
<input type="hidden" name="bug_id" value="<?php echo $_REQUEST['bug_id']; ?>
">
<input type="hidden" name="email_id" value="<?php echo $_REQUEST['email_id']; ?>
">
<input type="hidden" name="inbound_email_id" value="<?php echo $_REQUEST['inbound_email_id']; ?>
">
<?php if ($this->_tpl_vars['def']['required']): ?>
<script type="text/javascript">
                        mod_array.push('Contacts');//Bug#50590 add all required modules to mod_array
                    </script>
<?php endif; ?>
<?php if (! $this->_tpl_vars['def']['required'] || ! empty ( $this->_tpl_vars['def']['select'] )): ?>
<input class="checkbox" type="checkbox" name="newContacts" id="newContacts"
onclick="toggleDisplay('createContacts');if (typeof(addRemoveDropdownElement) == 'function') addRemoveDropdownElement('Contacts');<?php if (! empty ( $this->_tpl_vars['def']['select'] )): ?>toggleContactsSelect();<?php endif; ?>">
<script type="text/javascript">
                                        <?php if (! empty ( $this->_tpl_vars['def']['select'] )): ?>
                    toggleContactsSelect = function () {
                        var inputs = document.getElementById('selectContacts').getElementsByTagName('input');
                        for (var i in inputs) {inputs[i].disabled = !inputs[i].disabled;}
                    var buttons = document.getElementById('selectContacts').getElementsByTagName('button');
                    for (var i in buttons) {buttons[i].disabled = !buttons[i].disabled;}
                    }
                    <?php endif; ?>
                                        <?php if (! empty ( $this->_tpl_vars['def']['default_action'] ) && $this->_tpl_vars['def']['default_action'] == 'create'): ?>
                    <?php if ($this->_tpl_vars['lead_conv_activity_opt'] == 'move' || $this->_tpl_vars['lead_conv_activity_opt'] == 'copy' || $this->_tpl_vars['lead_conv_activity_opt'] == ''): ?>
                    YAHOO.util.Event.onContentReady('lead_conv_ac_op_sel', function () {
                        <?php else: ?>
                        YAHOO.util.Event.onContentReady('createContacts', function () {
                            <?php endif; ?>
                            toggleDisplay('createContacts');
                            document.getElementById('newContacts').checked = true;
                            if (typeof(addRemoveDropdownElement) == 'function')
                                addRemoveDropdownElement('Contacts');
                                                        <?php if (! empty ( $this->_tpl_vars['def']['select'] )): ?>
                            toggleContactsSelect();
                            <?php endif; ?>
                                                        });
                    <?php endif; ?>
                    <?php endif; ?>
                </script>
<?php echo smarty_function_sugar_translate(array('label' => 'LNK_NEW_CONTACT','module' => 'Leads'), $this);?>

<?php if (! empty ( $this->_tpl_vars['def']['select'] )): ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LNK_SELECT_CONTACTS','module' => 'Leads'), $this);?>

<?php if ($this->_tpl_vars['def']['required']): ?>
<span class="required">*</span>
<?php endif; ?>
<span id="selectContacts">

<input type="text" name="<?php echo $this->_tpl_vars['contact_def']['report_to_name']['name']; ?>
" class="sqsEnabled" tabindex="" id="<?php echo $this->_tpl_vars['contact_def']['report_to_name']['name']; ?>
" size="" value="<?php echo $this->_tpl_vars['contact_def']['report_to_name']['value']; ?>
" title='' autocomplete="off"  	 >
<input type="hidden" name="<?php echo $this->_tpl_vars['contact_def']['report_to_name']['id_name']; ?>
" 
id="<?php echo $this->_tpl_vars['contact_def']['report_to_name']['id_name']; ?>
" 
value="<?php echo $this->_tpl_vars['contact_def']['reports_to_id']['value']; ?>
">
<span class="id-ff multiple">
<button type="button" name="btn_<?php echo $this->_tpl_vars['contact_def']['report_to_name']['name']; ?>
" id="btn_<?php echo $this->_tpl_vars['contact_def']['report_to_name']['name']; ?>
" tabindex="" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_SELECT_CONTACTS_TITLE'), $this);?>
" class="button firstChild" value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_SELECT_CONTACTS_LABEL'), $this);?>
"
onclick='open_popup(
"<?php echo $this->_tpl_vars['contact_def']['report_to_name']['module']; ?>
", 
600, 
400, 
"<?php echo $this->_tpl_vars['initialFilter']; ?>
", 
true, 
false, 
<?php echo '{"call_back_function":"set_return_lead_conv","form_name":"ConvertLead","field_to_name_array":{"id":"reports_to_id","last_name":"report_to_name"}}'; ?>
, 
"single", 
true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_<?php echo $this->_tpl_vars['contact_def']['report_to_name']['name']; ?>
" id="btn_clr_<?php echo $this->_tpl_vars['contact_def']['report_to_name']['name']; ?>
" tabindex="" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_CLEAR_CONTACTS_TITLE'), $this);?>
"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '<?php echo $this->_tpl_vars['contact_def']['report_to_name']['name']; ?>
', '<?php echo $this->_tpl_vars['contact_def']['report_to_name']['id_name']; ?>
');"  value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_CLEAR_CONTACTS_LABEL'), $this);?>
" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['<?php echo $this->_tpl_vars['form_name']; ?>
_<?php echo $this->_tpl_vars['contact_def']['report_to_name']['name']; ?>
']) != 'undefined'",
		enableQS
);
</script>
<script>
                    if (typeof(sqs_objects) == "undefined") sqs_objects = [];
                    sqs_objects['ConvertLead_<?php echo $this->_tpl_vars['selectFields']['Contacts']; ?>
'] = {
                        form: 'ConvertLead',
                        method: 'query',
                        modules: ['Contacts'],
                        group: 'or',
                        field_list: ['name', 'id'],
                        populate_list: ['<?php echo $this->_tpl_vars['selectFields']['Contacts']; ?>
', '<?php echo $this->_tpl_vars['contact_def'][$this->_tpl_vars['selectFields']['Contacts']]['id_name']; ?>
'],
                        conditions: [{'name': 'name', 'op': 'like_custom', 'end': '%', 'value': ''}],
                        required_list: ['<?php echo $this->_tpl_vars['contact_def'][$this->_tpl_vars['selectFields']['Contacts']]['id_name']; ?>
'],
                        order: 'name',
                        limit: '10'
                        }
                </script>
<?php endif; ?>
</span>
</div>
<div class=""
id="createContacts"
<?php if (! $this->_tpl_vars['def']['required'] || ! empty ( $this->_tpl_vars['def']['select'] )): ?>style="display:none"<?php endif; ?>>

<div class="col-xs-12 col-sm-12 edit-view-row-item">
<div class="edit-view-field col-xs-12 col-sm-12 col-md-6 col-lg-6">
<div valign="top" id='first_name_label'
scope="row" class="col-xs-12 col-sm-12 label" >
<?php ob_start(); ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_FIRST_NAME','module' => 'Contacts'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>
<div valign="top"
class=" col-xs-12 col-sm-8 edit-view-field pad-bottom">
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>

<?php echo smarty_function_html_options(array('name' => 'Contactssalutation','options' => $this->_tpl_vars['fields']['salutation']['options'],'selected' => $this->_tpl_vars['fields']['salutation']['value']), $this);?>
&nbsp;<input tabindex="0"  name="Contactsfirst_name" size="25" maxlength="25" type="text" value="<?php echo $this->_tpl_vars['fields']['first_name']['value']; ?>
">
</div>
</div>
<div class="edit-view-field col-xs-12 col-sm-12 col-md-6 col-lg-6">
<div valign="top" id='title_label'
scope="row" class="col-xs-12 col-sm-12 label" >
<?php ob_start(); ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_TITLE','module' => 'Contacts'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>
<div valign="top"
class=" col-xs-12 col-sm-8 edit-view-field pad-bottom">
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['title']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['title']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['title']['value']); ?>
<?php endif; ?>  
<input type='text' name='Contactstitle' 
id='Contactstitle' size='30' 
maxlength='100' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title=''      >
</div>
</div>
</div>

<div class="col-xs-12 col-sm-12 edit-view-row-item">
<div class="edit-view-field col-xs-12 col-sm-12 col-md-6 col-lg-6">
<div valign="top" id='last_name_label'
scope="row" class="col-xs-12 col-sm-12 label" >
<?php ob_start(); ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_LAST_NAME','module' => 'Contacts'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<span class="required">*</span>
</div>
<div valign="top"
class=" col-xs-12 col-sm-8 edit-view-field pad-bottom">
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['last_name']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['last_name']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['last_name']['value']); ?>
<?php endif; ?>  
<input type='text' name='Contactslast_name' 
id='Contactslast_name' size='30' 
maxlength='100' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title=''      >
</div>
</div>
<div class="edit-view-field col-xs-12 col-sm-12 col-md-6 col-lg-6">
<div valign="top" id='department_label'
scope="row" class="col-xs-12 col-sm-12 label" >
<?php ob_start(); ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DEPARTMENT','module' => 'Contacts'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>
<div valign="top"
class=" col-xs-12 col-sm-8 edit-view-field pad-bottom">
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['department']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['department']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['department']['value']); ?>
<?php endif; ?>  
<input type='text' name='Contactsdepartment' 
id='Contactsdepartment' size='30' 
maxlength='255' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title=''      >
</div>
</div>
</div>

<div class="col-xs-12 col-sm-12 edit-view-row-item">
<div class="edit-view-field col-xs-12 col-sm-12 col-md-6 col-lg-6">
<div valign="top" id='primary_address_street_label'
scope="row" class="col-xs-12 col-sm-12 label" >
<?php ob_start(); ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_PRIMARY_ADDRESS','module' => 'Contacts'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>
<div valign="top"
class=" col-xs-12 col-sm-8 edit-view-field pad-bottom">
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['primary_address_street']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['primary_address_street']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['primary_address_street']['value']); ?>
<?php endif; ?>  
<input type='text' name='Contactsprimary_address_street' 
id='Contactsprimary_address_street' size='30' 
maxlength='150' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title=''      >
</div>
</div>
<div class="edit-view-field col-xs-12 col-sm-12 col-md-6 col-lg-6">
<div valign="top" id='phone_work_label'
scope="row" class="col-xs-12 col-sm-12 label" >
<?php ob_start(); ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_OFFICE_PHONE','module' => 'Contacts'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>
<div valign="top"
class=" col-xs-12 col-sm-8 edit-view-field pad-bottom">
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['phone_work']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['phone_work']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['phone_work']['value']); ?>
<?php endif; ?>  
<input type='text' name='Contactsphone_work' id='Contactsphone_work' size='30' maxlength='100' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='0'	  class="phone" >
</div>
</div>
</div>

<div class="col-xs-12 col-sm-12 edit-view-row-item">
<div class="edit-view-field col-xs-12 col-sm-12 col-md-6 col-lg-6">
<div valign="top" id='primary_address_city_label'
scope="row" class="col-xs-12 col-sm-12 label" >
<?php ob_start(); ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CITY','module' => 'Contacts'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>
<div valign="top"
class=" col-xs-12 col-sm-8 edit-view-field pad-bottom">
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['primary_address_city']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['primary_address_city']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['primary_address_city']['value']); ?>
<?php endif; ?>  
<input type='text' name='Contactsprimary_address_city' 
id='Contactsprimary_address_city' size='30' 
maxlength='100' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title=''      >
</div>
</div>
<div class="edit-view-field col-xs-12 col-sm-12 col-md-6 col-lg-6">
<div valign="top" id='phone_mobile_label'
scope="row" class="col-xs-12 col-sm-12 label" >
<?php ob_start(); ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_MOBILE_PHONE','module' => 'Contacts'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>
<div valign="top"
class=" col-xs-12 col-sm-8 edit-view-field pad-bottom">
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['phone_mobile']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['phone_mobile']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['phone_mobile']['value']); ?>
<?php endif; ?>  
<input type='text' name='Contactsphone_mobile' id='Contactsphone_mobile' size='30' maxlength='100' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='0'	  class="phone" >
</div>
</div>
</div>

<div class="col-xs-12 col-sm-12 edit-view-row-item">
<div class="edit-view-field col-xs-12 col-sm-12 col-md-6 col-lg-6">
<div valign="top" id='primary_address_state_label'
scope="row" class="col-xs-12 col-sm-12 label" >
<?php ob_start(); ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_STATE','module' => 'Contacts'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>
<div valign="top"
class=" col-xs-12 col-sm-8 edit-view-field pad-bottom">
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['primary_address_state']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['primary_address_state']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['primary_address_state']['value']); ?>
<?php endif; ?>  
<input type='text' name='Contactsprimary_address_state' 
id='Contactsprimary_address_state' size='30' 
maxlength='100' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title=''      >
</div>
</div>
<div class="edit-view-field col-xs-12 col-sm-12 col-md-6 col-lg-6">
<div valign="top" id='phone_other_label'
scope="row" class="col-xs-12 col-sm-12 label" >
<?php ob_start(); ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_OTHER_PHONE','module' => 'Contacts'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>
<div valign="top"
class=" col-xs-12 col-sm-8 edit-view-field pad-bottom">
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['phone_other']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['phone_other']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['phone_other']['value']); ?>
<?php endif; ?>  
<input type='text' name='Contactsphone_other' id='Contactsphone_other' size='30' maxlength='100' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='0'	  class="phone" >
</div>
</div>
</div>

<div class="col-xs-12 col-sm-12 edit-view-row-item">
<div class="edit-view-field col-xs-12 col-sm-12 col-md-6 col-lg-6">
<div valign="top" id='primary_address_postalcode_label'
scope="row" class="col-xs-12 col-sm-12 label" >
<?php ob_start(); ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_POSTAL_CODE','module' => 'Contacts'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>
<div valign="top"
class=" col-xs-12 col-sm-8 edit-view-field pad-bottom">
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['primary_address_postalcode']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['primary_address_postalcode']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['primary_address_postalcode']['value']); ?>
<?php endif; ?>  
<input type='text' name='Contactsprimary_address_postalcode' 
id='Contactsprimary_address_postalcode' size='30' 
maxlength='20' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title=''      >
</div>
</div>
<div class="edit-view-field col-xs-12 col-sm-12 col-md-6 col-lg-6">
<div valign="top" id='phone_fax_label'
scope="row" class="col-xs-12 col-sm-12 label" >
<?php ob_start(); ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_FAX_PHONE','module' => 'Contacts'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>
<div valign="top"
class=" col-xs-12 col-sm-8 edit-view-field pad-bottom">
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['phone_fax']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['phone_fax']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['phone_fax']['value']); ?>
<?php endif; ?>  
<input type='text' name='Contactsphone_fax' id='Contactsphone_fax' size='30' maxlength='100' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='0'	  class="phone" >
</div>
</div>
</div>

<div class="col-xs-12 col-sm-12 edit-view-row-item">
<div class="edit-view-field col-xs-12 col-sm-12 col-md-6 col-lg-6">
<div valign="top" id='primary_address_country_label'
scope="row" class="col-xs-12 col-sm-12 label" >
<?php ob_start(); ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_COUNTRY','module' => 'Contacts'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>
<div valign="top"
class=" col-xs-12 col-sm-8 edit-view-field pad-bottom">
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['primary_address_country']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['primary_address_country']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['primary_address_country']['value']); ?>
<?php endif; ?>  
<input type='text' name='Contactsprimary_address_country' 
id='Contactsprimary_address_country' size='30' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title=''      >
</div>
</div>
<div class="edit-view-field col-xs-12 col-sm-12 col-md-6 col-lg-6">
<div valign="top" id='lead_source_label'
scope="row" class="col-xs-12 col-sm-12 label" >
<?php ob_start(); ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_LEAD_SOURCE','module' => 'Contacts'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>
<div valign="top"
class=" col-xs-12 col-sm-8 edit-view-field pad-bottom">
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<select name="Contactslead_source"
id="Contactslead_source"
title=''          
>
<?php if (isset ( $this->_tpl_vars['fields']['lead_source']['value'] ) && $this->_tpl_vars['fields']['lead_source']['value'] != ''): ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['lead_source']['options'],'selected' => $this->_tpl_vars['fields']['lead_source']['value']), $this);?>

<?php else: ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['lead_source']['options'],'selected' => $this->_tpl_vars['fields']['lead_source']['default']), $this);?>

<?php endif; ?>
</select>
</div>
</div>
</div>

<div class="col-xs-12 col-sm-12 edit-view-row-item">
<div class="edit-view-field col-xs-12 col-sm-12 col-md-6 col-lg-6">
<div valign="top" id='email1_label'
scope="row" class="col-xs-12 col-sm-12 label" >
<?php ob_start(); ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_EMAIL_ADDRESS','module' => 'Contacts'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>
<div valign="top"
colspan='3' class=" col-xs-12 col-sm-8 edit-view-field pad-bottom">
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>

<span id='email1_span'>
<?php echo $this->_tpl_vars['fields']['email1']['value']; ?>
</span>
</div>
</div>
</div>

<div class="col-xs-12 col-sm-12 edit-view-row-item">
<div class="edit-view-field col-xs-12 col-sm-12 col-md-6 col-lg-6">
<div valign="top" id='description_label'
scope="row" class="col-xs-12 col-sm-12 label" >
<?php ob_start(); ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'Contacts'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>
<div valign="top"
colspan='3' class=" col-xs-12 col-sm-8 edit-view-field pad-bottom">
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (empty ( $this->_tpl_vars['fields']['description']['value'] )): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['description']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['description']['value']); ?>
<?php endif; ?>
<textarea  id='Contactsdescription' name='Contactsdescription'
rows="6"
cols="80"
title='' tabindex="0" 
 ><?php echo $this->_tpl_vars['value']; ?>
</textarea>
<?php echo ''; ?>

</div>
</div>
</div>
</div><?php echo '
<script type="text/javascript">
addForm(\'ConvertLead\');addToValidateBinaryDependency(\'ConvertLead\', \'assigned_user_name\', \'alpha\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'Contacts','for_js' => true), $this);?>
<?php echo ': '; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO','module' => 'Contacts','for_js' => true), $this);?>
<?php echo '\', \'assigned_user_id\' );
</script>'; ?>
