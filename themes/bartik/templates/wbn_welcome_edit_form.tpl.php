<?php 
	  $theme = path_to_theme();
	  $user_roles = array_values($user->roles); 
	  if(isset($user_roles[1])) $urole = $user_roles[1] ;
	  else $urole = 'Default' ;
	?>
	<BR><BR><BR>
<style>table td{border:0px solid #e6e6e6;text-align:left;}</style>
	
	<table width="100%" border="0" cellspacing="2" cellpadding="2" style='border:0;width:100%;'>
	<tr>
	<td colspan=3 style='text-align:left;border:0;'><?php print render($form['welcome']);?>
	</td>
	</tr>
	<?php if($urole == 'Default' && $user_roles[0]!=='anonymous user'):?>
	<tr>
		<td align=left><a href='?q=promolist/live'><img src='<?php echo $theme ?>/images/livepromo.jpg'></a></td>
		<td align=left style='width:30px'><a href='#'><img src='<?php echo $theme ?>/images/promocal.jpg'></a></td>
	
		<td align=left>
		<a href='?q=promolist/expired' class='tdnoborder'><img src='<?php echo $theme ?>/images/expiredpromo.jpg'></a>
		</td>
	</tr>
	<?php endif; ?>	
	<?php if($urole == 'Merchandiser'):?>
	<tr>
		<td align=left><a href='?q=addnewpromo'><img src='<?php echo $theme ?>/images/addpromo.jpg'></a></td>
		<td align=left><a href='#'><img src='<?php echo $theme ?>/images/promocal.jpg'></a></td>
	
		<td align=left>
		<a href='?q=promolist/live'><img src='<?php echo $theme ?>/images/livepromo.jpg'></a>
		</td>
	</tr>
	<tr>
		<td align=left>
		<a href='?q=promolist/expired'><img src='<?php echo $theme ?>/images/expiredpromo.jpg'></a>
		</td>
	
		<td align=center colspan=2>
		<a href='?q=promolist/pending'><img src='<?php echo $theme ?>/images/pendingpromo.jpg'></a>
		</td>		
	</tr>
	<?php endif; ?>	
	<?php if($urole == 'Promo Marketing User' || $urole == 'PromoTool Admin'):?>
	<tr>
		<td align=left style='width:33%'><a href='?q=promolist/pending'>
			<img src='<?php echo $theme ?>/images/editapprove.jpg'/></a>
		</td>
		<td align=left  style='width:33%'>
			<a href='#'><img src='<?php echo $theme ?>/images/promocal.jpg'/></a>
		</td>
		<td align=left  style='width:34%'>
			<a href='?q=promolist/live'><img src='<?php echo $theme ?>/images/livepromo.jpg'/></a>
		</td>
	</tr>
	<tr><td colspan=3>&nbsp;</td>
	</tr>
	<tr>			
		<td align=left style='width:33%'>
			<a href='?q=promolist/expired'><img src='<?php echo $theme ?>/images/expiredpromo.jpg'></a>
		</td>	
		<td colspan=2 style='width:64%;text-align:left;' >
			<a href='?q=addnewpromo'><img src='<?php echo $theme ?>/images/addpromo.jpg'></a>
		</td>
	</tr>	
	<?php endif; ?>	
	<?php if($urole == 'Approver'):?>
	<tr>
		<td align=left><a href='?q=promolist/pending'><img src='<?php echo $theme ?>/images/approvenew.jpg'></a></td>
		<td align=left><a href='#'><img src='<?php echo $theme ?>/images/promocal.jpg'></a></td>
	
		<td align=left>
			<a href='?q=promolist/live'><img src='<?php echo $theme ?>/images/livepromo.jpg'></a>
		</td>
	</tr>
	<tr>	<td align=left colspan=3>
			<a href='?q=promolist/expired'><img src='<?php echo $theme ?>/images/expiredpromo.jpg'></a>
		</td>
	</tr>
	<?php endif; ?>			

<?php 
	print render($form['form_id']);
	print render($form['form_build_id']);
	print render($form['form_token']);
?></table>





