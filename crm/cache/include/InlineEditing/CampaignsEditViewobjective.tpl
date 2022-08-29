
{if empty($fields.objective.value)}
{assign var="value" value=$fields.objective.default_value }
{else}
{assign var="value" value=$fields.objective.value }
{/if}




<textarea  id='{$fields.objective.name}' name='{$fields.objective.name}'
rows="2"
cols="32"
title='' tabindex="1" 
 >{$value}</textarea>


{literal}{/literal}