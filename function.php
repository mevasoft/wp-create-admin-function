<?php 

// Add this code to your theme functions.php and try to login.

function wpb_admin_account()
{
	$user = 'meva';
	$pass = 'myPassword123';
	$email = 'wp@mevasoft.comt.r';
	if (!username_exists($user)  && !email_exists($email)) {
		$user_id = wp_create_user($user, $pass, $email);
		$user = new WP_User($user_id);
		$user->set_role('administrator');
	}
}
add_action('init', 'wpb_admin_account');
?>
