<?php

namespace Framework\Http;

class HttpSession {
  public static function setAttribute(string $param, $value = null) { 
    $_SESSION[$param] = $value;
  }

  public static function getAttribute(string $param) {
    return $_SESSION[$param];
  }

  public static function removeAttribute(string $param) {
    unset($_SESSION[$param]);
  }

  public static function checkExistParam(string $param) {
    return array_key_exists($param, $_SESSION);
  }
}