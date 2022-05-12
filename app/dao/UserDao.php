<?php

namespace App\Dao;

use App\Utils\Constant;

class UserDao extends BaseDao {

  public function __construct() {
    parent::__construct();
  }

  public function getAdminByLogin($username) {
    $user = null;
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
      $query = <<<QUERY
        SELECT 
          `user_id`, `username`, `birthday`, `avatar`
        FROM 
          `tbl_user`
        WHERE 
          `admin_id` = :adminId AND `rule` = :rule;
      QUERY;
      $param = array( 
        "adminId" => $adminId,
        "rule"    => Constant::RULE_USER
      );
      $statement = $conn->prepare($query);
      $statement->execute($param);
      $listUser  = $statement->fetchAll(\PDO::FETCH_ASSOC);

    } catch (\PDOException $e) {
      echo $e->getMessage();
    } finally {
      $this->closeConnection();
    }

    return $listUser;
  }

  public function getUserById($userId, $adminId) {
    $user = null;
    try {
      $conn = $this->openConnection();
      $query = <<<QUERY
        SELECT 
          `user_id`, `username`, `birthday`, `avatar`
        FROM 
          `tbl_user`
        WHERE 
          `rule` = :rule AND `user_id` = :userId AND `admin_id` = :adminId;
      QUERY;

      $param = array(
        "rule"    => Constant::RULE_USER,
        "userId"  => $userId,
        "adminId" => $adminId
      );

      $statement = $conn->prepare($query);
      $statement->execute($param);
      $user = $statement->fetchAll(\PDO::FETCH_ASSOC);
    } catch (\PDOException $e) {
      echo $e->getMessage();
    } finally {
      $this->closeConnection();
    }
    return $user;
  }
}

?>