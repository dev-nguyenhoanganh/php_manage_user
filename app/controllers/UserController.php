<?php

namespace App\Controllers;

use App\Service\UserService;
use App\Utils\Constant;
use Framework\Http\HttpSession;

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
      $_SESSION[Constant::SESS_ERROR_KEY] = Constant::ERR_MESS_LOGIN;
      $resp->render(Constant::DIR_VIEW_LOGIN);
    }
  }

  public function logout($req, $resp) {
    session_destroy();
    $resp->redirect(Constant::URL_HOME_PAGE);
  }

  public function showListUser($req, $resp) {
    if ($this->isAdminExist) {
      $adminId = $_SESSION[Constant::SESS_ADMIN_ID];
      $listUser = $this->userServ->getListUser($adminId);
      $resp->render(Constant::DIR_VIEW_LIST_USER, $listUser);
    } else {
      $resp->redirect(Constant::URL_LOGIN);
    }
  }

  public function showUserDetail($req, $resp) {
    if ($this->isAdminExist) {
      $userId = (int) $req->getBody()["id"];
      $adminId = HttpSession::getAttribute(Constant::SESS_ADMIN_ID);
      $user = $this->userServ->getUserById($userId, $adminId);

      $resp->render(Constant::DIR_VIEW_USER_DETAIL, $user);
    } else {
      $resp->redirect(Constant::URL_LOGIN);
    }
  }

  public function editUser($req, $resp) {
    if ($this->isAdminExist) {
      $resp->render(Constant::DIR_VIEW_EDIT_USER);
    }
  }

}
