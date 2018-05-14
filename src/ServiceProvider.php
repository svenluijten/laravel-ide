<?php

namespace Sven\LaravelIde;

use Illuminate\Support\ServiceProvider as LaravelProvider;
use Sven\LaravelIde\Commands\IdeCommand;

class ServiceProvider extends LaravelProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/ide.php', 'ide');

        $this->commands(IdeCommand::class);
    }
}
