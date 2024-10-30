<?php

namespace App\Command\VideoEditor;

interface IUndoableCommand
{
    public function unExecute();
}