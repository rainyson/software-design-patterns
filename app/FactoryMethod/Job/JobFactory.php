<?php

namespace App\FactoryMethod\Job;

abstract class JobFactory
{
    abstract public function createJobIns($type);
}