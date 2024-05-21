<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Calorie Calculator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/app.css">
</head>


<body>
    <?= $this->extend('layout/template') ?>
    <?= $this->section('content') ?>
    <div class="container mx-auto py-12 px-4 m-10">
        <h1 class="text-2xl font-semibold text-blue-600 mb-4">Calorie Calculator</h1>
        <form action="/calculate-calories" method="POST">
            <div class="mb-4">
                <label for="height" class="block text-gray-700 font-medium">Height (cm):</label>
                <input type="number" id="height" name="height" class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:border-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="weight" class="block text-gray-700 font-medium">Weight (kg):</label>
                <input type="number" id="weight" name="weight" class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:border-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="age" class="block text-gray-700 font-medium">Age:</label>
                <input type="number" id="age" name="age" class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:border-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="gender" class="block text-gray-700 font-medium">Gender:</label>
                <select id="gender" name="gender" class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:border-blue-500" required>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="activity_level" class="block text-gray-700 font-medium">Activity Level:</label>
                <select id="activity_level" name="activity_level" class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:border-blue-500" required>
                    <option value="sedentary">Sedentary (little to no exercise)</option>
                    <option value="lightly_active">Lightly Active (light exercise/sports 1-3 days/week)</option>
                    <option value="moderately_active">Moderately Active (moderate exercise/sports 3-5 days/week)</option>
                    <option value="very_active">Very Active (hard exercise/sports 6-7 days/week)</option>
                    <option value="extra_active">Extra Active (very hard exercise/sports & physical job or 2x training)</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="goal" class="block text-gray-700 font-medium">Goal:</label>
                <select id="goal" name="goal" class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:border-blue-500" required>
                    <option value="lose_weight">Lose Weight</option>
                    <option value="maintain_weight">Maintain Weight</option>
                    <option value="gain_weight">Gain Weight</option>
                </select>
            </div>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Calculate Calories</button>
        </form>
    </div>
    <?= $this->endSection() ?>
</body>

</html>