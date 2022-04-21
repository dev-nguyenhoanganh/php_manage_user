<?php

use Framework\Autoload\Psr4AutoloaderClass;
use Framework\Autoload\DotEnv;

$autoload = new Psr4AutoloaderClass();
$autoload->register();
$autoload->addNamespace('App\Routes', './app/routes');
$autoload->addNamespace('Framework\Autoload', './framework/autoload');

(new DotEnv(__DIR__ . '/.env'))->load();