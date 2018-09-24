
<?php
$reg_user = new RegisteredUser('Regular User', user1);
$admin_user = new Admin('Administrator', user2);

$admin_user->first_name = 'Bob';
$admin_user->last_name = 'Smith';
$admin_user->email_address = 'bobsmith@gmail.com';

$reg_user->first_name = 'Victor';
$reg_user->last_name = 'Oladipo';
$reg_user->email_address = 'vicoladipo@pacers.com';

echo 'User Level: ' . $reg_user->user_level;
echo 'Registered User ID: ' . $reg_user->user_id;
echo 'Registered User Type: ' . $reg_user->user_type;
echo 'Registered First Name: ' . $reg_user->first_name;
echo 'Registered Last Name: ' . $reg_user->last_name;
echo 'Registered Email: ' . $reg_user->email_address;
?>
<hr>
<?php
echo 'User Level: ' . $admin_user->user_level;
echo 'Admin User ID: ' . $admin_user->user_id;
echo 'Admin User Type: ' . $admin_user->user_type;
echo 'Admin First Name: ' . $admin_user->first_name;
echo 'Admin Last Name: ' . $admin_user->last_name;
echo 'Admin Email: ' . $admin_user->email_address;
?>
