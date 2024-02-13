<?php

namespace App\FactoryMethod\Job;

class ProductJob extends JobFactory
{

    public function createJobIns($type)
    {
        $ins = null;
        switch ($type) {
            case 'designer':
                $ins = new ProductDesigner();
                break;
            case 'manager':
                break;
        }
        return $ins;
    }
}