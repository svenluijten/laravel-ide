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

    public function __construct(Config $config)
    {
        $this->config = $config;

        parent::__construct();
    }

    public function handle(): void
    {
        if (! \in_array(true, $this->config->get('ide.commands'), true)) {
            $this->error('None of the commands to run are enabled in the config.');

            exit(1);
        }

        $this->callIf('ide.commands.generate', 'ide-helper:generate');
        $this->callIf('ide.commands.models', 'ide-helper:models', $this->getWriteConfiguration());
        $this->callIf('ide.commands.meta', 'ide-helper:meta');

        $this->info('Successfully generated PhpStorm meta files!');
    }

    protected function callIf($config, $command, array $parameters = []): void
    {
        if ($this->config->get($config)) {
            $this->callSilent($command, $parameters);
        }
    }

    protected function getWriteConfiguration(): array
    {
        if ($this->config->get('ide.write_to_model_files')) {
            return ['--write' => true];
        }

        return ['--nowrite' => true];
    }
}
