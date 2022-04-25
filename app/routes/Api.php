<?php

use Framework\Http\HttpRequest;
use App\Controllers\UserController;
use App\Routes\Router;

$router = new Router(new HttpRequest);
$userController = new UserController();

$router->get('/php_basic/', function() {
  
  return 'hello word';
});

$router->post('/', function() use ($router) {
  return 'POST';
});

$router->get('/abc', function() {
  return 'abc';
});