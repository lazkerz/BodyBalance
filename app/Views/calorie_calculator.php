<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Kalkulator Kalori</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/app.css">
</head>

<body>
    <?= $this->extend('layout/template') ?>
    <?= $this->section('content') ?>
    <div class="container mx-auto py-12 px-4 m-10">
        <h1 class="text-2xl font-semibold text-blue-600 mb-4 text-center">Kalkulator Kalori</h1>
        <form action="/calculate-calories" class="w-1/2 mx-auto" method="POST">
            <div class="mb-4">
                <label for="height" class="block text-gray-700 font-medium">Tinggi (cm):</label>
                <input type="number" id="height" name="height" class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:border-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="weight" class="block text-gray-700 font-medium">Berat (kg):</label>
                <input type="number" id="weight" name="weight" class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:border-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="age" class="block text-gray-700 font-medium">Umur:</label>
                <input type="number" id="age" name="age" class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:border-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="gender" class="block text-gray-700 font-medium">Jenis Kelamin:</label>
                <select id="gender" name="gender" class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:border-blue-500" required>
                    <option value="male">Pria</option>
                    <option value="female">Wanita</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="activity_level" class="block text-gray-700 font-medium">Tingkat Aktivitas:</label>
                <select id="activity_level" name="activity_level" class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:border-blue-500" required>
                    <option value="sedentary">Sedentary (sedikit atau tidak ada olahraga)</option>
                    <option value="lightly_active">Ringan Aktif (olahraga ringan 1-3 hari/minggu)</option>
                    <option value="moderately_active">Cukup Aktif (olahraga sedang 3-5 hari/minggu)</option>
                    <option value="very_active">Sangat Aktif (olahraga keras 6-7 hari/minggu)</option>
                    <option value="extra_active">Sangat Aktif Ekstra (olahraga sangat keras & pekerjaan fisik atau latihan 2x sehari)</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="goal" class="block text-gray-700 font-medium">Tujuan:</label>
                <select id="goal" name="goal" class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:border-blue-500" required>
                    <option value="turun_berat_badan">Turun Berat Badan</option>
                    <option value="pertahankan_berat_badan">Pertahankan Berat Badan</option>
                    <option value="naikkan_berat_badan">Naikkan Berat Badan</option>
                </select>
            </div>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Hitung Kalori</button>
        </form>
    </div>
    <?= $this->endSection() ?>
</body>

</html>