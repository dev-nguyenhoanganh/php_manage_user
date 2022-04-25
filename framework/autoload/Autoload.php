<?php

require_once './framework/autoload/Psr4AutoloaderClass.php';

use Framework\Autoload\Psr4AutoloaderClass;
use Framework\LoadEnv\DotEnv;

$autoload = new Psr4AutoloaderClass();
$autoload->register();
$autoload->addNamespace('App\Routes', './app/routes');
$autoload->addNamespace('Framework\Autoload', './framework/autoload');
$autoload->addNamespace('Framework\LoadEnv', './framework/loadEnv');
$autoload->addNamespace('Framework\Http', './framework/http');
$autoload->addNamespace('Framework\Http\BaseInterface', './framework/http/baseInterface');

(new DotEnv(dirname(dirname(__DIR__)) . '\.env'))->load();