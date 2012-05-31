<?php
/*
Template Name: AddNewGroup
*/
get_header(); ?>
	
		<div id="primary">
			<div id="content" role="main">
				<div class="showMsg" id="feedback"></div>
					<?php 
					
					if (is_user_logged_in()):?>
						<div id="add_new_grp_div">
							<form type="post" action="" id="newCustomerForm">
								
								<table class="register_table">
								<tr><th><label for="grp_name">Group Name:</th><th></label>
								<input name="grp_name" type="text" /></th></tr>
								
								<tr><th><label for="grp_desc">Group Description:</th><th></label>
								<input name="grp_desc" type="text" /></th></tr>

								<tr><th><label for="grp_email">Group Email Alias:</th><th></label>
								<input name="grp_email" type="text" /></th></tr>

								<tr><th><label for="grp_invite">Invite:</th><th></label>
								<input name="grp_invite" type="text" /><span style="font-size:small;"><i>Comma separated email ids<i><span>
								</th></tr>
								
								<tr><th><input type="hidden" name="action" value="addNewGroup"/>
								<input type="submit"></th></tr>
								</table>
							</form>
						</div>
					
					<?php 
					else:?>
					<script type="text/javascript">	
						jQuery("#feedback").html("You need to login to add a new group!");
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
									jQuery("#add_new_grp_div").css("display", "None");
					                jQuery("#feedback").html(data);
					   			},
					            error: function(errorThrown){
									alert('error');
					                alert(errorThrown);
					            }	
							});
							
							return false;
						}
					</script>
			</div><!-- #content -->
		</div><!-- #primary -->
<?php get_footer(); ?>	
