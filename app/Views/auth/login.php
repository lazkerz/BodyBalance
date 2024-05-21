<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/app.css">
</head>

<body>
    <div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            <div class="flex flex-col justify-center">
                <h2 class="mt-6 text-center text-3xl font-semibold text-gray-900">
                    Welcome Back!
                </h2>
                <div class="flex flex-row gap-3 justify-center items-center mt-2">
                    <p class="text-center text-sm text-gray-600 text-sm">Don't have an account yet?</p>
                    <a href="/register" class="text-blue-500 font-semibold text-sm">Sign up now</a>
                </div>
            </div>
            <form class="mt-8 space-y-6" action="<?= base_url('/login') ?>" method="POST">
                <?= csrf_field() ?>
                <div class="flex flex-col">
                    <div class="mb-4">
                        <input type="email" id="email" class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="john.doe@company.com" required />
                    </div>
                    <div class="mb-4">
                        <input type="password" id="password" class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="•••••••••" required />
                    </div>
                </div>

                <?php if (isset($validation)) : ?>
                    <div class="text-red-600 text-sm mt-2">
                        <?= $validation->listErrors() ?>
                    </div>
                <?php endif; ?>

                <div class="flex justify-center">
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Sign in
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>