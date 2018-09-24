<?php

function loadClass($class) {
  include_once('classes/' . $class . '.class.php');
}

spl_autoload_register('loadClass');

$math = registeredUser::staticMath(8,4);

?>

<html>
<body>
<p>Before You Fill Out This Form, Let's Do Some Math!: <?php echo $math; ?></p>

  <form method="post" id="registrationForm" action="results.php">
  <div>
      <label for="firstName">First Name:  </label>
      <input type="text" id="firstName" name="firstName"/>
  </div>
<br>
<br>
  <div>
      <label for="lastName">Last Name: </label>
      <input type="text" id="lastName"  name="lastName"/>
  </div>
<br>
<br>
  <div>
      <label for="email">Email: </label>
      <input type="text" id="email"  name="email"/>
  </div>
<br>
<br>
    <input class="submit" id="submit" type="submit" value="Register" />
  </form>

</body>
</html>
