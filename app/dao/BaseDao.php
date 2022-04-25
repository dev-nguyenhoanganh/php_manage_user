<?php
use App\Utils\Constant;

class BaseDao {
  private $conn;

  public function __construct() {

  }

  public function openConnection() {
    $this->conn = new mysqli(getenv('DB_HOST'), getenv('DB_USER'), getenv('DB_PASS'));
    if ($this->conn->connect_error) {
      die('Connection failed: ' . $this->conn->connect_error);
    }

  }
}