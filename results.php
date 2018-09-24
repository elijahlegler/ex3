<html>
<body>

<?php

function loadClass($class) {
  include_once('classes/' . $class . '.class.php');
}

spl_autoload_register('loadClass');

$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$email = $_POST["email"];

$registeredUser = new registeredUser('New User', $firstName);

?>

<?php echo "The registered user's first name is: " . $firstName;?>
<br>
<?php echo "The registered user's last name is: " . $lastName;?>
<br>
<?php echo "The registered user's email address is: " . $email;?>
<br>
<hr>

<?php
if(is_object($registeredUser)) {
  echo "Processing Complete";
}
else {
  echo "Processing Not Complete";
}
?>

</body>
</html>
