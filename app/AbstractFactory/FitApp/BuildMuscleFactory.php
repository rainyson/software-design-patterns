<?php

namespace App\AbstractFactory\FitApp;

class BuildMuscleFactory implements IGoalFactory
{

    public function createWorkoutPlan(): IWorkoutPlan
    {
        return new BuildMuscleWorkoutPlan();
    }

    public function createMealPlan(): IMealPlan
    {
        return new BuildMuscleMealPlan();
    }
}