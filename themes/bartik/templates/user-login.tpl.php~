<div id="mainContainer">
<div id="contanerformL" style='float:none'>
<div class="formcontainerL">
	
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td class="punchline" align="left">Welcome to Promotool</td>
		</tr>
		<tr>
			<td valign="top"><p><span class="letering">Please login using your Barnes &amp; Noble network username and password</span></p></td>
		</tr>
		<tr>
			<td class="bg_shadow">&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td valign="top" class="login_box_top"></td>
		</tr>
		<tr><td valign="top" class="login_box_middle">	
				<table width="80%" border="0" align="center" cellpadding="0" cellspacing="0">
				<tr>
					<td colspan="2">&nbsp;</td>
				</tr>
				<tr>
					<td colspan="2"><span class="punch_login">Promotool Login</span></td>
				</tr>				
				<tr>
					<td colspan="2" class="doted_line">&nbsp;</td>
				</tr>
				<?php 
				
				$errors = form_get_errors('name'); 
				
				if(!empty($errors)):
				?>					
				<tr><td colspan=2 height=0>      
				      <div class="messages error" >
					<h2 class="element-invisible">Error message</h2>
					 <ul>
						<?php 						
						if(isset($errors['name']) && isset($errors['pass']) && $errors['name']=='Username field is required.')
						echo 'Username and Password is required.';
						else echo 'Username or Password is invalid.';
						?> 
					</ul>
				      </div>
				</td></tr>	<tr><td colspan=2 height=15></td></tr>			
				<?php endif;?>
				<tr>
					<td width="34%" class="username">Username </td>
					<td width="66%" height="45">
						<input name="name" type="text" id="billAddress" size="40" maxlength="50" />  
					</td>
				</tr>
				<tr>
					<td class="username">Password</td>
					<td height="45"><input name="pass" type="password" id="billAddress2" size="40" /></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td class="butt_loginaa">&nbsp;<input type="submit" id="edit-submit" name="op" value="" class="butt_login" />
					
					</td>
				</tr>
				<tr><td colspan=2 align=center class='note'><BR>
					If you are experiencing problems logging in please contact NOC for
					assistance at 212-414-6330 or <a href='#'>NOC@book.com</a>.</td></tr>
			</table>
				</td>
		</tr>
		<tr>
			<td valign="top" class="login_box_bottom">
			</td>
		</tr>
		<!--tr>
			<td>&nbsp;</td>
		</tr-->
		
		<tr>
			<td class="bg_shadow_botom">&nbsp;</td>
		</tr>
	</table>
</div>
</div><input type="hidden" name="form_id" value="user_login" />

