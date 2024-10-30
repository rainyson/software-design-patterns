<?php

namespace App\Command\HtmlDocument;

class UndoCommand implements ICommand
{
    public function __construct(private History $history)
    {
    }

    public function execute(): void
    {
        if ($this->history->size() > 0) {
            $command = $this->history->pop();
            $command->unExecute();
        }
    }
}