<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Register</title>
    <!-- Include the Tailwind CSS stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 h-screen flex items-center justify-center">

    <div class="bg-white p-8 rounded shadow-md w-96">
        <!-- Tabs for Login and Register -->
        <div class="flex mb-4">
            <button id="login-tab" class="flex-1 text-center py-2 px-4 border-b-2 font-semibold focus:outline-none focus:border-blue-500">Login</button>
            <button id="register-tab" class="flex-1 text-center py-2 px-4 focus:outline-none">Register</button>
        </div>

        <!-- Login Form -->
        <form id="login-form" class="login-form">
            <div class="mb-4">
                <label for="login-email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                <input type="email" id="login-email" name="login-email" class="w-full border rounded-md py-2 px-3">
            </div>
            <div class="mb-4">
                <label for="login-password" class="block text-gray-700 text-sm font-bold mb-2">Password:</label>
                <input type="password" id="login-password" name="login-password" class="w-full border rounded-md py-2 px-3">
            </div>
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue">Login</button>
        </form>

        <!-- Register Form -->
        <form id="register-form" class="hidden">
            <div class="mb-4">
                <label for="register-name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                <input type="text" id="register-name" name="register-name" class="w-full border rounded-md py-2 px-3">
            </div>
            <div class="mb-4">
                <label for="register-email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                <input type="email" id="register-email" name="register-email" class="w-full border rounded-md py-2 px-3">
            </div>
            <div class="mb-4">
                <label for="register-password" class="block text-gray-700 text-sm font-bold mb-2">Password:</label>
                <input type="password" id="register-password" name="register-password" class="w-full border rounded-md py-2 px-3">
            </div>
            <button type="submit" class="bg-green-500 text-white py-2 px-4 rounded-md hover:bg-green-700 focus:outline-none focus:shadow-outline-green">Register</button>
        </form>
    </div>

    <script>
        // Switch between login and register forms
        document.getElementById('login-tab').addEventListener('click', function () {
            document.getElementById('login-form').style.display = 'block';
            document.getElementById('register-form').style.display = 'none';
        });

        document.getElementById('register-tab').addEventListener('click', function () {
            document.getElementById('login-form').style.display = 'none';
            document.getElementById('register-form').style.display = 'block';
        });
    </script>

</body>

</html>
