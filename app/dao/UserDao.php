<?php

namespace App\Dao;

use App\Utils\Constant;

class UserDao extends BaseDao {

  public function __construct() {
    parent::__construct();
  }

  public function getAdminByLogin($username) {
    $conn = $this->openConnection();
    $query = 'SELECT `username`, `password`, `salt` FROM `tbl_user` WHERE `login_name` = :login_name AND rule = :rule;';

    $statement = $conn->prepare($query);
    
    $statement->execute(array(
      "login_name" => $username,
      "rule"       => Constant::RULE_ADMIN
    ));
    $user = $statement->fetchAll(\PDO::FETCH_ASSOC);
    if (!$user) {
      return null;
    }
    return $user;
  }
}

?>