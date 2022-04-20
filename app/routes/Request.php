<?php
  namespace App\Routes;

  class Request {
    const GET_METHOD = "GET";
    const POST_METHOD = "POST";

    function __construct() {
      $this->loadServerParam();
    }

    private function loadServerParam() {
      foreach($_SERVER as $key => $value) {
        $this->{ $this->toCamelCase($key) }  = $value;;
      }
    }

    private function toCamelCase($string) {
      $result = strtolower($string);
      preg_match_all('/_[a-z]/', $result, $matches);
      foreach($matches[0] as $match) {
        $c = str_replace('_', '', strtoupper($match));
        $result = str_replace($match, $c, $result);
      }

      return $result;
    }

    public function getBody() {
      if ($this->requestMethod === Request::GET_METHOD) {
        return;
      }

      if ($this->requestMethod === Request::POST_METHOD) {
        $body = array();
        foreach($_POST as $key => $value) {
          $body[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
        }

        return $body;
      }
    }
  }

