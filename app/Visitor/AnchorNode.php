<?php

namespace App\Visitor;

class AnchorNode implements IHtmlNode
{

    public function highlight(): void
    {
        echo 'Highlight-anchor';
    }
}