<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMR Calculation History</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <link rel="stylesheet" href="../css/app.css">
</head>

<body>
    <?= $this->extend('layout/template') ?>
    <?= $this->section('content') ?>
    <div class="min-h-screen container mx-auto py-12 px-4 m-10 flex flex-col gap-5">
        <?php if ($history) : ?>
            <div class="w-1/2 mx-auto bg-white p-6 rounded-md shadow-md flex flex-col">
                <h1 class="text-2xl mb-4">BMR Calculation History</h1>
                <p><strong>Height:</strong> <?= $history['height'] ?> cm</p>
                <p><strong>Weight:</strong> <?= $history['weight'] ?> kg</p>
                <p><strong>Age:</strong> <?= $history['age'] ?> years</p>
                <p><strong>Gender:</strong> <?= $history['gender'] ?></p>
                <p><strong>Activity Level:</strong> <?= $history['activity_level'] ?></p>
                <p><strong>Goal:</strong> <?= $history['goal'] ?></p>
                <p><strong>BMR:</strong> <?= number_format($history['bmr'], 2) ?> calories/day</p>
                <p><strong>TDEE:</strong> <?= number_format($history['tdee'], 2) ?> calories/day</p>
                <p><strong>Calories Needed to Achieve Your Goal:</strong> <?= number_format($history['calories'], 2) ?> calories/day</p>
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