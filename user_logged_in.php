<?php

global $current_user;
get_currentuserinfo();

$cat = 'group1';
$_group  = get_cat_ID($cat);
if (is_user_logged_in()){
	
			$my_post = array(
						 'post_title' => 'Title',
						 'post_content' => "test content",
						 'post_status' => 'publish',
						 'post_author' => $current_user->ID,
						 'post_category' => array($_group)
					  );
		

				// Insert the post into the database
		wp_insert_post($my_post);
		echo "Post succesfully posted!";
	}
	else
	{
		echo "Sorry! You need to be logged in to perform this action.";
	}

 ?>

