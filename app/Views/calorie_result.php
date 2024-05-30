<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Hasil Perhitungan Kalori</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/app.css">
</head>

<body>
    <?= $this->extend('layout/template') ?>
    <?= $this->section('content') ?>
    <div class="container mx-auto py-12 px-4 m-10 flex flex-col gap-5">
        <div class="w-fit mx-auto bg-white p-6 rounded-md shadow-md flex flex-col">
            <h1 class="mb-4 text-center font-semibold text-xl text-blue-600">Hasil Perhitungan Kalori</h1>
            <p class="mb-2">Laju Metabolisme Basal (BMR): <strong><?= $bmr ?> kalori/hari</strong></p>
            <p class="mb-2">Total Pengeluaran Energi Harian (TDEE): <strong><?= $tdee ?> kalori/hari</strong></p>
            <p class="mb-4">Kalori yang Dibutuhkan untuk Mencapai Tujuan Anda: <strong><?= $calories ?> kalori/hari</strong></p>
            <a href="/calorie-calculator" class="text-blue-600 font-medium text-sm">Kembali ke Kalkulator</a>
        </div>

        <div class="w-fit max-w-md mx-auto bg-gray-100 p-6 rounded-md shadow-md">
            <h2 class="mb-4 text-center font-semibold text-lg text-gray-700">Apa itu BMR, TDEE, dan Kalori yang Dibutuhkan untuk Mencapai Tujuan Anda?</h2>
            <p class="mb-4"><strong>Laju Metabolisme Basal (BMR):</strong> Ini adalah jumlah kalori yang dibutuhkan tubuh Anda untuk menjaga fungsi fisiologis dasar seperti bernapas, sirkulasi, dan produksi sel saat istirahat.</p>
            <p class="mb-4"><strong>Total Pengeluaran Energi Harian (TDEE):</strong> Ini adalah total jumlah kalori yang dibutuhkan tubuh Anda dalam sehari untuk mempertahankan berat badan Anda saat ini, dengan mempertimbangkan semua aktivitas, termasuk olahraga dan tugas sehari-hari.</p>
            <p class="mb-4"><strong>Kalori yang Dibutuhkan untuk Mencapai Tujuan Anda:</strong> Ini adalah jumlah kalori yang direkomendasikan yang harus Anda konsumsi setiap hari untuk mencapai tujuan berat badan yang Anda inginkan, baik itu penurunan berat badan, pemeliharaan, atau peningkatan.</p>
        </div>
    </div>
    <?= $this->endSection() ?>
</body>

</html>
