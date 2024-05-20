<?php

namespace App\Decorator\Editor;

class ErrorIcon implements IArtefact
{
    private IArtefact $artefact;

    public function __construct(IArtefact $artefact)
    {
        $this->artefact = $artefact;
    }

    public function render(string $data): void
    {
        $this->artefact->render($data);
    }

    private function getErrorLine(string $data): string
    {
        return "{$data} [Error]";
    }
}