<!DOCTYPE html>
<html lang="id">
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Daftar Akun</title>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded shadow-md w-96">
        <h2 class="text-2xl font-bold mb-4">Daftar Akun Baru</h2>
        <form action="/register" method="POST">
            <?php echo csrf_field(); ?>
            <input type="text" name="name" placeholder="Nama Lengkap" class="w-full p-2 mb-4 border rounded" required>
            <input type="email" name="email" placeholder="Email" class="w-full p-2 mb-4 border rounded" required>
            <input type="password" name="password" placeholder="Password" class="w-full p-2 mb-4 border rounded" required>
            <button class="w-full bg-blue-600 text-white p-2 rounded">Daftar</button>
        </form>
        <p class="mt-4 text-sm">Sudah punya akun? <a href="/login" class="text-blue-600">Login</a></p>
    </div>
</body>
</html><?php /**PATH C:\Users\USER\web-berita\resources\views/register.blade.php ENDPATH**/ ?>