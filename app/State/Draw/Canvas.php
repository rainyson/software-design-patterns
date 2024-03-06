<?php

namespace App\State\Draw;

use App\State\Draw\ToolType;

class Canvas
{
    private ITool $currentTool;

    public function mouseDown()
    {
        $this->currentTool->mouseDown();
    }

    public function mouseUp()
    {
        $this->currentTool->mouseUp();
    }

    /**
     * @return mixed
     */
    public function getCurrentTool()
    {
        return $this->currentTool;
    }

    /**
     * @param mixed $currentTool
     */
    public function setCurrentTool(ITool $currentTool)
    {
        $this->currentTool = $currentTool;
    }
}