<?php
/*
Template Name: Register
*/
get_header(); 

?>
	

		<div id="primary">
			<div id="content" role="main">
			<div class="showMsg" id="feedback">
			</div>

					<?php 
					
					if (! is_user_logged_in()):?>
						<div id="new_user_div">
							<form type="post" action="" id="newCustomerForm">
								
								<table class="register_table">
								<tr><th><label for="name">Userame:</th><th></label>
								<input name="name" type="text" /></th></tr>
								
								<tr><th><label for="email">Email:</th><th></label>
								<input name="email" type="text" /></th></tr>
								
								<tr><th><label for="password1">Password:</th><th></label>
								<input name="password1" id="password1"  type="password" /></th></tr>
								
								<tr><th><label for="password2">Confirm Password:</th><th></label>
								<input name="password2" id="password2" onkeyup="checkPass(); return false;" type="password" /><span id="confirmMessage" class="confirmMessage"></span></th></tr>
								
								<tr><th><input type="hidden" name="action" value="addNewUser"/>
								<input type="submit"></th></tr>
								</table>
							</form>
						<div>
						
					
					<?php 
					else:?>
					<script type="text/javascript">	
						jQuery("#feedback").html("You are already registered!");
					</script>
					<?php
					endif;						
					
					?>
					
					<script type="text/javascript">
						jQuery('#newCustomerForm').submit(ajaxSubmit); 
						
						function ajaxSubmit(){
							
							var newCustomerForm = jQuery(this).serialize();
							
							jQuery.ajax({
								type:"POST",
								url: "../wp-admin/admin-ajax.php",
								data: newCustomerForm,
								success:function(data){
									jQuery("#new_user_div").css("display", "None");
					                jQuery("#feedback").html(data);
					   			},
					            error: function(errorThrown){
									alert('error');
					                alert(errorThrown);
					            }	
							});
							
							return false;
						}
						 function checkPass(){
							  //Store the password field objects into variables ...
							  var pass1 = jQuery('#password1')[0];
							  var pass2 = jQuery('#password2')[0];
							  //Store the Confimation Message Object ...
							  var message = jQuery('#confirmMessage')[0];
							  //Set the colors we will be using ...
							  var goodColor = "#66cc66";
							  var badColor = "#ff6666";
							  //Compare the values in the password field 
							  //and the confirmation field
							  if(pass1.value == pass2.value){
								//The passwords match. 
								//Set the color to the good color and inform
								//the user that they have entered the correct password 
								pass2.style.backgroundColor = goodColor;
								message.style.color = goodColor;
								message.innerHTML = "Passwords Match!"
							  }else{
								//The passwords do not match.
								//Set the color to the bad color and
								//notify the user.
								pass2.style.backgroundColor = badColor;
								message.style.color = badColor;
								message.innerHTML = "Passwords Do Not Match!"
							}			
						}  
					</script>
					




			</div><!-- #content -->
		</div><!-- #primary -->
<?php get_footer(); ?>		
		
