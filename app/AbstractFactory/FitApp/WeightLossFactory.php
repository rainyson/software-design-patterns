<?php

namespace App\AbstractFactory\FitApp;

class WeightLossFactory implements IGoalFactory
{

    public function createWorkoutPlan(): IWorkoutPlan
    {
        return new WeightLossWorkoutPlan();
    }

    public function createMealPlan(): IMealPlan
    {
        return new WeightLossMealPlan();
    }
}