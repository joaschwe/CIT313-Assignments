<?php
/**
 * Created by PhpStorm.
 * User: joanna_schweiger
 * Date: 2/4/18
 * Time: 9:15 PM
 */

/**INSTRUCTIONS
 * Instantiate a single instance of both the RegisteredUser class and the Admin class.  Remember that these classes take two parameters (user_level, user_id) User Level for the registered user should be ‘Regular User’ while user level for the admin user should be ‘Administrator’.

Set the first_name, last_name, and email address properties of these objects

Echo out the following properties to the screen for each object:

User Level:
User ID:
User Type:
First Name:
Last Name:
Email Address:
 */

include_once 'classes/users.class.php';
include_once 'classes/registeredUser.class.php';
include_once 'classes/admin.class.php';

$registeredUser = new RegisteredUser('Regular User', 'joaschwe');
$admin = new Admin('Administrator', 'johnsmith');

$registeredUser->first_name = 'Joanna';
$registeredUser->last_name = 'Schweiger';
$registeredUser->email_address = 'joa@iu.edu';

$admin->first_name = 'Johnny';
$admin->last_name = 'Smith';
$admin->email_address = 'john@iu.edu';



echo 'User Level: ' . $registeredUser->user_level . '<br/>';
echo 'Registered User ID: ' . $registeredUser->user_id . '<br/>';
echo 'Registered User Type: ' . $registeredUser->user_type . '<br/>';
echo 'Registered First Name: ' . $registeredUser->first_name . '<br/>';
echo 'Registered Last Name: ' . $registeredUser->last_name . '<br/>';
echo 'Registered Email Address: ' . $registeredUser->email_address . '<br/> <hr>';

echo 'User Level: ' . $admin->user_level . '<br/>';
echo 'Admin User ID: ' . $admin->user_id . '<br/>';
echo 'Admin User Type: ' . $admin->user_type . '<br/>';
echo 'Admin First Name: ' . $admin->first_name . '<br/>';
echo 'Admin Last Name: ' . $admin->last_name . '<br/>';
echo 'Admin Email Address: ' . $admin->email_address . '<br/>';
