<?php

use Framework\Http\HttpRequest;
use App\Controllers\UserController;
use App\Routes\Router;
use Framework\Http\HttpRespone;

$req = new HttpRequest();
$resp = new HttpRespone();
$router = new Router($req);

$userController = new UserController();

$router->get('/manage_user/login', function() use (&$req, &$resp, &$userController) {
  $userController->renderLoginForm($req, $resp);
});

$router->post('/manage_user/login', function() use (&$req, &$resp, &$userController) {
  $userController->login($req, $resp);
});

$router->get('/manage_user', function() use(&$resp) {
  $resp->render('index.php');
});