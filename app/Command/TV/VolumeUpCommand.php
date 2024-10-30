<?php

namespace App\Command\TV;

use App\Command\TV\ICommand;

class VolumeUpCommand implements ICommand
{

    private $device;

    public function __construct(IMultimediaDevice $device)
    {
        $this->device = $device;
    }

    public function execute()
    {
        $this->device->volumeUp();
    }
}