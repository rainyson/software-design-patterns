<?php

namespace App\State\Draw;

use App\State\Draw\ToolType;

class Canvas
{
    private $currentTool;

    public function mouseDown()
    {
        if ($this->currentTool == ToolType::SELECTION){
            echo 'SELECTION icon';
        }
        else if ($this->currentTool == ToolType::BRUSH) {
            echo 'BRUSH icon';
        }
        else if ($this->currentTool == ToolType::ERASER) {
            echo 'ERASER icon';
        }
    }

    public function mouseUp()
    {
        if ($this->currentTool == ToolType::SELECTION){
            echo 'Draw Dashed Rectangle';
        }
        else if ($this->currentTool == ToolType::BRUSH) {
            echo 'Draw a line';
        }
        else if ($this->currentTool == ToolType::ERASER) {
            echo 'Erase something';
        }
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
    public function setCurrentTool($currentTool)
    {
        $this->currentTool = $currentTool;
    }
}