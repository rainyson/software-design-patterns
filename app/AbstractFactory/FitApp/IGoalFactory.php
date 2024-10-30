<?php

namespace App\AbstractFactory\FitApp;

interface IGoalFactory
{
    public function createWorkoutPlan(): IWorkoutPlan;
    public function createMealPlan(): IMealPlan;
}