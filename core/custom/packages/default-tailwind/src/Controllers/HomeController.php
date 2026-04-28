<?php

namespace EvolutionCMS\DefaultTailwind\Controllers;

class HomeController extends BaseController
{
    public function render(): void
    {
        $this->data['preset'] = [
            'name' => 'default-tailwind',
            'theme' => '/themes/default-tailwind',
        ];
    }
}
