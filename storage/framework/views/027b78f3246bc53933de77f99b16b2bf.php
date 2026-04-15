<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Sistem</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-md border border-gray-200">
        
        <div class="text-center mb-8">
            <h2 class="text-3xl font-extrabold text-gray-800">Selamat Datang</h2>
            <p class="text-gray-500 mt-2 text-sm">Silakan masukkan kredensial Anda untuk masuk ke sistem.</p>
        </div>

        <form action="/login" method="POST">
            <?php echo csrf_field(); ?>

            <div class="mb-5">
                <label for="email" class="block text-gray-700 text-sm font-semibold mb-2">email</label>
                <input type="email" id="email" name="email" 
                       class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-300 focus:border-blue-500 focus:bg-white focus:outline-none focus:ring-2 focus:ring-blue-200 transition duration-200" 
                       placeholder="Masukkan email" required autofocus>
            </div>

            <div class="mb-5">
                <label for="password" class="block text-gray-700 text-sm font-semibold mb-2">Password</label>
                <input type="password" id="password" name="password" 
                       class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-300 focus:border-blue-500 focus:bg-white focus:outline-none focus:ring-2 focus:ring-blue-200 transition duration-200" 
                       placeholder="••••••••" required>
            </div>

            <div class="flex items-center justify-between mb-6">
                <label class="flex items-center cursor-pointer">
                    <input type="checkbox" name="remember" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                    <span class="ml-2 text-sm text-gray-600">Ingat Saya</span>
                </label>
                <a href="#" class="text-sm font-semibold text-blue-600 hover:text-blue-800 hover:underline">
                    Lupa Password?
                </a>
            </div>

            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-lg focus:outline-none focus:shadow-outline transition duration-300 ease-in-out transform hover:-translate-y-1 hover:shadow-lg">
                Login
            </button>
        </form>
        
    </div>

</body>
</html><?php /**PATH C:\Users\USER\web-berita\resources\views/login.blade.php ENDPATH**/ ?>