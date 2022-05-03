<?php

use App\Routes\Router;
use Framework\Http\HttpRequest;
use Framework\Http\HttpRespone;
use App\Controllers\UserController;

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

$router->get('/manage_user/listuser', function() use (&$req, &$resp, &$userController) {
  $userController->showListUser($req, $resp);
});

$router->get('/manage_user', function() use(&$resp) {
  $resp->render('index.php');
});