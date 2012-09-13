<style>table td{border:0px solid #e6e6e6;text-align:left;}</style>
<?php 
$errors = form_get_errors('name'); 
$plist = promo_types_list();
?>
<div id="imagemackone"><span class="punchline">ADD NEW PROMOTION</span></div>
<div id="imagemackthree"></div>
<div id="imagemanubar" ><div>
<table align=left  style='width:800px;'>
<tr><td class='formlabel' colspan=2>&nbsp;</td></tr>
<tr><td class='formlabel' valign=middle>Promotion Name </td>
<td><?php print str_replace('</div>','',render($form['promoname']));?><div class='redmark'>*</div>
<?php if(isset($errors['promoname'])) echo'<div class="addpromo" style="color:red">', $errors['promoname'],'</div>';?></div>
</td>
</tr>
<tr><td class='formlabel' valign=middle>Promotion Description </td><td align=left><?php print str_replace('</div>','',render($form['promodescription']));?>
<div class='redmark'>*</div>
<?php if(isset($errors['promodescription'])) echo'<div class="addpromo" style="color:red">', $errors['promodescription'],'</div>';?></div>
</td></tr>
<tr><td class='formlabel' valign=middle>Marketing Placement for this promotion </td>
<td align=left><?php print str_replace('</div>','',render($form['marketingplacement']));?>
<div class='redmark'>*</div>
<?php if(isset($errors['marketingplacement'])) echo'<div class="addpromo" style="color:red">', $errors['marketingplacement'],'</div>';?></div>
</td></tr>
<tr><td class='formlabel' valign=middle>Promotion Type</td><td align=left>
<div class="form-item form-type-select form-item-promotype">
<?php if(isset($errors['promotype'])) $classfrm='form-select error';else $classfrm='form-select';?>
 <select style="width:190px;" id="edit-promotype" name="promotype" class="<?php echo $classfrm?>">
<option value='0'>Select Promotion Type</option>
<?php foreach ($plist as $item) {
		if($form['promotype']['#value']==$item->id) $sel='selected'; else $sel='';	
		echo "<option value='".$item->id."' $sel alt='".$item->promotype."' title='".$item->promotype."' style='width:190px;'>".$item->promotype."</option>";	
}
?>
</select>
<div class='redmark'>*</div>
<?php if(isset($errors['promotype'])) echo'<div class="addpromo" style="color:red">', $errors['promotype'],'</div>';?></div>
</td></tr>
<tr><td class='formlabel' valign=middle>Channel</td><td align=left><?php print str_replace('</div>','',render($form['channel']));?>
<div class='redmark'>*</div>
<?php if(isset($errors['channel'])) echo'<div class="addpromo" style="color:red">', $errors['channel'],'</div>';?></div>
</td></tr>
<tr><td class='formlabel' valign=middle>Coupon Required</td><td align=left><?php print str_replace('</div>','',render($form['coupon']));?>
<div class='redmark'>*</div>
<?php if(isset($errors['coupon'])) echo'<div class="addpromo" style="color:red">', $errors['coupon'],'</div>';?></div>
</td></tr>
<tr>
<td>
</td>
<td align=left colspan=2 style='padding-right:-40px;'>
<input type='submit' value='Add' class='button_form'>
</td></tr>
</table>
</div></div>
<?php   
print render($form['report']); 
print render($form['form_id']);
print render($form['form_build_id']);
print render($form['form_token']);




