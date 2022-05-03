<?php

namespace App\Service;

use App\Dao\UserDao;

class UserService {
  private $userDao;

  public function __construct() {
    $this->userDao = new UserDao();
  }

  public function checkLogin($loginName, $password) { 
    $admin = $this->userDao->getAdminByLogin($loginName);

    if (is_null($admin)) {
      return false;
    } else {
      return $admin[0]['password'] == $password;
    }
  }
}