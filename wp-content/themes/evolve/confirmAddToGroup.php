<?php
/*
Template Name: confirmAddToGroup
*/

get_header(); 
?>

<br><br><br><br><br>
<?php
	$group_added_to_hash = $_GET['group'];
	if (! is_user_logged_in()):
		$args = array(
		        'echo' => true,
		        'redirect' => 'http://vinpad.us/wp/confirmaddtogroup?group='.$group_added_to_hash, 
		        'form_id' => 'loginform',
		        'label_username' => 'Username',
		        'label_password' => 'Password',
		        'label_remember' => 'Remember Me',
		        'label_log_in' => 'Log In',
		        'id_username' => 'user_login',
		        'id_password' => 'user_pass',
		        'id_remember' => 'rememberme',
		        'id_submit' => 'wp-submit',
		        'remember' => true,
		        'value_username' => NULL,
		        'value_remember' => false );
		        
		wp_login_form( $args ); 
	else: ?>
		<div id="confirm_user_add_to_group_div">
			<h5>Please confirm that you want to be a part of the group</h5>
			<form type="post" action="" id="confirm_user_add_to_group">
				<input type="hidden" name="action" value="confirm_user_add_to_group"/>
				<input type="hidden" name="group_added_to_hash" value="<?php echo $group_added_to_hash; ?>" />
				<input type="submit"></th></tr>
			</form>
		</div>
		<div class="showMsg" id="feedback">
		</div>
		<script type="text/javascript">
			jQuery('#confirm_user_add_to_group').submit(ajaxSubmit); 		
			function ajaxSubmit(){
				var confirm_user_add_to_group = jQuery(this).serialize();
				jQuery.ajax({
					type:"POST",
					url: "../wp-admin/admin-ajax.php",
					data: confirm_user_add_to_group,
					success:function(data){
						jQuery("#confirm_user_add_to_group_div").css('display', 'None');
		                jQuery("#feedback").html(data);
		   			},
		            error: function(errorThrown){
						 jQuery("#feedback").html('Error: '+errorThrown);
		            }	
				});
				
				return false;
			}
		</script>
	<?php endif; ?>