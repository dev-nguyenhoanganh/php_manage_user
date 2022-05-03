<?php

use App\Routes\Router;

  session_start();

  require './framework/autoload/Autoload.php';
  require_once './app/routes/Api.php';
  $router->resolve();

  
