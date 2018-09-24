<?php
class registeredUser extends user {

  public function __construct($newUser, $regular) {
    parent::__construct($newUser);
    $this-> newUser = "New User";
    $this-> regular = $_POST["firstName"];
    $thisFirstname = $_POST["firstName"];
    $thisLastname = $_POST["lastName"];
    $thisEmail = $_POST["email"];
    return true;
  }

  public function __set($name, $value) {
    $this-> $name = $value;
    return;
  }

  public function __get($name){
    return $this->$name;
  }

  public function __destruct() {

  }

  static public function staticMath($num1, $num2) {
    return (($num1 + $num2) * $num1);
  }
}
?>
