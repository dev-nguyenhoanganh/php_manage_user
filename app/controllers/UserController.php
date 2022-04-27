<?php

namespace App\Controllers;

class UserController {
  public function renderLoginForm($req, $resp) {
    $resp->render('user\login.php');
  }

  public function login($req, $resp) {
    $req->getBody();
  }

}