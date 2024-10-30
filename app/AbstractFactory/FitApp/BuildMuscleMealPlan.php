<?php

namespace App\AbstractFactory\FitApp;

class BuildMuscleMealPlan implements IMealPlan
{

    public function do(): void
    {
        echo "Generate Meal plan for building muscle <br />";
    }
}