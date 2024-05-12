<?php

namespace App\Command\HtmlDocument;

interface IUndoableCommand
{
    public function unExecute();
}