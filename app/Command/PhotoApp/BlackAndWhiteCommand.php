<?php

namespace App\Command\PhotoApp;

use App\Command\PhotoApp\ICommand;

class BlackAndWhiteCommand implements ICommand
{

    public function execute(): void
    {
        echo "Apply Black and White Filter";
    }
}