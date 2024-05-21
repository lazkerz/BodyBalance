<?php

namespace App\Controllers;

use App\Models\BMRHistoryModel;

class BMRController extends BaseController
{

    public function calorieCalculator()
    {
        return view('calorie_calculator');
    }

    public function calculateCalories()
    {
        $height = $this->request->getPost('height');
        $weight = $this->request->getPost('weight');
        $age = $this->request->getPost('age');
        $gender = $this->request->getPost('gender');
        $activityLevel = $this->request->getPost('activity_level');
        $goal = $this->request->getPost('goal');

        $bmr = $this->calculateBMR($height, $weight, $age, $gender);
        $tdee = $this->calculateTDEE($bmr, $activityLevel);
        $calories = $this->calculateGoalCalories($tdee, $goal);

        return view('calorie_result', [
            'bmr' => $bmr,
            'tdee' => $tdee,
            'calories' => $calories,
        ]);
    }

    private function calculateBMR($height, $weight, $age, $gender)
    {
        if ($gender == 'male') {
            return 88.362 + (13.397 * $weight) + (4.799 * $height) - (5.677 * $age);
        } else {
            return 447.593 + (9.247 * $weight) + (3.098 * $height) - (4.330 * $age);
        }
    }

    private function calculateTDEE($bmr, $activityLevel)
    {
        switch ($activityLevel) {
            case 'sedentary':
                return $bmr * 1.2;
            case 'lightly_active':
                return $bmr * 1.375;
            case 'moderately_active':
                return $bmr * 1.55;
            case 'very_active':
                return $bmr * 1.725;
            case 'extra_active':
                return $bmr * 1.9;
            default:
                return $bmr;
        }
    }

    private function calculateGoalCalories($tdee, $goal)
    {
        switch ($goal) {
            case 'lose_weight':
                return $tdee - 500;
            case 'maintain_weight':
                return $tdee;
            case 'gain_weight':
                return $tdee + 500;
            default:
                return $tdee;
        }
    }

    public function history()
    {
        $bmrHistoryModel = new BMRHistoryModel();
        $latestHistory = $bmrHistoryModel->orderBy('created_at', 'DESC')->first();

        return view('calorie_history', ['history' => $latestHistory]);
    }
}
