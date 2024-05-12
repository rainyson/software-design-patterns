<?php

namespace App\Command\VideoEditor;

class VideoEditor
{
    private string $contrast, $text;

    public function addLabel()
    {
        
    }

    public function changeContrast()
    {
        
    }

    public function getContrast(): string
    {
        return $this->contrast;
    }

    public function setContrast(string $contrast): void
    {
        $this->contrast = $contrast;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function setText(string $text): void
    {
        $this->text = $text;
    }
}