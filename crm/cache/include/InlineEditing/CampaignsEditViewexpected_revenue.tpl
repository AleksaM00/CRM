
{if strlen($fields.expected_revenue.value) <= 0}
{assign var="value" value=$fields.expected_revenue.default_value }
{else}
{assign var="value" value=$fields.expected_revenue.value }
{/if}  
<input type='text' name='{$fields.expected_revenue.name}' 
id='{$fields.expected_revenue.name}' size='30'  value='{sugar_number_format var=$value}' title='' tabindex='1'
 >