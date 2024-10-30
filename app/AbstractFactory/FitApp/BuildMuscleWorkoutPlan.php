<?php

namespace App\AbstractFactory\FitApp;

class BuildMuscleWorkoutPlan implements IWorkoutPlan
{

    public function do(): void
    {
        echo "Do workouts for building muscles <br />";
    }
}