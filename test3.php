<?php
include("wp-includes/user.php");
_my_newuser('joe','itsasecret','joe@joe.com','Joe');
 
_my_user_login('joe','itsasecret');
 
_my_commit_post($newpost);
 
_my_current_user();
 
//Register a new user
function _my_newuser($username,$password,$email,$nickname)
{
	global $wpdb;
	$user_login = $wpdb->escape( $username );
	$user_pass = $password;
	$nickname = $nickname;
	$user_email = $username;
	$userdata = compact('user_login', 'user_email', 'user_pass', 'first_name','nickname' );
	return wp_insert_user($userdata);
}
 
//Log a user in and set them as current user
function _my_user_login($username,$password)
{
	$creds = array();
	$creds['user_login'] = $username;
	$creds['user_password'] = $password;
	$creds['remember'] = true;
	$user = wp_signon( $creds, false );
	wp_set_current_user($user->ID); //Here is where we update the global user variables
	return $user;
}
 
//Commits a new post to the DB
function _my_commit_post($postdata)
{
	global $user_ID;
	$new_post = array(
		'post_title' => $postdata->title,
		'post_content' => $postdata->description,
		'post_status' => 'publish',
		'post_date' => date('Y-m-d H:i:s'),
		'post_author' => $user_ID,
		'post_type' => 'post',
		'post_category' => array(0),
		'tags_input' => $postdata->tags
	);
	$post_id = wp_insert_post($new_post,true);
}
 
//Print info about the user who is now logged in
function _my_current_user()
{
	global $current_user,$user_ID;
 
	if(is_user_logged_in())
	{
		echo '<br />User Logged in ok<br />';
		echo 'User ID is: '.$user_ID.'<br />';
		echo 'User login is: '.$current_user->user_login.'<br />';
	}
	else
		echo 'No user is logged in< br/>';
}
 
?>
