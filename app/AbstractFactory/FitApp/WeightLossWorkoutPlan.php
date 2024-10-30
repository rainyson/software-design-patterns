<?php

namespace App\AbstractFactory\FitApp;

class WeightLossWorkoutPlan implements IWorkoutPlan
{

    public function do(): void
    {
        echo "Do workouts for loosing weight <br />";
    }
}