<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Password Recovery</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">

<nav class="bg-lime-500 p-4 shadow mb-4">
    <ul class="flex space-x-6 justify-center text-white font-semibold">
        <li><a href="home.php" class="hover:text-gray-300 transition">Home</a></li>
        <li><a href="login.php" class="hover:text-gray-300 transition">Login</a></li>
        <li><a href="registration.php" class="hover:text-gray-300 transition">Registration</a></li>
    </ul>
</nav>

    <div class="flex items-center justify-center">
        <div class="bg-white p-8 rounded shadow-md w-full max-w-md">
        <h2 class="text-2xl font-bold mb-6 text-center">Password Recovery</h2>

        <form action="after-recovery.php" method="POST">
            <input type="email" name="email" placeholder="Email"
                class="w-full p-2 border border-gray-300 rounded mb-4" required>

            <input type="password" name="password" placeholder="Enter New Password"
                class="w-full p-2 border border-gray-300 rounded mb-6" required>

            <button type="submit"
                class="w-full bg-lime-500 text-white py-2 rounded hover:bg-lime-600 transition">Recover Password</button>
        </form>
    </div>
</div>

</body>
</html>
