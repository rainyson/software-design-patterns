<?php

namespace App\Command\TV;

class RemoteControlSender
{
    private $_commands = [];
    public function setCommands(array $commands)
    {
        $this->_commands = $commands;
    }

    public function run()
    {
        foreach ($this->_commands as $command) {
            $command->execute();
        }
    }
}