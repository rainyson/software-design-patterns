<?php

namespace App\FactoryMethod\Job;

abstract class AJobFactory
{
    abstract public function createJobIns($type);
}