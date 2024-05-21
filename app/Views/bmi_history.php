<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI History</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <link rel="stylesheet" href="../css/app.css">
</head>

<body>
    <?= $this->extend('layout/template') ?>
    <?= $this->section('content') ?>
    <div class="min-h-screen container mx-auto py-12 px-4 m-10 flex flex-col gap-5">
        <?php if (isset($bmi) && isset($category) && isset($gender) && isset($height) && isset($weight) && isset($idealWeight) && isset($nutritionRecommendation)) : ?>
            <h1 class="text-lg font-semibold text-blue-500 mb-4">The Last BMI History</h1>
            <div class="w-full mx-auto bg-white p-6 rounded-md shadow-md flex flex-col">
                <h1 class="mb-2 text-center font-medium text-xl">BMI Result for <?= $gender ?></h1>
                <h1 class="text-center font-semibold text-lg text-blue-600 mb-2">Category: <?= $category ?></h1>
                <div class="flex justify-center gap-5">
                    <p class="text-gray-600 font-medium">Weight: <?= $weight ?> kg</p>
                    <p class="text-gray-600 font-medium">Height: <?= $height ?> cm</p>
                </div>
                <p class="text-center font-medium text-lg my-3 text-gray-600">Your BMI: <?= number_format($bmi, 1) ?></p>
                <a href="/" class="text-blue-600 font-medium text-sm">Calculate Again</a>
            </div>

            <div class="w-full mx-auto bg-white p-6 rounded-md shadow-md flex flex-col">
                <h1 class="text-xl mb-4 text-center font-medium">Weight Recommendation</h1>
                <p class="text-center text-gray-600 mb-4">Your ideal weight based on your latest BMI is: <strong><?= number_format($idealWeight, 1) ?> kg</strong>.</p>
                <p class="text-center text-gray-600">Keep maintaining your health!</p>
                <br>
                <h1 class="text-xl mb-4 text-center font-medium">Nutrition Recommendation</h1>
                <?php if ($nutritionRecommendation !== 'No specific recommendation available.') : ?>
                    <p class="text-center text-gray-600 mb-4">Your nutrition recommendation based on your latest BMI is: <strong><?= $nutritionRecommendation ?></strong></p>
                <?php else : ?>
                    <p class="text-center text-gray-600 mb-4">No specific nutrition recommendation available based on your latest BMI.</p>
                <?php endif; ?>
                <p class="text-center text-gray-600">Remember to maintain a balanced diet and stay active!</p>
            </div>
        <?php else : ?>
            <div class="w-1/2 mx-auto bg-white p-6 rounded-md shadow-md flex flex-col">
                <h1 class="text-center font-medium text-xl text-red-600">No history available.</h1>
            </div>
        <?php endif; ?>
    </div>
    <?= $this->endSection() ?>
</body>

</html>