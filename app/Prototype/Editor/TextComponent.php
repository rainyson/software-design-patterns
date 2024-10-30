<?php

namespace App\Prototype\Editor;

use App\Prototype\Editor\IComponent;

class TextComponent implements IComponent
{
    private string $content;

    /**
     * @param string $content
     */
    public function __construct(string $content)
    {
        $this->content = $content;
    }

    public function clone(): IComponent
    {
       return new TextComponent($this->content);
    }

    public function getContent(): string
    {
        return $this->content;
    }
}