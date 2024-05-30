<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate Bmi</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <link rel="stylesheet" href="../css/app.css">
</head>

<body>
    <?= $this->extend('layout/template') ?>
    <?= $this->section('content') ?>
    <div class="min-h-screen flex justify-center bg-white m-10 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            <div class="flex flex-col justify-center">
                <h2 class="mt-6 text-center text-3xl font-semibold text-blue-600">
                    BMI Calculator
                </h2>
            </div>
            <form class="mt-8 space-y-6" action="<?= base_url('/calculate') ?>" method="POST">
                <?= csrf_field() ?>
                <div class="flex flex-col">
                    <div class="mb-4">
                        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tinggi (cm)</label>
                        <input type="number" name="height" class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="ex. 180cm" required />
                    </div>
                    <div class="mb-4">
                        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Berat (kg)</label>
                        <input type="number" name="weight" class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="ex. 80kg" required />
                    </div>

                    <label for="gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Kelamin</label>
                    <select name="gender" id="gender" class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        <option value="pria">pria</option>
                        <option value="wanita">wanita</option>
                    </select><br>
                </div>

                <div class="flex justify-center">
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Calculate
                    </button>
                </div>
            </form>
        </div>
    </div>
    <?= $this->endSection() ?>
</body>

</html>