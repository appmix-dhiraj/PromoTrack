<script>
function validation(){
if(document.getElementById('edit-searchname').value==''){
document.getElementById('edit-searchname').focus();
app.alert('Please enter search name');return false;}
}
</script>

<div id="containersave">
<table border=0 style='width:450px;border:solid 0px;' class='searchpopup'>
<tbody style='width:450px;'>
<tr><td class='punchlineheader'>Save Search</td>
<td align=right valign=bottom class='tdnoborder'>
	<a id="bottomNavClose" href="#" title="Close" style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);" onclick="Lightbox.end('forceClose');"></a>
</td>
</tr>

<tr>
	<td colspan="2" class="text_type">Choose a name for your Saved Search, then click Save to continue.</td>
</tr>
<tr>
	<td colspan=2 style='height:20px;' class='tdnoborder'>&nbsp;</td>
</tr>
<tr>
	<td align=left class="name_punch" colspan=1 style='vertical-align:bottom; padding:0px 0px 4px 0'>Name&nbsp;&nbsp;&nbsp;<input type="text" id="edit-searchname" name="searchname" value="" size="60" maxlength="128" class="form-text" />
</td><td style='vertical-align:middle;padding-right:55px;' align=left class='tdnoborder'>
 <input type='image' src='<?php echo path_to_theme()?>/images/save.jpg' onclick="return validation();" style='vertical-align:middle;'></td>
</tr>


</tbody>
</table>
</div>
<?php   
	print render($form['report']); 
	print render($form['form_id']);
	print render($form['form_build_id']);
	print render($form['form_token']);




