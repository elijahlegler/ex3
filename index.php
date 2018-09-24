<?php
function loadClass($class) {
  include_once('classes/'.$class.'.class.php');
}

spl_autoload_register('loadClass');

$math = registeredUser::staticMath(4,5);

?>
<html>
<head>
  <meta charset="UTF-8">
  <title>Excerise 3</title>
</head>
<body>
<p>Before You Fill Out This Form, Let's Do Some Math!: <?php echo $math; ?></p>

  <form method="post" id="registerForm" action="results.php">
  <div>
      <label for="name">First Name:  </label>
      <input type="text" id="firstName" name="firstName" maxlength="20"  />
  </div>
<br>
<br>
  <div>
      <label for="name">Last Name: </label>
      <input type="text" id="lastName"  name="lastName" maxlength="20"  />
  </div>
<br>
<br>
  <div>
      <label for="name">Email: </label>
      <input type="text" id="email"  name="email" maxlength="20"  />
  </div>
<br>
<br>
    <input class="submit" id="submit" type="submit" value="Register" />
  </form>

</body>
</html>
