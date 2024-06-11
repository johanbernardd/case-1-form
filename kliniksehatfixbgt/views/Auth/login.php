<?php
session_start();
if (isset($_SESSION['username']))
{
    header("Location: index.php?c=LandingpageController&m=dashboard");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Klinik Sehat - Login</title>
        <style>
            body {
                margin: 0;
                font-family: Arial, sans-serif;
                background: linear-gradient(to right, #DDFFE7, #98D7C2);
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }
        </style>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    </head>

    <body>
        <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
            <form class="space-y-6" action="index.php?c=AuthController&m=login" method="POST">
            <img alt="logo" class="mx-auto mb-4 h-24 w-24 object-cover" src="https://github.com/johanbernardd/case-1-form/blob/Syafiq_HomepageAuthentication/resource/logo.png?raw=true" >
                <h5 class="text-xl font-medium text-gray-900 dark:text-white">Masuk dengan email dan password</h5>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                    <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="username@company.com" required />
                </div>
                <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                    <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />
                </div>
                <button type="submit" class="w-full text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Masuk</button>
                <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                    Belum punya akun? <a href="index.php?c=LandingpageController&m=register" class="text-green-700 hover:underline dark:text-green-500">Buat Akun</a>
                </div>
            </form>
        </div>
    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</html>