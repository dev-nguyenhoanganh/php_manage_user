<?php

namespace App\Dao;

use App\Utils\Constant;

class BaseDao {
  private $conn;

  public function __construct() {

  }

  public function openConnection() {
    $dbHost = getenv('DB_HOST');
    $dbName = getenv('DB_NAME');
    $dbUser = getenv('DB_USER');
    $dbPass = getenv('DB_PASS');

    try {
      $option = [
        \PDO::ATTR_EMULATE_PREPARES   => false,                   // turn off emulation mode for "real" prepared statements
        \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION, // turn on errors in the form of exceptions
        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC        // make the default fetch be an associative array
      ];
      $this->conn = new \PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass, $option);
    } catch(\PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }

    return $this->conn;
  }

  public function closeConnection() {
    $this->conn = null;
  }
}