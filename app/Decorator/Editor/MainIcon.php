<?php

namespace App\Decorator\Editor;

class MainIcon implements IArtefact
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

    private function getPlayIcon(string $data): string
    {
        return "{$data} [Main]";
    }
}