<?php

namespace App\Templates;

interface TemplateInterface
{
    public function render(string $template, array $data = []);
}
