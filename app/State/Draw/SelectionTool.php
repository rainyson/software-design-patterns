<?php

namespace App\State\Draw;

use App\State\Draw\ITool;

class SelectionTool implements ITool
{

    public function mouseDown()
    {
        echo "Selection Icon";
    }

    public function mouseUp()
    {
        echo "Draw a dashed rectangle";
    }
}