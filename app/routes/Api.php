<?php

use App\Routes\Router;
use App\Utils\Constant;
use App\Controllers\UserController;
use Framework\Http\HttpRequest;
use Framework\Http\HttpRespone;

$req     = new HttpRequest();
$resp    = new HttpRespone();
$router  = new Router($req);

$id = (array_key_exists('id', $_GET)) ? $_GET['id'] : null;

$userController = new UserController();

$router->get('/manage_user/login', function() use (&$req, &$resp, &$userController) {
  $userController->renderLoginForm($req, $resp);
});

$router->post('/manage_user/login', function() use (&$req, &$resp, &$userController) {
  $userController->login($req, $resp);
});

$router->get('/manage_user/logout', function() use (&$req, &$resp, &$userController) {
  $userController->logout($req, $resp);
});

$router->get('/manage_user/list-user', function() use (&$req, &$resp, &$userController) {
  $userController->showListUser($req, $resp);
});

$router->get("/manage_user/detail", function() use (&$req, &$resp, &$userController) {
  $userController->showUserDetail($req, $resp);
});

$router->get('/manage_user', function() use(&$resp) {
  $resp->render(Constant::DIR_VIEW_HOME_PAGE);
});

