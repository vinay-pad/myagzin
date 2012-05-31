<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);
require_once('wp-includes/user.php');
echo 'hello';
$creds = array();
$creds['user_login'] = 'Vinay';
$creds['user_password'] = 'Soumya8*';
$creds['remember'] = false;
$user = wp_signon( $creds, false );
if ( is_wp_error($user) )
   echo $user->get_error_message();
?>
