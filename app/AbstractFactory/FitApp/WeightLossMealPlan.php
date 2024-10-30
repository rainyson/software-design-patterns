<?php

namespace App\AbstractFactory\FitApp;

class WeightLossMealPlan implements IMealPlan
{

    public function do(): void
    {
        echo "Generate Meal plan for loosing weight <br />";
    }
}