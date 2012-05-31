
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Share Articles &rsaquo; Log In</title>
<link rel='stylesheet' id='wp-admin-css'  href='http://vinpad.us/wp/wp-admin/css/wp-admin.css?ver=20111208' type='text/css' media='all' />
<link rel='stylesheet' id='colors-fresh-css'  href='http://vinpad.us/wp/wp-admin/css/colors-fresh.css?ver=20111206' type='text/css' media='all' />
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js'></script>
<script type='text/javascript'>try{jQuery.noConflict();}catch(e){};</script>
<script type='text/javascript' src='http://vinpad.us/wp/wp-content/plugins/sidebar-login/js/blockui.js?ver=1.0'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var sidebar_login_params = {"ajax_url":"http:\/\/vinpad.us\/wp\/wp-admin\/admin-ajax.php","login_nonce":"c1ea927fa4"};
/* ]]> */
</script>
<script type='text/javascript' src='http://vinpad.us/wp/wp-content/plugins/sidebar-login/js/sidebar-login.js?ver=1.0'></script>
<script type='text/javascript' src='http://vinpad.us/wp/wp-content/themes/evolve/library/media/js/tipsy.js?ver=3.3.2'></script>
<script type='text/javascript' src='http://vinpad.us/wp/wp-content/themes/evolve/library/media/js/fields.js?ver=3.3.2'></script>
<script type='text/javascript' src='http://vinpad.us/wp/wp-content/themes/evolve/library/media/js/supersubs.js?ver=3.3.2'></script>
<script type='text/javascript' src='http://vinpad.us/wp/wp-content/themes/evolve/library/media/js/superfish.js?ver=3.3.2'></script>
<script type='text/javascript' src='http://vinpad.us/wp/wp-content/themes/evolve/library/media/js/buttons.js?ver=3.3.2'></script>
<script type='text/javascript' src='http://vinpad.us/wp/wp-content/themes/evolve/scripts/ajax-implementation.js?ver=3.3.2'></script>
<script type='text/javascript' src='http://vinpad.us/wp/wp-content/plugins/user-access-manager/js/jquery.tools.min.js?ver=3.3.2'></script>
<script type='text/javascript' src='http://vinpad.us/wp/wp-content/plugins/user-access-manager/js/functions.js?ver=3.3.2'></script>
<meta name='robots' content='noindex,nofollow' />
</head>
<body class="login">
<div id="login"><h1><a href="http://wordpress.org/" title="Powered by WordPress">Share Articles</a></h1>


	<form name="loginform" id="loginform" action="http://vinpad.us/wp/wp-login.php" method="post">
		<p>
			<label for="user_login">Username<br />
			<input type="text" name="log" id="user_login" class="input" value="user1" size="20" tabindex="10" /></label>
		</p>
		<p>
			<label for="user_pass">Password<br />
			<input type="password" name="pwd" id="user_pass" class="input" value="" size="20" tabindex="20" /></label>
		</p>
		<p class="forgetmenot"><label for="rememberme"><input name="rememberme" type="checkbox" id="rememberme" value="forever" tabindex="90" /> Remember Me</label></p>
		<p class="submit">
			<input type="submit" name="wp-submit" id="wp-submit" class="button-primary" value="Log In" tabindex="100" />
			<input id="publish_url" type="hidden" name="redirect_to" value="publish" />
			<input type="hidden" name="testcookie" value="1" />
		</p>
	</form>

<script  type="text/javascript">

	var str = window.location.search.replace( "?", "" );
	url = str.split("=", 2);
	jQuery('input[name=redirect_to]').val("publish?url="+url[1]);
</script>

<p id="nav">	
<a href="http://vinpad.us/wp/wp-login.php?action=lostpassword" title="Password Lost and Found">Lost your password?</a>
</p>

<script type="text/javascript">
function wp_attempt_focus(){
setTimeout( function(){ try{
d = document.getElementById('user_pass');
d.value = '';
d.focus();
d.select();
} catch(e){}
}, 200);
}

wp_attempt_focus();
if(typeof wpOnload=='function')wpOnload();
</script>

	
	</div>


<link rel='stylesheet' id='wp_sidebarlogin_css_styles-css'  href='http://vinpad.us/wp/wp-content/plugins/sidebar-login/style.css?ver=3.3.2' type='text/css' media='all' />
<link rel='stylesheet' id='googlefont-css'  href='http://fonts.googleapis.com/css?family=Oswald%3Ar%2Cb&#038;ver=3.3.2' type='text/css' media='all' />
<script type='text/javascript' src='http://vinpad.us/wp/wp-includes/js/hoverIntent.js?ver=20090102'></script>
<div class="clear"></div>
</body>
</html>
