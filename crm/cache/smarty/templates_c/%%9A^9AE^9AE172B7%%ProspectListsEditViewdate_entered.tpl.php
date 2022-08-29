<?php /* Smarty version 2.6.31, created on 2021-02-16 00:32:49
         compiled from cache/include/InlineEditing/ProspectListsEditViewdate_entered.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_getjspath', 'cache/include/InlineEditing/ProspectListsEditViewdate_entered.tpl', 15, false),array('modifier', 'default', 'cache/include/InlineEditing/ProspectListsEditViewdate_entered.tpl', 42, false),)), $this); ?>


<table border="0" cellpadding="0" cellspacing="0" class="dateTime">
<tr valign="middle">
<td nowrap class="dateTimeComboColumn">
<input autocomplete="off" type="text" id="<?php echo $this->_tpl_vars['fields']['date_entered']['name']; ?>
_date" class="datetimecombo_date" value="<?php echo $this->_tpl_vars['fields'][$this->_tpl_vars['fields']['date_entered']['name']]['value']; ?>
" size="11" maxlength="10" title='' tabindex="1" onblur="combo_<?php echo $this->_tpl_vars['fields']['date_entered']['name']; ?>
.update();" onchange="combo_<?php echo $this->_tpl_vars['fields']['date_entered']['name']; ?>
.update(); "    >
	<button type="button" id="<?php echo $this->_tpl_vars['fields']['date_entered']['name']; ?>
_trigger" class="btn btn-danger" onclick="return false;"><span class="suitepicon suitepicon-module-calendar"  alt="<?php echo $this->_tpl_vars['APP']['LBL_ENTER_DATE']; ?>
"></span></button>
</td>
<td nowrap class="dateTimeComboColumn">
<div id="<?php echo $this->_tpl_vars['fields']['date_entered']['name']; ?>
_time_section" class="datetimecombo_time_section"></div>
</td>
</tr>
</table>
<input type="hidden" class="DateTimeCombo" id="<?php echo $this->_tpl_vars['fields']['date_entered']['name']; ?>
" name="<?php echo $this->_tpl_vars['fields']['date_entered']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields'][$this->_tpl_vars['fields']['date_entered']['name']]['value']; ?>
">
<script type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file' => "include/SugarFields/Fields/Datetimecombo/Datetimecombo.js"), $this);?>
"></script>
<script type="text/javascript">
var combo_<?php echo $this->_tpl_vars['fields']['date_entered']['name']; ?>
 = new Datetimecombo("<?php echo $this->_tpl_vars['fields'][$this->_tpl_vars['fields']['date_entered']['name']]['value']; ?>
", "<?php echo $this->_tpl_vars['fields']['date_entered']['name']; ?>
", "<?php echo $this->_tpl_vars['TIME_FORMAT']; ?>
", "1", '', false, true);
//Render the remaining widget fields
text = combo_<?php echo $this->_tpl_vars['fields']['date_entered']['name']; ?>
.html('');
document.getElementById('<?php echo $this->_tpl_vars['fields']['date_entered']['name']; ?>
_time_section').innerHTML = text;

//Call eval on the update function to handle updates to calendar picker object
eval(combo_<?php echo $this->_tpl_vars['fields']['date_entered']['name']; ?>
.jsscript(''));

addToValidateBinaryDependency('<?php echo $this->_tpl_vars['form_name']; ?>
',"<?php echo $this->_tpl_vars['fields']['date_entered']['name']; ?>
_hours", 'alpha', false, "<?php echo $this->_tpl_vars['APP']['ERR_MISSING_REQUIRED_FIELDS']; ?>
 <?php echo $this->_tpl_vars['APP']['LBL_HOURS']; ?>
" ,"<?php echo $this->_tpl_vars['fields']['date_entered']['name']; ?>
_date");
addToValidateBinaryDependency('<?php echo $this->_tpl_vars['form_name']; ?>
', "<?php echo $this->_tpl_vars['fields']['date_entered']['name']; ?>
_minutes", 'alpha', false, "<?php echo $this->_tpl_vars['APP']['ERR_MISSING_REQUIRED_FIELDS']; ?>
 <?php echo $this->_tpl_vars['APP']['LBL_MINUTES']; ?>
" ,"<?php echo $this->_tpl_vars['fields']['date_entered']['name']; ?>
_date");
addToValidateBinaryDependency('<?php echo $this->_tpl_vars['form_name']; ?>
', "<?php echo $this->_tpl_vars['fields']['date_entered']['name']; ?>
_meridiem", 'alpha', false, "<?php echo $this->_tpl_vars['APP']['ERR_MISSING_REQUIRED_FIELDS']; ?>
 <?php echo $this->_tpl_vars['APP']['LBL_MERIDIEM']; ?>
","<?php echo $this->_tpl_vars['fields']['date_entered']['name']; ?>
_date");

YAHOO.util.Event.onDOMReady(function()
{

	Calendar.setup ({
	onClose : update_<?php echo $this->_tpl_vars['fields']['date_entered']['name']; ?>
,
	inputField : "<?php echo $this->_tpl_vars['fields']['date_entered']['name']; ?>
_date",
    form : "",
	ifFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
	daFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
	button : "<?php echo $this->_tpl_vars['fields']['date_entered']['name']; ?>
_trigger",
	singleClick : true,
	step : 1,
	weekNumbers: false,
        startWeekday: <?php echo ((is_array($_tmp=@$this->_tpl_vars['CALENDAR_FDOW'])) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0')); ?>
,
	comboObject: combo_<?php echo $this->_tpl_vars['fields']['date_entered']['name']; ?>

	});

	//Call update for first time to round hours and minute values
	combo_<?php echo $this->_tpl_vars['fields']['date_entered']['name']; ?>
.update(false);

}); 
</script>