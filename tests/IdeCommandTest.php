<?php

namespace Sven\LaravelIde\Tests;

use Illuminate\Support\Facades\Artisan;
use Mockery as m;
use Sven\LaravelIde\Commands\IdeCommand;

class IdeCommandTest extends TestCase
{
    /** @test */
    function it_generates_ide_helper_files()
    {
        $command = m::mock(IdeCommand::class)
            ->shouldReceive('callSilent')
            ->with([
                ['--nowrite' => true],
            ]);

        $this->app->bind(IdeCommand::class, $command);

        Artisan::call('ide');
    }
}
