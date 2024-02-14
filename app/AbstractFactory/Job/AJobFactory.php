<?php

namespace App\AbstractFactory\Job;

abstract class AJobFactory
{
    abstract public function createArtJobIns($type);
    abstract public function createTechnicalJobIns($type);
    abstract public function createProductJobIns($type);
}