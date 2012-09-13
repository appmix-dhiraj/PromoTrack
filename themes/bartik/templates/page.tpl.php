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

function setheight(){
var obj = document.getElementById('fmimage');
var pageh = document.getElementById('fmimage').offsetHeight;
//alert(pageh1)
var seth = screen.height - pageh-87;
//alert(pageh)
obj.style.minHeight =seth+'px';
}
</script>

<body onload='setheight()'>
<?php 
$roles = array_values($user->roles);

$liver='';
$expr='';
$pendr='';
$saver='';
$addp='';
if(current_path()=='promolist/pending') $pendr	=	'selected';
if(current_path()=='promolist/live') 		$liver	=	'selected';
if(current_path()=='promolist/expired') $expr		=	'selected';
if(current_path()=='savesearchlist') 		$saver	=	'selected';
if(current_path()=='addnewpromo') 		$addp	=	'selected';
$page_array = array('savesearch','searchbox');
if(!in_array($_GET['q'],$page_array)): ?>
<!-- Bg container start-->
<div id="bgcontainer1">
<!--main container start-->
	<div id="container">
			<div id="topPacth"> 
			<?php if($user->uid != 0 ) : ?>
			<ul id="rightbutton" >
			<?php if(isset($userroles[1]) && $userroles[1]=='PromoTool Admin'):?>
			<li>
			<a href='?q=welcome/admin'>Administration</a></li> <li>|</li> <?php endif;?>
				<li><a href="?q=welcome" title="Home">Home</a>
			<li>|</li>
			<li><a href="?q=user/logout" title="Logout">Logout</a>
			</li>
			</ul>
			<?php endif;?>
			</div>
			<header>
				<div id="logo">
				<?php if ($logo): ?>
						<a href="?q=welcome" title="<?php print t('Home'); ?>" rel="home">
						<?php if($user->uid!=0) $logoimg=$logo; 
							else $logoimg=path_to_theme().'/images/'.'logo_login.jpg';?>				
						<img src="<?php print $logoimg; ?>" alt="Barnes& Noble" title="Barnes& Noble" /></a>
				<?php endif; ?>
				</div>
			</header>
			<div id="imagecontainer">
				<div style="padding: 0 80px 0 80px;clear:both;">
				<div class="fmimage" id="fmimage" style='height:auto;padding-bottom:20px;background:#FFF;position:relative;'>
				<?php  if($user->uid != 0 && !strstr(current_path(),'welcome')) :?>
				<div class="menuTop">
						<table width="100%" border="0" align="right" cellpadding="0" cellspacing="0" style='width:100%'>
						<tr>
					 <td class='ubercolortabs' style='border:0px;'>
								<ul style='float:right;'>	
									<?php if(isset($userroles[1]) && ($userroles[1]=='Merchandiser' || $userroles[1]=='PromoTool Admin' || $userroles[1]=='Promo Marketing User')):?>							 
									<span class='menupadd' id='add1'><li class='<?php echo $addp?>'>
									<a href='?q=addnewpromo' class='tabborder'>Add Promotion</a></li></span>
									<?php endif; ?>
									<span class='menupadd'><li class='<?php echo $liver?>'>
									<a href='?q=promolist/live'  class='tabborder'>Live Promotions</a></li></span>
									<span class='menupadd'><li class='<?php echo $expr?>'>
									<a href='?q=promolist/expired'  class='tabborder'>Expired Promotions</a></li></span>
									<?php if(isset($roles[1])) :?>
									<span class='menupadd'><li class='<?php echo $pendr?>'>
									<a href='?q=promolist/pending'  class='tabborder'>Pending Promotions</a></li></span>	
									<?php endif; ?>	
									<span class='menupadd'><li class='<?php echo $saver?>'>
									<a href='?q=savesearchlist' class='tabborder'>Search Results</a></li></span>	 
								</ul>
							</td>	    			
						</tr>
				 		</table></div>
					<?php endif; ?>
					<?php  if($user->uid != 0 && current_path()=='welcome') :?>
					<div class="menuTop">				  	
						<table width="100%" border="0" align="right" cellpadding="0" cellspacing="0">
						<tr>
							<td class='ubercolortabs' style='border:0px;'>
								<ul>
								 <span class='menupadd'><li class='selected'>
									<a href='?q=welcome'>Home</a></li></span>
								</ul>
							</td>
						</tr>
					</table>
					</div>
	
				<?php endif;?>
					<div>
						<?php 
						$error_arr=array('user','addnewpromo');
						if ($messages && (!in_array($_GET['q'],$error_arr)) ): ?>
						<div id="messages" style='margin-left:0px;'>
						<div class="section clearfix">
							<?php print $messages; ?>
						</div></div> 
						<?php endif; ?>
						<div class="colRbox" ><?php endif; ?>
							<?php print render($page['content']); ?>
							<?php if(!in_array($_GET['q'],$page_array)):  ?>
						</div>	
					</div>
			</div><!--fmimage--->
			</div>
<?php if($user->uid!=0): ?>
<div style='padding:0 80px 0 80px;'>
<!--div id="footerSection">&nbsp;&nbsp;Terms of Use, Copyright, and Privacy Policy</div-->
<div id="footer">
			
				<div class='footerinner'>
				<div class='footerinnercontent'>
				&nbsp;&nbsp;Terms of Use, Copyright, and Privacy Policy
				</div>
				
				<div class='footerinnercontent' style='text-align:right'>
				&nbsp;&nbsp;&copy;1997-2012 Barnesandnoble.com llc&nbsp;&nbsp;
				</div><div style='clear:both;'></div>
				</div>
			
</div>
</div>
<?php endif; ?>
</div></div>
<?php endif; ?>
