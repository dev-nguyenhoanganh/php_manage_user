<?php
  if(session_id() == '' || !isset($_SESSION) || session_status() === PHP_SESSION_NONE) {
    session_start();
  }
  require_once './framework/autoload/Autoload.php';
  require_once './app/routes/Api.php';
  $router->resolve();
