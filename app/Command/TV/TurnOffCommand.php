<?php

namespace App\Command\TV;

class TurnOffCommand implements ICommand
{
    private $device;

    public function __construct(IMultimediaDevice $device)
    {
        $this->device = $device;
    }

    public function execute()
    {
        $this->device->turnOff();
    }
}