<?php

namespace App\TemplateMethod\Window;

class BeforeCloseTask extends Window
{

    public function doTask(): string
    {
        return "After tasks will be implemented";
    }
}