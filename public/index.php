<?php

session_start();

use DI\Container;
use Slim\Factory\AppFactory;
use DI\ContainerBuilder;

require_once '../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable('../');
$dotenv->load();

$container = new ContainerBuilder();

$containers = require __DIR__ . '/../src/config/containers.php';
$container->addDefinitions($containers);

$container = $container->build();

AppFactory::setContainer($container);
$app = AppFactory::create();

$routes = require __DIR__ . '/../src/routes/web.php';
$routes($app);
