<?php

namespace App\Memento\Document;

class DocumentState
{
    private string $content, $fontName;
    private int $fontSize;

    public function __construct(string $content, string $fontName, int $fontSize)
    {
        $this->content = $content;
        $this->fontName = $fontName;
        $this->fontSize = $fontSize;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function getFontName(): string
    {
        return $this->fontName;
    }

    public function getFontSize(): int
    {
        return $this->fontSize;
    }
}