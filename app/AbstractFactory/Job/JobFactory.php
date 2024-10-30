<?php

namespace App\AbstractFactory\Job;

class JobFactory extends AJobFactory
{

    public function createArtJobIns($type)
    {
        $ins = null;
        switch ($type) {
            case 'gd':
                $ins = new GraphicDesigner();
                break;
            case 'cd':
                break;
        }
        return $ins;
    }

    public function createTechnicalJobIns($type)
    {
        $ins = null;
        switch ($type) {
            case 'bd':
                $ins = new BackendDeveloper();
                break;
            case 'fd':
                $ins = new FrontEndDeveloper();
                break;
        }
        return $ins;
    }

    public function createProductJobIns($type)
    {
        $ins = null;
        switch ($type) {
            case 'pd':
                $ins = new ProductDesigner();
                break;
            case 'pm':
                break;
        }
        return $ins;
    }
}