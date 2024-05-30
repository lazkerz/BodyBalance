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
        if ($gender == 'pria') {
            if ($bmi < 18.5) {
                return 'Kurus';
            } elseif ($bmi >= 18.5 && $bmi < 24.9) {
                return 'Normal';
            } elseif ($bmi >= 24.9 && $bmi < 29.9) {
                return 'Berat Berlebih';
            } else {
                return 'Obesitas';
            }
        } elseif ($gender == 'wanita') {
            if ($bmi < 18.5) {
                return 'Kurus';
            } elseif ($bmi >= 18.5 && $bmi < 23.9) {
                return 'Normal';
            } elseif ($bmi >= 23.9 && $bmi < 28.9) {
                return 'Berat Berlebih';
            } else {
                return 'Obesitas';
            }
        } else {
            return 'Jenis kelamin tidak valid';
        }
    }

    private function getNutritionRecommendation($category)
    {
        // Rekomendasi nutrisi berdasarkan kategori BMI
        switch ($category) {
            case 'Kurus':
                return 'Anda mungkin perlu meningkatkan asupan kalori dengan makanan sehat seperti kacang-kacangan, alpukat, dan biji-bijian utuh.';
            case 'Normal':
                return 'Pertahankan pola makan seimbang dengan berbagai buah, sayuran, protein tanpa lemak, dan biji-bijian utuh.';
            case 'Berat Berlebih':
                return 'Fokus pada kontrol porsi dan tambahkan lebih banyak buah, sayuran, dan protein tanpa lemak dalam diet Anda. Batasi makanan manis dan berlemak tinggi.';
            case 'Obesitas':
                return 'Konsultasikan dengan profesional kesehatan untuk saran pribadi. Fokus pada penurunan berat badan secara bertahap melalui kombinasi diet dan olahraga.';
            default:
                return 'Tidak ada rekomendasi spesifik yang tersedia.';
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
