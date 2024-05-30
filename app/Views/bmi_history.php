<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat BMI</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <link rel="stylesheet" href="../css/app.css">
</head>

<body>
    <?= $this->extend('layout/template') ?>
    <?= $this->section('content') ?>
    <div class="min-h-screen container mx-auto py-12 px-4 m-10 flex flex-col gap-5">
        <?php if (isset($bmi) && isset($category) && isset($gender) && isset($height) && isset($weight) && isset($idealWeight) && isset($nutritionRecommendation)) : ?>
            <h1 class="text-lg font-semibold text-blue-500 mb-4 mx-auto">Riwayat BMI Terakhir</h1>
            <div class="w-1/2 mx-auto bg-white p-6 rounded-md shadow-md flex flex-col border-dashed bg-gray-50">
                <h1 class="mb-2 text-center font-medium text-xl">Hasil BMI untuk <?= $gender ?></h1>
                <h1 class="text-center font-semibold text-lg text-blue-600 mb-2">Kategori: <?= $category ?></h1>
                <div class="flex justify-center gap-5">
                    <p class="text-gray-600 font-medium">Berat: <?= $weight ?> kg</p>
                    <p class="text-gray-600 font-medium">Tinggi: <?= $height ?> cm</p>
                </div>
                <p class="text-center font-medium text-lg my-3 text-gray-600">BMI Anda: <?= number_format($bmi, 1) ?></p>
                <a href="/" class="text-blue-600 font-medium text-sm">Hitung Ulang</a>
            </div>

            <div class="w-1/2 mx-auto bg-white p-6 rounded-md shadow-md flex flex-col">
                <h1 class="text-xl mb-4 text-center font-medium">Rekomendasi Berat Badan</h1>
                <p class="text-center text-gray-600 mb-4">Berat badan ideal Anda berdasarkan BMI terbaru adalah: <strong><?= number_format($idealWeight, 1) ?> kg</strong>.</p>
                <p class="text-center text-gray-600">Tetap jaga kesehatan Anda!</p>
                <br>
                <h1 class="text-xl mb-4 text-center font-medium">Rekomendasi Nutrisi</h1>
                <?php if ($nutritionRecommendation !== 'Tidak ada rekomendasi khusus yang tersedia.') : ?>
                    <p class="text-center text-gray-600 mb-4">Rekomendasi nutrisi Anda berdasarkan BMI terbaru adalah: <strong><?= $nutritionRecommendation ?></strong></p>
                <?php else : ?>
                    <p class="text-center text-gray-600 mb-4">Tidak ada rekomendasi nutrisi khusus yang tersedia berdasarkan BMI terbaru Anda.</p>
                <?php endif; ?>
                <p class="text-center text-gray-600">Ingat untuk menjaga pola makan seimbang dan tetap aktif!</p>
            </div>
        <?php else : ?>
            <div class="w-1/2 mx-auto bg-white p-6 rounded-md shadow-md flex flex-col">
                <h1 class="text-center font-medium text-xl text-red-600">Tidak ada riwayat yang tersedia.</h1>
            </div>
        <?php endif; ?>
    </div>
    <?= $this->endSection() ?>
</body>

</html>
