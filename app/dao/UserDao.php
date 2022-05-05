<?php

namespace App\Dao;

use App\Utils\Constant;

class UserDao extends BaseDao {

  public function __construct() {
    parent::__construct();
  }

  public function getAdminByLogin($username) {
    try {
      $conn = $this->openConnection();
      $query = <<<QUERY
        SELECT 
          `user_id`, `username`, `password`, `salt` 
        FROM 
          `tbl_user` 
        WHERE 
          `login_name` = :login_name AND rule = :rule;
      QUERY;

      $statement = $conn->prepare($query);
      $param = array (
        "login_name" => $username,
        "rule"       => Constant::RULE_ADMIN
      );

      $statement->execute($param);
      $user = $statement->fetchAll(\PDO::FETCH_ASSOC);
      $user = (!$user) ? null : $user;
    } catch (\PDOException $e) {
      echo $e->getMessage();
    } finally {
      $this->closeConnection();
    }
    return $user;
  }

  public function getListUser($adminId) {
    $listUser = null;
    try {
      $conn = $this->openConnection();
      $query = <<< query
        SELECT `login_name`, `username`, `birthday`
        FROM `tbl_user`
        WHERE `admin_id` = :adminId;
      query;
      $param = array( "adminId" => $adminId );
      $statement = $conn->prepare($query);
      $listUser  = $statement->fetchAll(\PDO::FETCH_ASSOC);

    } catch (\PDOException $e) {
      echo $e->getMessage();
    }

    return $listUser;
  }
}

?>