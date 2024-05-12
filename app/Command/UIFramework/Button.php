<?php

namespace App\Command\UIFramework;

class Button
{
    private string $label;
    private ICommand $command;

    public function __construct(ICommand $command)
    {
        $this->command = $command;
    }
    public function click()
    {
        return $this->command->execute();
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function setLabel(string $label): void
    {
        $this->label = $label;
    }
}