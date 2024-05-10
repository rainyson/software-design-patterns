<?php

namespace App\TemplateMethod\Banking;

class TransferMoneyTask extends Task
{
    protected function doExecute(): string
    {
        return 'Transfer Money';
    }
}