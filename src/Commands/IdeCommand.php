<?php

namespace Sven\LaravelIde\Commands;

use Illuminate\Config\Repository as Config;
use Illuminate\Console\Command;

class IdeCommand extends Command
{
    /**
     * @var string
     */
    protected $signature = 'ide';

    /**
     * @var string
     */
    protected $description = 'Generate PhpStorm IDE helper files.';

    /**
     * @var \Illuminate\Config\Repository
     */
    protected $config;

    /**
     * @param \Illuminate\Config\Repository $config
     */
    public function __construct(Config $config)
    {
        $this->config = $config;

        parent::__construct();
    }

    public function handle(): void
    {
        $this->callSilent('ide-helper:generate');
        $this->callSilent('ide-helper:models', $this->getWriteConfiguration());
        $this->callSilent('ide-helper:meta');

        $this->info('Successfully generated PhpStorm meta files!');
    }

    protected function getWriteConfiguration(): array
    {
        if ($this->config->get('ide.write_to_model_files')) {
            return ['--write' => true];
        }

        return ['--nowrite' => true];
    }
}
