<?php

namespace App\FactoryMethod\Job;

use App\FactoryMethod\Job\JobFactory;

class TechnicalJob extends JobFactory
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