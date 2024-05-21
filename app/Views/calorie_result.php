<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Calorie Calculation Result</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/app.css">
</head>

<body>
    <?= $this->extend('layout/template') ?>
    <?= $this->section('content') ?>
    <div class="container mx-auto py-12 px-4 m-10 flex flex-col gap-5">
        <div class="w-fit mx-auto bg-white p-6 rounded-md shadow-md flex flex-col">
            <h1 class="mb-4 text-center font-semibold text-xl text-blue-600">Calorie Calculation Result</h1>
            <p class="mb-2">Basal Metabolic Rate (BMR): <strong><?= $bmr ?> calories/day</strong></p>
            <p class="mb-2">Total Daily Energy Expenditure (TDEE): <strong><?= $tdee ?> calories/day</strong></p>
            <p class="mb-4">Calories Needed to Achieve Your Goal: <strong><?= $calories ?> calories/day</strong></p>
            <a href="/calorie-calculator" class="text-blue-600 font-medium text-sm">Back to Calculator</a>
        </div>

        <div class="w-full max-w-md mx-auto bg-gray-100 p-6 rounded-md shadow-md">
            <h2 class="mb-4 text-center font-semibold text-lg text-gray-700">What are BMR, TDEE, and Calories Needed to Achieve Your Goal?</h2>
            <p class="mb-4"><strong>Basal Metabolic Rate (BMR):</strong> This is the number of calories your body needs to maintain basic physiological functions such as breathing, circulation, and cell production while at rest.</p>
            <p class="mb-4"><strong>Total Daily Energy Expenditure (TDEE):</strong> This is the total number of calories your body needs in a day to maintain your current weight, taking into account all activities, including exercise and daily tasks.</p>
            <p class="mb-4"><strong>Calories Needed to Achieve Your Goal:</strong> This is the recommended number of calories you should consume daily to reach your desired weight goal, whether it is weight loss, maintenance, or gain.</p>
        </div>
    </div>
    <?= $this->endSection() ?>
</body>

</html>