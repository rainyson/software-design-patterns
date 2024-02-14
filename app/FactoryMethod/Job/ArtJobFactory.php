<?php

namespace App\FactoryMethod\Job;

class ArtJobFactory extends AJobFactory
{

    public function createJobIns($type)
    {
        $ins = null;
        switch ($type) {
            case 'designer':
                $ins = new GraphicDesignerFactory();
                break;
            case 'artist':
                break;
        }
        return $ins;
    }
}