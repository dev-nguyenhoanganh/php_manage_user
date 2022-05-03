<?php

namespace App\Controllers;

use App\Service\UserService;

class UserController {
  private $userServ;

  public function __construct() {
    $this->userServ = new UserService();
  }

  public function renderLoginForm($req, $resp) {
    $resp->render('user\login.php');
  }

  public function login($req, $resp) {
    $param = $req->getBody();
    $isValidUser = $this->userServ->checkLogin($param["loginName"], $param["password"]);
    if ($isValidUser) {
      $resp->redirect('/manage_user/listuser');
    } else {
      $resp->render('user\login.php', ["errorMess"=> "validate fail"]);
    }
  }

  public function showListUser($req, $resp) {
    $resp->render('user\listUser.php');
  }

}
