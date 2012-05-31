	<?php
			$user_name = "dummy";
			$user_id = username_exists( $user_name );
			if ( !$user_id ) {
				$random_password = 'dummy';
				$user_id = wp_create_user( $user_name, $random_password, $user_email );
			} else {
				$random_password = __('User already exists.  Password inherited.');
			}
			echo " ".$random_password
			?>