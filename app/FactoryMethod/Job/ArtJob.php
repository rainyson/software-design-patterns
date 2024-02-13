<?php

namespace App\FactoryMethod\Job;

use App\FactoryMethod\Job\JobFactory;

class ArtJob extends JobFactory
{

    public function createJobIns($type)
    {
        $ins = null;
        switch ($type) {
            case 'designer':
                $ins = new GraphicDesigner();
                break;
            case 'artist':
                break;
        }
        return $ins;
    }
}