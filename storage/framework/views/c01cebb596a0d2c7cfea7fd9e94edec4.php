<!DOCTYPE html>
<html lang="en" data-theme="cupcake">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chirper - Home</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" />

    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>

<body class="min-h-screen flex flex-col bg-gradient-to-br from-pink-200 via-purple-200 to-blue-200 font-sans">

    <!-- NAVBAR -->
    <nav class="navbar bg-white/70 backdrop-blur shadow-md">
        <div class="navbar-start">
            <a href="/" class="btn btn-ghost text-xl font-bold text-primary">🐦 Chirper</a>
        </div>
        <div class="navbar-end gap-2">
            <a href="#" class="btn btn-outline btn-primary btn-sm">Sign In</a>
            <a href="#" class="btn btn-primary btn-sm">Sign Up</a>
        </div>
    </nav>

    <!-- MAIN -->
    <main class="flex-1 flex items-center justify-center px-4">
        <div class="max-w-xl w-full">

            <div class="card bg-white shadow-xl hover:scale-105 transition duration-300">
                <div class="card-body text-center">

                    <h1 class="text-4xl font-bold text-primary">
                        Welcome to Chirper! 🐦
                    </h1>

                    <p class="mt-4 text-gray-600">
                        This is your brand new Laravel application.  
                        <span class="font-semibold text-secondary">Time to make it sing!</span>
                    </p>

                    <div class="mt-6 flex justify-center gap-3">
                        <a href="#" class="btn btn-primary">Get Started</a>
                        <a href="#" class="btn btn-outline btn-secondary">Learn More</a>
                    </div>

                </div>
            </div>

        </div>
    </main>

    <!-- FOOTER -->
    <footer class="footer footer-center p-5 bg-white/60 backdrop-blur text-gray-700 text-sm">
        <div>
            <p>© 2026 Chirper - Muhammad Fadhil Hasibuan (240170215) ❤️</p>
        </div>
    </footer>

</body>
</html><?php /**PATH C:\laragon\www\chirper\resources\views/welcome.blade.php ENDPATH**/ ?>