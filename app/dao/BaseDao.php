<?php
namespace App\Dao;

interface BaseDao {
  public function openConnection();
  public function closeConnection();
  public function getConnection();
  public function setConnection();
  public function handleTransaction();
}