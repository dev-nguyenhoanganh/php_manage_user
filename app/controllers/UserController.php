<?php

namespace App\Controllers;

use App\Service\UserService;
use App\Utils\Constant;
use Framework\Http\HttpRespone;

class UserController {
  private $userServ;
  private $isAdminExist;

  public function __construct() {
    $this->userServ = new UserService();
    $this->isAdminExist = array_key_exists('adminId', $_SESSION);
  }

  public function renderLoginForm($req, $resp) {
    if ($this->isAdminExist) {
      $resp->redirect(Constant::URL_LIST_USER);
    } else {
      $resp->render(Constant::DIR_VIEW_LOGIN);
    }
  }

  public function login($req, $resp) {
    $param = $req->getBody();
    $isValidUser = $this->userServ->checkLogin($param["loginName"], $param["password"]);
    if ($isValidUser) {
      $resp->redirect(Constant::URL_LIST_USER);
    } else {
      $resp->render(Constant::DIR_VIEW_LOGIN, [ "errorMess"=>"Login name or password in-correct!" ]);
    }
  }

  public function logout($req, $resp) {
    session_destroy();
    $resp->redirect(Constant::URL_HOME_PAGE);
  }

  public function showListUser($req, $resp) {
    if ($this->isAdminExist) {
      $adminId = $_SESSION['adminId'];
      $listUser = $this->userServ->getListUser($adminId);
      $resp->render(Constant::DIR_VIEW_LIST_USER, $listUser);
    } else {
      $resp->redirect(Constant::URL_LOGIN);
    }
  }


}
