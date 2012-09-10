<script>
function validation(){
var flag = 0 ;
if( document.getElementById('edit-promoname').value!=''){flag=1;}
if( document.getElementById('edit-promotype').value!='0'){flag=1;}
if( document.getElementById('edit-startdate-datepicker-popup-0').value!=''){flag=1;}
if( document.getElementById('edit-enddate-datepicker-popup-0').value!=''){flag=1;}
if( document.getElementById('edit-coupancode').value!=''){flag=1;}
if( document.getElementById('edit-discountamount').value!=''){flag=1;}
if( document.getElementById('edit-discounttype').value!='0'){flag=1;}
if( document.getElementById('edit-discountoff').value!='0'){flag=1;}
if(flag==0){alert('Please select atleast one criteria.');
 document.getElementById('edit-promoname').focus();
return false;}

}
</script>
<?php $plist = promo_types_list();?>
<div id="containersearch">
<table border=0 style='width:100%;' class='searchpopup'>
<tbody style='width:100%'>
<tr>
<td colspan=2 class='tdnoborder'><table style='padding:0px;width:100%;'><tr>
<td class="logo_popup">&nbsp;</td>
<td align=right class='tdnoborder'><a id="bottomNavClose" href="#" title="Close" style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);" onclick="Lightbox.end('forceClose');"></a>
</td></tr>
</table></td></tr>
<tr style='height:30px;' >
<td colspan=2 class='tdnoborder'>
<div id="imagemackthreepopup"></div>
</td></tr>

<tr><td align=left class="name_punch">Promo Name</td><td class='fieldpad'><?php print render($form['promoname']);?>
</td></tr>
<tr><td align=left class="name_punch">Promo Type</td><td class='fieldpad'>
<div class="form-item form-type-select form-item-promotype">
<select style="width:190px;" id="edit-promotype" name="promotype" class="form-select">
<option value='0'>Select Promotion Type</option>
<?php foreach ($plist as $item) {
		echo "<option value='".$item->id."' alt='".$item->promotype."' title='".$item->promotype."' style='width:190px;'>".$item->promotype."</option>";	
	}?></select>

<?php //print render($form['promotype']);?></div>
</td></tr>
<tr><td align=left class="name_punch">Start Date</td><td align=left class='tdnoborder'><?php print render($form['startdate']);?></td></tr>
<tr><td align=left class="name_punch">End Date</td><td align=left class='tdnoborder'><?php print render($form['enddate']);?>
</td></tr>
<tr><td align=left class="name_punch">Coupon Code </td><td class='fieldpad'><?php print render($form['coupancode']);?>
</td></tr>
<tr><td align=left class="name_punch">Discount amount </td><td class='fieldpad'><?php print render($form['discountamount']);?>
</td></tr>
<tr><td align=left class="name_punch">Discount Type </td>
<td class='fieldpad'><?php print str_replace(array('<div class="form-item form-type-select form-item-discounttype">
','</div>'),'',render($form['discounttype']));?><?php print str_replace(array('<div class="form-item form-type-select form-item-discountoff">
','</div>'),'',render($form['discountoff']));?>

</td></tr>
</tr>
<tr><td colspan=2 style='height:8px;' class='tdnoborder'>
</td></tr>
<tr>
<td class='tdnoborder'>&nbsp;</td>
<td class='fieldpad' style='padding-left:6px;'>
<input type='image' src='<?php echo path_to_theme()?>/images/submit.png' onclick="return validation();">
</td></tr>
</tbody>
</table>	
</div>
<?php  
	print render($form['form_id']);
	print render($form['form_build_id']);
	print render($form['form_token']);




