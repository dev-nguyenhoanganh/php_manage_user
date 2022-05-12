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
      $_SESSION['adminId'] = $admin[0]['user_id'];
      $_SESSION['username'] = $admin[0]['username'];

      return $admin[0]['password'] === $password;
    }
  }

  public function getListUser($adminId) {
    return $this->userDao->getListUser($adminId);
  }

  public function getUserById($userId, $adminId) {
    return $this->userDao->getUserById($userId, $adminId)[0];
  }
}