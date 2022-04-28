<?php

namespace App\Dao;

use App\Utils\Constant;

class UserDao extends \BaseDao {

  public function getAdminByLogin($username) {
    $conn = $this->openConnection();
    $query = 'SELECT `username`, `password`, `salt` WHERE `login_name` = ? and rule = ?;';

    $statement = $conn->prepare($query);
    $statement->execute($username, Constant::RULE_ADMIN);
    $user = $statement->fetchAll(\PDO::FETCH_ASSOC);
    if (!$user) {
      return null;
    }
    return $user;
  }
}

?>