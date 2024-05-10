<?php

namespace App\Memento\Document;

class Document
{
    private string $content, $fontName;
    private int $fontSize;

    public function createState(): DocumentState
    {
        return new DocumentState($this->content, $this->fontName, $this->fontSize);
    }

    public function restore(DocumentState $state): void
    {
        $this->setContent($state->getContent());
        $this->setFontName($state->getFontName());
        $this->setFontSize($state->getFontSize());
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

    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    public function setFontName(string $fontName): void
    {
        $this->fontName = $fontName;
    }

    public function setFontSize(string $fontSize): void
    {
        $this->fontSize = $fontSize;
    }

}