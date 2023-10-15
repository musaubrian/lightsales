<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>LightSales: Auth</title>
</head>
<?php
session_start();

if (isset($_SESSION["user"])) {
    header("Location: /");
    echo "sth";
    exit();
}
?>

<body class="bg-gradient-to-r from-orange-400 to-blue-300 min-h-screen flex items-center justify-center">
    <div class="text-center text-gray-900 w-5/6 md:w-3/6">
        <h1 class="text-4xl font-extrabold mb-4">LightSales</h1>

        <form action="lib/login.php" method="post" id="auth-form" class="bg-slate-100 p-8 rounded-lg shadow-lg w-full text-lg flex flex-col items-center justify-center">
            <div class="mb-4 w-full md:w-[95%]">
                <label for="username" class="inline-flex justify-start w-full text-gray-800 font-semibold text-sm">Email:</label>
                <input type="email" id="email" name="email" class="w-full border border-gray-400 p-2 rounded" required>
            </div>
            <div class="mb-4 w-full md:w-[95%]">
                <label for="username" class="inline-flex justify-start w-full text-gray-800 font-semibold text-sm">Password:</label>
                <input type="password" id="password" name="password" class="w-full border border-gray-400 p-2 rounded" required>
            </div>
            <button type="submit" id="submit" class="bg-slate-800 text-white p-2 rounded-full text-lg font-semibold hover:bg-slate-900 hover:p-3 transition-all duration-300 ease-in-out w-3/6">Login</button>
        </form>

        <div class="mt-4">
            <span id="desc">Don't have an account?</span>
            <button onclick=registerOrLogin() id="option" class="font-semibold text-lg underline hover:decoration-dotted ease-linear hover:transition-all">Register</a>
        </div>
    </div>
    <script>
        function registerOrLogin() {

            var form = document.getElementById("auth-form");
            var button = document.getElementById("submit");
            var option = document.getElementById("option");
            var desc = document.getElementById("desc")

            if (button.innerHTML === "Login") {
                form.action = "lib/register.php"
                button.innerHTML = "Register"
                option.innerHTML = "Login"
                desc.innerHTML = "Already have an account?"
            } else {
                form.action = "lib/login.php"
                button.innerHTML = "Login"
                option.innerHTML = "Register"
                desc.innerHTML = "Don't have an account?"
            }
        }
    </script>
</body>

</html>