<?php

namespace App\Command\PhotoApp;

class CompositeCommand implements ICommand
{
    private array $commands = [];

    public function add(ICommand $command): void
    {
        $this->commands[] = $command;
    }

    public function execute(): void
    {
        foreach ($this->commands as $command) {
            $command->execute();
        }
    }
}