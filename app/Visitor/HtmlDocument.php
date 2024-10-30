<?php

namespace App\Visitor;

class HtmlDocument
{
    private array $nodes = [];

    public function add(IHtmlNode $htmlNode): void
    {
        $this->nodes[] = $htmlNode;
    }

    public function highlight(): void
    {
        foreach ($this->nodes as $node){
            $node->highlight();
        }
    }
}