<?php

namespace App\Command\VideoEditor;

use App\Command\VideoEditor\ICommand;
use App\Command\VideoEditor\IUndoableCommand;

class AddLabelCommand implements ICommand, IUndoableCommand
{
    private string $prevLabel;
    private VideoEditor $videoEditor;
    private History $history;

    public function __construct(VideoEditor $videoEditor, History $history)
    {
        $this->videoEditor = $videoEditor;
        $this->history = $history;
    }

    public function execute(): void
    {
        $this->prevLabel = $this->videoEditor->getText();
        $this->videoEditor->addLabel();
        $this->history->push($this);
    }

    public function unExecute(): void
    {
        $this->videoEditor->setText($this->prevLabel);
    }
}