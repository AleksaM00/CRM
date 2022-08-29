
{if strlen($fields.budget.value) <= 0}
{assign var="value" value=$fields.budget.default_value }
{else}
{assign var="value" value=$fields.budget.value }
{/if}  
<input type='text' name='{$fields.budget.name}' 
id='{$fields.budget.name}' size='30'  value='{sugar_number_format var=$value}' title='' tabindex='1'
 >