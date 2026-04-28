<?php

namespace EvolutionCMS\DefaultTailwind;

use EvolutionCMS\ServiceProvider;

class DefaultTailwindServiceProvider extends ServiceProvider
{
    protected $namespace = 'default-tailwind';

    public function boot(): void
    {
        $this->loadViewsFrom(dirname(__DIR__) . '/views', 'default-tailwind');
    }

    public function register(): void
    {
    }
}
