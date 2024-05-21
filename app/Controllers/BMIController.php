<?php

namespace App\Controllers;

use App\Models\BMIHistoryModel;


class BMIController extends BaseController
{
    public function index()
    {
        return view('bmi_form');
    }

    public function calculate()
    {
        // Ambil data tinggi dan berat badan dari form
        $height = $this->request->getPost('height');
        $weight = $this->request->getPost('weight');
        $gender = $this->request->getPost('gender');

        // Hitung BMI
        $bmi = $weight / (($height / 100) * ($height / 100));


        // Tentukan kategori BMI
        $category = $this->getCategory($bmi, $gender);

        $bmiHistoryModel = new BMIHistoryModel();
        $bmiHistoryModel->truncate();
        $bmiHistoryModel->insert([
            'height' => $height,
            'weight' => $weight,
            'bmi' => $bmi,
            'gender' => $gender,
            'category' => $category,
            'created_at' => date('Y-m-d H:i:s')
        ]);

        // Hitung berat badan ideal
        $idealWeight = $this->calculateIdealWeight($height);

        // Dapatkan rekomendasi nutrisi
        $nutritionRecommendation = $this->getNutritionRecommendation($category);

        // Tampilkan hasil
        return view('bmi_result', [
            'bmi' => $bmi,
            'category' => $category,
            'gender' => $gender,
            'height' => $height,
            'weight' => $weight,
            'idealWeight' => $idealWeight,
            'nutritionRecommendation' => $nutritionRecommendation
        ]);
    }

    private function getCategory($bmi, $gender)
    {
        if ($gender == 'male') {
            if ($bmi < 18.5) {
                return 'Underweight';
            } elseif ($bmi >= 18.5 && $bmi < 24.9) {
                return 'Normal';
            } elseif ($bmi >= 24.9 && $bmi < 29.9) {
                return 'Overweight';
            } else {
                return 'Obese';
            }
        } elseif ($gender == 'female') {
            if ($bmi < 18.5) {
                return 'Underweight';
            } elseif ($bmi >= 18.5 && $bmi < 23.9) {
                return 'Normal';
            } elseif ($bmi >= 23.9 && $bmi < 28.9) {
                return 'Overweight';
            } else {
                return 'Obese';
            }
        } else {
            return 'Invalid gender';
        }
    }


    private function getNutritionRecommendation($category)
    {
        // Rekomendasi nutrisi berdasarkan kategori BMI
        switch ($category) {
            case 'Underweight':
                return 'You may need to increase your calorie intake with healthy foods like nuts, avocados, and whole grains.';
            case 'Normal':
                return 'Maintain a balanced diet with a variety of fruits, vegetables, lean proteins, and whole grains.';
            case 'Overweight':
                return 'Focus on portion control and incorporate more fruits, vegetables, and lean proteins into your diet. Limit sugary and high-fat foods.';
            case 'Obese':
                return 'Consult a healthcare professional for personalized advice. Focus on gradual weight loss through a combination of diet and exercise.';
            default:
                return 'No specific recommendation available.';
        }
    }

    private function calculateIdealWeight($height)
    {
        // Rumus untuk menghitung berat badan ideal (berdasarkan rumus BMI)
        return 18.5 * (($height / 100) * ($height / 100));
    }


    public function history()
    {
        $bmiHistoryModel = new BMIHistoryModel();
        $latestHistory = $bmiHistoryModel->orderBy('created_at', 'DESC')->first();

        if ($latestHistory) {
            $height = $latestHistory['height'];
            $weight = $latestHistory['weight'];
            $bmi = $latestHistory['bmi'];
            $gender = $latestHistory['gender'];
            $category = $latestHistory['category'];

            // Hitung berat badan ideal
            $idealWeight = $this->calculateIdealWeight($height);

            // Berdasarkan kategori BMI, dapatkan rekomendasi nutrisi
            $nutritionRecommendation = $this->getNutritionRecommendation($category);

            return view('bmi_history', [
                'bmi' => $bmi,
                'category' => $category,
                'gender' => $gender,
                'height' => $height,
                'weight' => $weight,
                'idealWeight' => $idealWeight,
                'nutritionRecommendation' => $nutritionRecommendation,
            ]);
        } else {
            return view('bmi_history', ['history' => null]);
        }
    }
}
