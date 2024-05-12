<?php

namespace App\Command\VideoEditor;

class History
{
    private array $commands = [];

    public function push(IUndoableCommand $command): void
    {
        $this->commands[] = $command;
    }

    public function pop(): IUndoableCommand
    {
        $lastIndex = count($this->commands) - 1;
        $lastItem = $this->commands[$lastIndex];
        unset($this->commands[$lastIndex]);
        return $lastItem;
    }

    public function size(): int
    {
        return count($this->commands);
    }
}