<?php /* Smarty version 2.6.31, created on 2021-02-16 00:54:46
         compiled from cache/include/InlineEditing/DocumentsEditViewfilename.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_getimage', 'cache/include/InlineEditing/DocumentsEditViewfilename.tpl', 30, false),array('function', 'sugar_image', 'cache/include/InlineEditing/DocumentsEditViewfilename.tpl', 47, false),array('function', 'sugar_translate', 'cache/include/InlineEditing/DocumentsEditViewfilename.tpl', 57, false),)), $this); ?>

<script type="text/javascript" src='cache/include/externalAPI.cache.js?v=LRq807Rsl0wnYdDGnH-aXA'></script>
<script type="text/javascript" src='include/SugarFields/Fields/File/SugarFieldFile.js?v=LRq807Rsl0wnYdDGnH-aXA'></script>

<?php if (! empty ( $this->_tpl_vars['fields']['filename']['value'] )): ?>
    <?php $this->assign('showRemove', true); ?>
<?php else: ?>
    <?php $this->assign('showRemove', false); ?>
<?php endif; ?>

<?php if (! empty ( $this->_tpl_vars['fields']['filename']['value'] )): ?>
    <?php $this->assign('showRemove', true); ?>
    <?php $this->assign('noChange', true); ?>
<?php else: ?>
    <?php $this->assign('noChange', false); ?>
<?php endif; ?>

<input type="hidden" name="deleteAttachment" value="0">
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['filename']['value']; ?>
">
<input type="hidden" name="doc_id" id="doc_id" value="<?php echo $this->_tpl_vars['fields']['doc_id']['value']; ?>
">
<input type="hidden" name="doc_url" id="doc_url" value="<?php echo $this->_tpl_vars['fields']['doc_url']['value']; ?>
">
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
_old_doctype" id="<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
_old_doctype" value="<?php echo $this->_tpl_vars['fields']['doc_type']['value']; ?>
">
<span id="<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
_old" style="display:<?php if (! $this->_tpl_vars['showRemove']): ?>none;<?php endif; ?>">
  <a href="index.php?entryPoint=download&id=<?php echo $this->_tpl_vars['fields']['document_revision_id']['value']; ?>
&type=<?php echo $this->_tpl_vars['module']; ?>
" class="tabDetailViewDFLink"><?php echo $this->_tpl_vars['fields']['filename']['value']; ?>
</a>

<?php if (isset ( $this->_tpl_vars['fields']['doc_type'] ) && ! empty ( $this->_tpl_vars['fields']['doc_type']['value'] ) && $this->_tpl_vars['fields']['doc_type']['value'] != 'Sugar' && ! empty ( $this->_tpl_vars['fields']['doc_url']['value'] )): ?>
<?php ob_start(); ?>
<?php echo $this->_tpl_vars['fields']['doc_type']['value']; ?>
_image_inline.png
<?php $this->_smarty_vars['capture']['imageNameCapture'] = ob_get_contents();  $this->assign('imageName', ob_get_contents());ob_end_clean(); ?>
<a href="<?php echo $this->_tpl_vars['fields']['doc_url']['value']; ?>
" class="tabDetailViewDFLink" target="_blank"><?php echo smarty_function_sugar_getimage(array('name' => $this->_tpl_vars['imageName'],'alt' => $this->_tpl_vars['imageName'],'other_attributes' => 'border="0" '), $this);?>
</a>
<?php endif; ?>
<?php if (! $this->_tpl_vars['noChange']): ?>
<input type='button' class='button' id='remove_button' value='<?php echo $this->_tpl_vars['APP']['LBL_REMOVE']; ?>
' onclick='SUGAR.field.file.deleteAttachment("<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
","doc_type",this);'>
<?php endif; ?>
</span>
<?php if (! $this->_tpl_vars['noChange']): ?>
<span id="<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
_new" style="display:<?php if ($this->_tpl_vars['showRemove']): ?>none;<?php endif; ?>">
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
_escaped">
<input id="<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
_file" name="<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
_file" 
type="file" title='' size="30"
 
    maxlength="255"
>

<span id="<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
_externalApiSelector" style="display:none;">
<br><h4 id="<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
_externalApiLabel">
<span id="<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
_more"><?php echo smarty_function_sugar_image(array('name' => 'advanced_search','width' => '8px','height' => '8px'), $this);?>
</span>
<span id="<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
_less" style="display: none;"><?php echo smarty_function_sugar_image(array('name' => 'basic_search','width' => '8px','height' => '8px'), $this);?>
</span>
<?php echo $this->_tpl_vars['APP']['LBL_SEARCH_EXTERNAL_API']; ?>
</h4>
<span id="<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
_remoteNameSpan" style="display: none;">
<input type="text" class="sqsEnabled" name="<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
_remoteName" id="<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
_remoteName" size="30" 
 
    maxlength="255"
 autocomplete="off" value="<?php if (! empty ( $this->_tpl_vars['fields'][$this->_sections['doc_id']['index']]['value'] )): ?><?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
<?php endif; ?>">

<span class="id-ff multiple">
<button type="button" name="<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
_remoteSelectBtn" id="<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
_remoteSelectBtn" tabindex="1" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_SELECT_FILE_TITLE'), $this);?>
" class="button firstChild" value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_SELECT_FILE_LABEL'), $this);?>
"
onclick="SUGAR.field.file.openPopup('<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
'); return false;">
<span class="suitepicon suitepicon-action-select"></span></button>
<button type="button" name="<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
_remoteClearBtn" id="<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
_remoteClearBtn" tabindex="1" title="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_TITLE']; ?>
" class="button lastChild" value="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_LABEL']; ?>
" onclick="SUGAR.field.file.clearRemote('<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
'); return false;">
<span class="suitepicon suitepicon-action-clear"></span>
</button>
</span>
</span>

<div style="display: none;" id="<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
_securityLevelBox">
  <b><?php echo $this->_tpl_vars['APP']['LBL_EXTERNAL_SECURITY_LEVEL']; ?>
: </b>
  <select name="<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
_securityLevel" id="<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
_securityLevel">
  </select>
</div>
<script type="text/javascript">
YAHOO.util.Event.onDOMReady(function() {
SUGAR.field.file.setupEapiShowHide("<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
","doc_type","<?php echo $this->_tpl_vars['form_name']; ?>
");
});

if ( typeof(sqs_objects) == 'undefined' ) {
    sqs_objects = new Array;
}

sqs_objects["<?php echo $this->_tpl_vars['form_name']; ?>
_<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
_remoteName"] = {
"form":"<?php echo $this->_tpl_vars['form_name']; ?>
",
"method":"externalApi",
"api":"",
"modules":["EAPM"],
"field_list":["name", "id", "url", "id"],
"populate_list":["<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
_remoteName", "doc_id", "doc_url", "<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
"],
"required_list":["name"],
"conditions":[],
"no_match_text":"No Match"
};

if(typeof QSProcessedFieldsArray != 'undefined') {
	QSProcessedFieldsArray["<?php echo $this->_tpl_vars['form_name']; ?>
_<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
_remoteName"] = false;
}
<?php if ($this->_tpl_vars['showRemove'] && strlen ( 'doc_type' ) > 0): ?>
document.getElementById("doc_type").disabled = true;
<?php endif; ?>
enableQS(false);
</script>
<?php else: ?>


<script type="text/javascript">
YAHOO.util.Event.onDOMReady(function() 
{
document.getElementById("doc_type").disabled = true;
});
</script>

<?php endif; ?>


</span>