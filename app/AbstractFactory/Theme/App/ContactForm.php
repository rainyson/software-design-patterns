<?php

namespace App\AbstractFactory\Theme\App;

use App\AbstractFactory\Theme\IWidgetFactory;

class ContactForm
{
    public function render(IWidgetFactory $widgetFactory): void
    {
        $widgetFactory->createButton()->render();
        $widgetFactory->createTextBox()->render();
    }
}