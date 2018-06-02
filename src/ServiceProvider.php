<?php

namespace Sven\LaravelIde;

use Illuminate\Support\ServiceProvider as LaravelProvider;
use Sven\LaravelIde\Commands\IdeCommand;

class ServiceProvider extends LaravelProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/ide.php', 'ide');

        $this->commands(IdeCommand::class);
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/ide.php' => config_path('ide.php'),
        ], 'config');
    }
}
