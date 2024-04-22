<?php

use App\Controllers\HomeController;
use App\Controllers\LoginController;
use App\Controllers\UserController;
use Slim\App;

return function (App $app) {
    $app->get('/', [HomeController::class, 'index']);
    $app->get('/users', [UserController::class, 'index']);
    $app->get('/login', [LoginController::class, 'index']);
    $app->get('/register', [UserController::class, 'create']);
    $app->post('/register', [UserController::class, 'store']);
    $app->post('/login', [LoginController::class, 'store']);
    $app->post('/logout', [LoginController::class, 'destroy']);

    $app->run();
};
