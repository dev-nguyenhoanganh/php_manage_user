<?php

namespace App\Controllers;

use App\Service\UserService;

class UserController {
  public function renderLoginForm($req, $resp) {
    $resp->render('user\login.php');
  }

  public function login($req, $resp) {
    $param = $req->getBody();
    $userServ = new UserService();

    $isValidUser = $userServ->checkLogin($param["loginName"], $param["password"]);
    if ($isValidUser) {
      $resp->redirect('/manage_user/list-user');
    }
  }

  public function showListUser($req, $resp) {
    $resp->render('user\listUser.php');
  }

}