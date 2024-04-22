<?php

namespace App\Controllers;

use App\Database\Models\User;
use App\Interfaces\UserRepositoryInterface;
use App\library\Login;
use App\Templates\TemplateInterface;
use Doctrine\DBAL\Connection;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class HomeController
{
    public function __construct(
        private ContainerInterface $container,
        private TemplateInterface $template
    ) {
    }

    public function index(RequestInterface $request, ResponseInterface $response)
    {
        $users = $this->container->get(User::class)->users();

        $this->template->render('home', ['users' => $users]);

        return $response;
    }
}
