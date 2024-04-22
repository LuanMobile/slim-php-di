<?php

use App\Database\Connection;
use App\Templates\Plates;
use App\Templates\Smarty;
use App\Templates\TemplateInterface;
use Doctrine\DBAL\Connection as ConnectionDBAL;

return [
    ConnectionDBAL::class => Connection::get(),
    TemplateInterface::class => \DI\autowire(Plates::class),
];
