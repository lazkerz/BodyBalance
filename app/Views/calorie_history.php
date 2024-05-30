<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Perhitungan BMR</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <link rel="stylesheet" href="../css/app.css">
</head>

<body>
    <?= $this->extend('layout/template') ?>
    <?= $this->section('content') ?>
    <div class="min-h-screen container mx-auto py-12 px-4 m-10 flex flex-col gap-5">
        <?php if ($history) : ?>
            <div class="w-1/2 mx-auto bg-white p-6 rounded-md shadow-md flex flex-col">
                <h1 class="text-2xl mb-4 text-center text-blue-600">Riwayat Perhitungan BMR</h1>
                <p>Tinggi:<strong> <?= $history['height'] ?> cm </strong></p>
                <p>Berat:<strong> <?= $history['weight'] ?> kg</strong></p>
                <p>Umur:<strong> <?= $history['age'] ?> tahun</strong></p>
                <p>Jenis Kelamin:<strong> <?= $history['gender'] ?></strong></p>
                <p>Tingkat Aktivitas:<strong> <?= $history['activity_level'] ?></strong></p>
                <p>Tujuan:<strong> <?= $history['goal'] ?></strong></p>
                <p>BMR:<strong> <?= number_format($history['bmr'], 2) ?> kalori/hari</strong></p>
                <p>TDEE:<strong> <?= number_format($history['tdee'], 2) ?> kalori/hari</strong></p>
                <p>Kalori yang Dibutuhkan untuk Mencapai Tujuan:<strong> <?= number_format($history['calories'], 2) ?> kalori/hari</strong></p>
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
