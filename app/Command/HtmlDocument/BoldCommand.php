<?php

namespace App\Command\HtmlDocument;

use App\Command\HtmlDocument\ICommand;
use App\Command\HtmlDocument\IUndoableCommand;

class BoldCommand implements ICommand, IUndoableCommand
{
    private string $prevContent;

    public function __construct(private HtmlDocument $htmlDocument, private History $history)
    {
    }

    public function execute(): void
    {
        $this->prevContent = $this->htmlDocument->getContent();
        $this->htmlDocument->makeBold();
        $this->history->push($this);
    }

    public function unExecute(): void
    {
        $this->htmlDocument->setContent($this->prevContent);
    }
}