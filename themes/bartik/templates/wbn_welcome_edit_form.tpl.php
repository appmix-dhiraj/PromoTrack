<div id="mainContainer" style='border:solid 0px;height:auto;'><div id="contanerformL" style='float:none;border:solid 0px;height:auto'>
<div class="formcontainerL" style='border:solid 0px;height:auto;'>
	<?php 
	  $theme = path_to_theme();
	  $user_roles = array_values($user->roles); 
	  if(isset($user_roles[1])) $urole = $user_roles[1] ;
	  else $urole = 'Default' ;
	?>
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
	<td colspan=2><?php print render($form['welcome']);?>
	</td>
	</tr>
	<tr><td colspan=2 height=40>&nbsp;</td></tr>
	<?php if($urole == 'Default' && $user_roles[0]!=='anonymous user'):?>
	<tr>
		<td align=left><a href='#'><img src='<?php echo $theme ?>/images/livepromo.jpg'></a></td>
		<td align=left><a href='#'><img src='<?php echo $theme ?>/images/promocal.jpg'></a></td>
	</tr>
	<tr>
		<td colspan=2 align=center><br><br>
		<a href='#'><img src='<?php echo $theme ?>/images/expiredpromo.jpg'></a>
		</td>
	</tr>
	<?php endif; ?>	
	<?php if($urole == 'Merchandiser'):?>
	<tr>
		<td align=left><a href='#'><img src='<?php echo $theme ?>/images/addpromo.jpg'></a></td>
		<td align=left><a href='#'><img src='<?php echo $theme ?>/images/promocal.jpg'></a></td>
	</tr>
	<tr>
		<td align=left><br><br>
		<a href='#'><img src='<?php echo $theme ?>/images/livepromo.jpg'></a>
		</td>
		<td align=left><br><br>
		<a href='#'><img src='<?php echo $theme ?>/images/expiredpromo.jpg'></a>
		</td>
	</tr>
	<tr>
		<td align=center colspan=2><br><br>
		<a href='#'><img src='<?php echo $theme ?>/images/pendingpromo.jpg'></a>
		</td>		
	</tr>
	<?php endif; ?>	
	<?php if($urole == 'Promo Marketing User'):?>
	<tr>
		<td align=left><a href='#'><img src='<?php echo $theme ?>/images/editapprove.jpg'></a></td>
		<td align=left><a href='#'><img src='<?php echo $theme ?>/images/promocal.jpg'></a></td>
	</tr>
	<tr>
		<td align=left><br><br>
		<a href='#'><img src='<?php echo $theme ?>/images/livepromo.jpg'></a>
		</td>
		<td align=left><br><br>
		<a href='#'><img src='<?php echo $theme ?>/images/expiredpromo.jpg'></a>
		</td>
	</tr>
	
	<?php endif; ?>	
	<?php if($urole == 'Approver'):?>
	<tr>
		<td align=left><a href='#'><img src='<?php echo $theme ?>/images/approvenew.jpg'></a></td>
		<td align=left><a href='#'><img src='<?php echo $theme ?>/images/promocal.jpg'></a></td>
	</tr>
	<tr>
		<td align=left><br><br>
			<a href='#'><img src='<?php echo $theme ?>/images/livepromo.jpg'></a>
		</td>
		<td align=left><br><br>
			<a href='#'><img src='<?php echo $theme ?>/images/expiredpromo.jpg'></a>
		</td>
	</tr>
	<?php endif; ?>	
	<?php if($urole == 'PromoTool Admin'):?>
	<tr>
		<td colspan=2><b>To change user preferences for a user, select username below:</b><BR/><BR/></td>
	</tr>
	<tr>
		<td colspan=2>		
		<?php print render($form['filterset']['username']);?>		
		</td>		
	</tr>
	<tr>
		<td colspan=2>		
		<div id="replace_textfield_div"><?php print render($form['replace_textfield']);?>	</div>	
		</td>		
	</tr>	
	<tr>
		<td colspan=2>			
		<?php print render($form['filterset1']['userroles']);?>		
		</td>		
	</tr>	
	<tr>
		<td colspan=2><div style="margin-left:130px;"><input type="submit" id="edit-submit" name="op" value="" class="butt_save" /><?php //print render($form['submit']);?></td>		
	</tr>

	<?php endif; ?>	
		
</table>
<?php 
	print render($form['form_id']);
	print render($form['form_build_id']);
	print render($form['form_token']);
?>
</div></div>




