<?php
  require './framework/autoload/Psr4AutoloaderClass.php';
  
  $autoload = new Framework\Autoload\Psr4AutoloaderClass();
  $autoload->register();
  $autoload->addNamespace('App\Routes', './app/routes');
  
  use App\Routes\Router;
  use App\Routes\Request;
  $router = new Router(new Request);

  $router->get('/', function() {
    return 'hello word';
  });

  $router->get('/abc', function() {
    return 'abc';
  });