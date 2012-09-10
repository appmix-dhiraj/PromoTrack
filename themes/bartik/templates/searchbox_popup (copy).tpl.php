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
if(flag==0){alert('Please select any one criteria.');
 document.getElementById('edit-promoname').focus();
return false;}

}
</script>
<div style='width:600px;'>
<table border=0>
<tr><td align=right><a id="bottomNavClose" href="#" title="Close" style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);" onclick="Lightbox.end('forceClose');"></a>
</td></tr>
<tr><td align=left><?php print render($form['promoname']);?>
</td></tr>
<tr><td align=left><?php print render($form['promotype']);?>
</td></tr>
<tr><td align=left><?php print render($form['startdate']);?><?php print render($form['enddate']);?>
</td></tr>
<tr><td align=left><?php print render($form['coupancode']);?>
</td></tr>
<tr><td align=left><?php print render($form['discountamount']);?>
</td></tr>
<tr><td align=left><?php print render($form['discounttype']);?>
</td></tr>
<tr><td align=center STYLE='padding-left:130px;'><?php print render($form['discountoff']);?>
</td></tr>
<tr><td><input class="butt_save form-submit" style="background-image: url(../images/save_changes.jpg);" onclick="return validation();" type="submit" id="edit-submit" name="op" value="Search" >
<?php //print render($form['submit']);?></td></tr>
</table>

<?php   
	print render($form['report']); 
	print render($form['form_id']);
	print render($form['form_build_id']);
	print render($form['form_token']);




