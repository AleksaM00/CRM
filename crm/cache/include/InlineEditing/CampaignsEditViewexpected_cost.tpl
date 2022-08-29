
{if strlen($fields.expected_cost.value) <= 0}
{assign var="value" value=$fields.expected_cost.default_value }
{else}
{assign var="value" value=$fields.expected_cost.value }
{/if}  
<input type='text' name='{$fields.expected_cost.name}' 
id='{$fields.expected_cost.name}' size='30'  value='{sugar_number_format var=$value}' title='' tabindex='1'
 >