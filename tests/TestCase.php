<?php

namespace Sven\LaravelIde\Tests;

use Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider;
use GrahamCampbell\TestBench\AbstractPackageTestCase;
use Sven\LaravelIde\ServiceProvider;

abstract class TestCase extends AbstractPackageTestCase
{
    /**
     * @param \Illuminate\Contracts\Foundation\Application $app
     *
     * @return string
     */
    protected function getServiceProviderClass($app)
    {
        return ServiceProvider::class;
    }

    /**
     * @param \Illuminate\Contracts\Foundation\Application $app
     *
     * @return string[]
     */
    protected function getRequiredServiceProviders($app)
    {
        return [
            ServiceProvider::class,
            IdeHelperServiceProvider::class,
        ];
    }

    public function setUp()
    {
        parent::setUp();
    }

    public function tearDown()
    {
        parent::tearDown();
    }
}
