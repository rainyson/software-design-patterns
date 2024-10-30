<?php

namespace App\AbstractFactory\FitApp;

class HomePage
{
    public function setPlan(IGoalFactory $goalFactory): void
    {
        $goalFactory->createMealPlan()->do();
        $goalFactory->createWorkoutPlan()->do();
    }
}