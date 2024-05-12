<?php

namespace App\Command\VideoEditor;

class UndoCommand implements ICommand
{
    private History $history;

    public function __construct(History $history)
    {
        $this->history = $history;
    }

    public function execute(): void
    {
        if ($this->history->size() > 0)  {
            $this->history->pop()->unExecute();
        }
    }
}