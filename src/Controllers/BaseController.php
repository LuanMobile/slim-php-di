<?php

namespace App\Controllers;

use App\Templates\Smarty;

abstract class BaseController
{
    public function render($template, $data = [])
    {
        return (new Smarty)->render($template, $data);
    }
}
