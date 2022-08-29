
{if strlen($fields.actual_cost.value) <= 0}
{assign var="value" value=$fields.actual_cost.default_value }
{else}
{assign var="value" value=$fields.actual_cost.value }
{/if}  
<input type='text' name='{$fields.actual_cost.name}' 
id='{$fields.actual_cost.name}' size='30'  value='{sugar_number_format var=$value}' title='' tabindex='1'
 >