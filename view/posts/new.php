<form action="<?php echo DS.APP_ROOT.DS ?>posts/create" method="post">
<fieldset>
<legend> Create New Post </legend>
<table>
<tr>
	<td width="50"> Title </td>
	<td>
	<input type="text" name="post['title']" size="51" />
    </td>
</tr>
<tr>
	<td width="50"> Body </td>
	<td>
		<textarea rows="10" cols="40" name="post['body']"></textarea>
    </td>
</tr>
<tr>
	<td width="50"> <input type="submit" value="save" /> </td>
	<td>&nbsp;</td>
</tr>

</table>
</fieldset>
</form>