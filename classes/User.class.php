<?php

abstract class User {

  protected $user_id;
  protected $user_type;
  protected $first_name;
  protected $last_name;
  protected $email_address;
  protected $user_level;

  public function __construct($user_level) {
    $this->user_level = $user_level;
    return true;
  }

  public function __set($user_level, $user_id) {
  }

  public function __get($user_level){
    return $this->$user_level;
  }

  public function __destruct() {
  }
}
?>
