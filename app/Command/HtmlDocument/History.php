<?php

namespace App\Command\HtmlDocument;

class History
{
    private array $commands = [];

    public function push(IUndoableCommand $command): void
    {
        $commands[] = $command;
    }

    public function pop()
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