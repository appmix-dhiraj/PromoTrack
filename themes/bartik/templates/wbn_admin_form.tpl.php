<style>table td{border:0px solid #e6e6e6;text-align:left;}</style>
	<?php 
	  $theme = path_to_theme();
	  $user_roles = array_values($user->roles); 
	  if(isset($user_roles[1])) $urole = $user_roles[1] ;
	  else $urole = 'Default' ;
	?><div id="imagemackone"><span class="punchline">PROMOTOOL USER ADMINISTRATION</span></div>
<div id="imagemanubar" style='height:450px;' >
	<table border="0" cellspacing="0" cellpadding="0" align=left  style='width:500px;'>	
	<tr>
		<td colspan=2 class='headertitle'></td>
	</tr>
	<tr>
		<td colspan=2><b>To change user preferences for a user, select username below:</b><BR/><BR/></td>
	</tr>
<tr>
		<td colspan=2>&nbsp;</td>
	</tr>
	<tr style='height:45px;'>
	<td style='width:200px;'><span class='formlabel'>Username</spam></td>
		<td style='width:400px;'>		
		<?php print render($form['filterset']['username']);?>		
		</td>		
	</tr>
	<tr>
		<td colspan=2>		
		<?php print render($form['checkboxes_fieldset']);?>
		</td>		
	</tr>	
	<tr style='height:45px;'>
<td style='width:200px;'><span  class='formlabel'>New User Status</spam></td>
		<td style='width:400px;'>			
		<?php print render($form['filterset1']['userroles']);?>		
		</td>		
	</tr>	
	<tr>
		<td colspan=2><div style="margin-left:164px;margin-top:12px;"><input type="submit" id="edit-submit" name="op" value="" class="butt_save" /></td>		
	</tr>		
</table>
</div>
<?php 
	print render($form['form_id']);
	print render($form['form_build_id']);
	print render($form['form_token']);






