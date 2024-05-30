<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome BodyBalance</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <link rel="stylesheet" href="../css/app.css">

</head>

<body>
    <?= $this->include('layout/navbar'); ?>

    <?= $this->renderSection('content'); ?>


    <footer class="bg-white shadow dark:bg-gray-900">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 Bmi Calculate</a>. All Rights Reserved.</span>
        </div>
    </footer>
</body>

</html>