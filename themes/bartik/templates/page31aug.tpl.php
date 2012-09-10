<?php
$userroles = array_values($user->roles);?>
<script type="text/javascript">
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>

<?php 
$liver='';
$expr='';
$pendr='';
$saver='';
if(current_path()=='promolist/pending') $pendr='_role';
if(current_path()=='promolist/live') $liver='_role';
if(current_path()=='promolist/expired') $expr='_role';
if(current_path()=='savesearchlist') $saver='_role';
$page_array = array('savesearch','searchbox');
//if(!in_array($_GET['q'],$page_array)): ?>
<div id="wrapper" style='position:relative;'>
<div id="container">
 <div id="content">



 <div id="header">
	<div id="topPacth"> 
		<?php if($user->uid != 0 ) : ?>
			<ul id="rightbutton" >
			<?php if(isset($userroles[1]) && $userroles[1]=='PromoTool Admin'):?>
				<li><a href='?q=welcome/admin'>Administration</a></li> <li>|</li> <?php endif;?>
				<li><a href="?q=welcome" title="Home">Home</a></li>
				<li>|</li>
				<li><a href="?q=user/logout" title="Logout">Logout</a></li>
			</ul>
		<?php endif;?>
	</div>
	<header>
	<div id="logo" style="padding-left:50px;">
	<?php if ($logo): ?>
			<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
			<?php if($user->uid!=0) $logoimg=$logo; 
				else $logoimg=path_to_theme().'/images/'.'logo_login.jpg';?>				
			<img src="<?php print $logoimg; ?>" alt="Barnes& Noble" title="Barnes& Noble" /></a>
	<?php endif; ?>
	</div>
</header>
</div>



		<div id="imagecontainer">
		<div style="padding: 0 80px 0 80px;clear:both;" >	
			<div class="fmimagenew">
			<div class="fmimage">
			<?php  if($user->uid != 0 && !strstr(current_path(),'welcome')) :?>
					<div class="menuTop">
						<table width="100%" border="0" align="left" cellpadding="0" cellspacing="0" style='border:0;padding:1px;margin:0px;' class="padded-table">
						<tr>
						<td align="right"><a href="?q=promolist/live" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image2','','<?php echo path_to_theme()?>/images/live_promotions_role.png',1)"><img src="<?php echo path_to_theme()?>/images/live_promotions<?php echo $liver?>.png" alt="live promotions" width="127" height="40" id="Image2" border=0/></a></td>
						<td align="right"><a href="?q=promolist/expired" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image3','','<?php echo path_to_theme()?>/images/expire_role.png',1)"><img src="<?php echo path_to_theme()?>/images/expire<?php echo $expr?>.png" alt="expired promotions" width="146" height="40" id="Image3" border=0 /></a></td>
						<td align="right"><a href="?q=promolist/pending" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','<?php echo path_to_theme()?>/images/pending_promo_role.png',1)"><img src="<?php echo path_to_theme()?>/images/pending_promo<?php echo $pendr?>.png" alt="pending promotions" width="146" height="40" id="Image4" border=0/></a></td>
						<td align="right"><a href="?q=savesearchlist" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image5','','<?php echo path_to_theme()?>/images/search_role.png',1)"><img src="<?php echo path_to_theme()?>/images/search<?php echo $saver?>.png" alt="#" width="120" height="40" id="Image5" border=0 /></a></td>
						</tr>
						</table>	
					</div>
					<?php endif; ?>
					<?php  if($user->uid != 0 && current_path() == 'welcome' ) : ?>
					<div class="menuTop">
				  	<table width="100%" align="left" style='border:0px;'>
						<tr>
						<td align="left"><a href="?q=promolist/live" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image2','','<?php echo path_to_theme()?>/images/home_role.png',1)"><img src="<?php echo path_to_theme()?>/images/home_role.png" alt="Home" width="127" height="40" id="Image2" border=0/></a></td>
						</tr></td></table>
					</div>
	
				<?php endif;?>
				</div>
				<div>
					<?php if ($messages && $_GET['q']!='user' ): ?>
					<div id="messages" style='margin-left:100px;'>
					<div class="section clearfix">
						<?php print $messages; ?>
					</div></div> 
					<?php endif; ?>
				<div class="colRbox">
				<?php print render($page['content']); ?>
				</div>
			<div>
			<div><!--fmimage-->
		</div></div>



</div>

 <div id="footer" ></div>

</div></div>
