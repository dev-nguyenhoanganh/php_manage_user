<?php
class User {
  private $userId;
  private $username;
  private $age;
  private $birthday;
  private $avatar;
  private $rule;
  private $adminId;
  private $salt;

  public function getUserId() {
    return $this->userId;
  }

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

  public function getRule() {
    return $this->rule;
  }

  public function getAdminId() {
    return $this->adminId;
  }

  public function getSalt() {
    return $this->salt;
  }

  public function setUserId(int $userId) {
    $this->userId = $userId;
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

  public function setRule(int $rule) {
    $this->rule = $rule;
  }

  public function setAdminId (int $adminId) {
    $this->adminId = $adminId;
  }

  public function setSalt(string $salt) {
    $this->salt = $salt;
  }

}

?>