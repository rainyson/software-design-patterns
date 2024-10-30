<?php

namespace App\TemplateMethod\Banking;

abstract class Task
{
    private AuditTrail $auditTrail;

    public function __construct(AuditTrail $auditTrail = null)
    {
        $this->auditTrail = $auditTrail ?? new AuditTrail();
    }

    public function execute(): void
    {
        $this->auditTrail->record();
        $this->doExecute();
    }

    protected abstract function doExecute(): string;
}