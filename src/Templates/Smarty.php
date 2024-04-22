<?php

namespace App\Templates;

use Smarty\Smarty as SmartyTemplate;

class Smarty implements TemplateInterface
{
    public  function render(string $template, array $data = [])
    {
        $smarty = new SmartyTemplate();

        $smarty->setTemplateDir('../resources/views/');
        $smarty->setCompileDir('../resources/views/configs/');
        $smarty->setConfigDir('../resources/views/templates_c/');
        $smarty->setCacheDir('../resources/views/cache/');

        $smarty->assign($data);
        $smarty->display($template);
    }
}
