<?php $label = trim(strip_tags(render($form['label'])));
if($label=='PENDING PROMOTIONS') :
?>

<style>td{border-left:0px solid #e6e6e6;font-style:italic;}</style>
<?php endif;?>
<script>
function getresize(){ 
var coun=parseInt(document.getElementById('counter').value);
/*if(coun>0){
var divid = '<a href="?q=searchbox" title="Search For A Promotion" alt="Search For A Promotion" rel="lightmodal[search|width:483px;height:490px;]" onclick="getresize();">search</a>';
document.getElementById('leteringsearch').innerHTML=divid;
}
*/
document.getElementById('counter').value=coun+1;
}
</script>
<div id="imagemackone"><span class="punchline"><?php echo render($form['label']); ?></span></div>
<?php if($label=='LIVE PROMOTIONS' || $label=='EXPIRED PROMOTIONS'):?>
		<input type=hidden name=counter id=counter value='0'>	
		<div id="imagemack">
			<div id="leteringsearch"><a href="?q=searchbox" title="Search For A Promotion" alt="Search For A Promotion" rel="lightmodal[search|width:490px;height:460px;]" onclick='getresize();'  ><img src="<?php echo path_to_theme()?>/images/button_search.png" width="195" height="37"border="0"/></a> </div></div>
<?php endif;?>
<?php if($label=='SEARCH RESULTS'):?>

<div id="imagemack" style='height:25px;'>
			Other Options: <a href="?q=savesearch" rel="lightmodal[search|width:486px;height:150px;]">Save Search</a> | <a href="?q=searchbox" title="Search For A Promotion" alt="Search For A Promotion" rel="lightmodal[search|width:490px;height:460px;]">Revise Search</a></div>
			<?php endif;?>
  <?php if($label=='LIVE PROMOTIONS' || $label =='EXPIRED PROMOTIONS' || $label=='SEARCH RESULTS'):?> 
	<div id="imagemacktwo">
		<div id="leteringsearch"></div>
	</div><?php endif;?>

<div id="imagemackthree"></div>
<div id="imagemanubar" >
<div style='overflow:scroll;overflow-y:hidden;border:solid 1px #ccc;'>
	<?php  print render($form['report']); ?>
</div>
</div>
