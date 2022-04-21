<?php
class User {
  private $username;
  private $age;
  private $birthday;
  private $avatar;

  public function getUsername() {
    return $this->username;
  }

  public function getAge() {
    return $this->age;
  }

  public function getBirthday() {
    return $this->birthday;
  }

  public function getAvatar() {
    return $this->avatar;
  }

  public function setUsername(string $username) {
    $this->username = $username;
  }

  public function setAge(string $age) {
    $this->age = $age;
  }

  public function setBirthday(string $birthday) {
    $this->birthday = $birthday;
  }

  public function setAvatar(string $avatar) {
    $this->avatar = $avatar;
  }
}

?>