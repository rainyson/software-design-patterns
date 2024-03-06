<?php

namespace App\State\Draw;

use App\State\Draw\ITool;

class BrushTool implements ITool
{

    public function mouseDown()
    {
        echo "Brush Icon";
    }

    public function mouseUp()
    {
        echo "Draw a dashed line";
    }
}