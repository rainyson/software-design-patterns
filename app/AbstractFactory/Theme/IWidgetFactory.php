<?php

namespace App\AbstractFactory\Theme;

interface IWidgetFactory
{
    public function createButton(): IButton;
    public function createTextBox(): ITextBox;
}