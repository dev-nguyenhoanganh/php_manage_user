<?php
  use App\Routes\Router;
  use App\Routes\Request;

  require './config/config.php';
  require './framework/autoload/Autoload.php';

  $router = new Router(new Request);

  $router->get('/', function() {
    return 'hello word';
  });

  $router->post('/', function() use ($router) {
    return 'POST';
  });

  $router->get('/abc', function() {
    return 'abc';
  });