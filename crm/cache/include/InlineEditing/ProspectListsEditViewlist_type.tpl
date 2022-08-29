

<select name="{$fields.list_type.name}"
        id="{$fields.list_type.name}"
        title=''  tabindex="1"          
        >

    {if isset($fields.list_type.value) && $fields.list_type.value != ''}
        {html_options options=$fields.list_type.options selected=$fields.list_type.value}
    {else}
        {html_options options=$fields.list_type.options selected=$fields.list_type.default}
    {/if}
</select>