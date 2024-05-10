<?php

namespace App\TemplateMethod\Banking;

class GenerateReportTask extends Task
{
    protected function doExecute(): string
    {
        return 'Generate Report';
    }
}