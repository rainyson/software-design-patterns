<?php

namespace App\FactoryMethod\Job;

class TechnicalJobFactory extends AJobFactory
{

    public function createJobIns($type)
    {
        $ins = null;
        switch ($type) {
            case 'backend':
                $ins = new BackendDeveloper();
                break;
            case 'frontend':
                $ins = new FrontEndDeveloper();
                break;
            case 'devops':
                break;
        }
        return $ins;
    }
}