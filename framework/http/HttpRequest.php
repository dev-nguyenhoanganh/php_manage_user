<?php

namespace Framework\Http;

use Framework\Http\BaseInterface\IHttpRequest;

/**
 * [Description HttpRequest]
 */
class HttpRequest implements IHttpRequest {
  const GET_METHOD = "GET";
  const POST_METHOD = "POST";

  function __construct() {
    $this->loadServerParam();
  }

  /**
   * @return [type]
   */
  public function getBody() {
    $body = array();
    if ($this->requestMethod === HttpRequest::GET_METHOD) {
      foreach ($_GET as $key => $value) {
        $body[$key] = filter_input(INPUT_GET, $key, FILTER_SANITIZE_SPECIAL_CHARS);
      }
    } elseif ($this->requestMethod === HttpRequest::POST_METHOD) {
      foreach($_POST as $key => $value) {
        $body[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
      }
    }
    return $body;
  }

  // ------------------------ Private Function ------------------------

  /**
   * Load all param in `$_SEVER` global environment and convert these param
   * into camel case. 
   * 
   * Example: 
   * - GET         => get
   * - PHP_SELF    => phpSelf
   * - SERVER_ADDR => serverAddr
   * 
   * @return void
   */
  private function loadServerParam() {
    foreach($_SERVER as $key => $value) {
      $this->{ $this->toCamelCase($key) }  = $value;
    }
  }

  /**
   * 
   * 
   * @param String $string
   * 
   * @return [type]
   */
  private function toCamelCase($string) {
    $result = strtolower($string);
    preg_match_all('/_[a-z]/', $result, $matches);
    foreach($matches[0] as $match) {
      $c = str_replace('_', '', strtoupper($match));
      $result = str_replace($match, $c, $result);
    }

    return $result;
  }
}