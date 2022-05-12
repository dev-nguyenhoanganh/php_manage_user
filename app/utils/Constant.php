<?php

namespace App\Utils;

use com_exception;

class Constant {
  public const RULE_ADMIN = 0;
  public const RULE_USER  = 1;
  
  public const URL_HOME_PAGE = '/manage_user';
  public const URL_LIST_USER = '/manage_user/list-user';
  public const URL_LOGIN     = '/manage_user/login';

  public const DIR_VIEW_LOGIN     = 'user\login.phtml';
  public const DIR_VIEW_LIST_USER = 'user\listUser.phtml';
  public const DIR_VIEW_HOME_PAGE = 'index.phtml';
  public const DIR_VIEW_USER_DETAIL = 'user\detail.phtml';
  public const DIR_VIEW_EDIT_USER   = 'user\edit.phtml';
  
  public const SESS_ADMIN_ID    = "adminId";
  public const SESS_ERROR_KEY   = "error";
  public const SESS_SUCCESS_KEY = "success";


  public const ERR_MESS_LOGIN = "Login name or password in-correct!";
  // public const SESS_LIST_USER = "listUser";
}
