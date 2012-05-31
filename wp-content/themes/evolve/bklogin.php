<?php
/*
Template Name: bklogin
*/

wp_footer();
?>

<br><br><br><br><br>
<?php
	if (! is_user_logged_in()){
		$args = array(
		        'echo' => true,
		        'redirect' => 'http://vinpad.us/wp/publish?url='.$_GET['url'], 
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
	}
	else{
		$location = 'http://vinpad.us/wp/publish?url='.$_GET['url'];
		echo "<meta http-equiv='refresh' content='0;url=$location' />";
	}
	
?> 