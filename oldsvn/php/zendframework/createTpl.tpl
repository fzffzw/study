<form>
<table>
<{foreach from=$columns key=key item=column}>
<{if $key!='0'}>
    <tr>
	<td><{$column.Comment}></td>
	<td><input name="<{$column.Field}>" value="<{$column.smarty_value}>"></td>
    </tr>
<{/if}>
<{/foreach}>
</table>
</form>