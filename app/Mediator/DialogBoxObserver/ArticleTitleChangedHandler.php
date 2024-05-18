<?php

namespace App\Mediator\DialogBoxObserver;

class ArticleTitleChangedHandler extends ArticleDialogBox implements IObserver
{
    public function handle(): void
    {
        $this->changeArticleTitle();
    }
}