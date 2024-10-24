<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project Registration System</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans bg-gradient-to-r from-gray-50 to-gray-100 text-gray-800 dark:bg-gray-900 dark:text-white">

    <!-- Main Wrapper -->
    <div class="min-h-screen flex flex-col justify-center items-center">

        <!-- Hero Section -->
        <header class="w-full py-6 bg-transparent text-center">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">Project Registration System</h1>
            <p class="text-lg text-gray-600 mb-10">
                Welcome back!
            </p>
        </header>

        <!-- Call to Action Buttons -->
        <main class="text-center">
            @if (Route::has('login'))
                <div class="flex justify-center space-x-4">
                    @auth
                        <a href="{{ url('/projects') }}"
                            class="px-6 py-3 text-black border hover:bg-gray-200 transition font-semibold text-lg">
                            Go to Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}"
                            class="px-6 py-3 text-black border hover:bg-gray-200 transition font-semibold text-lg">
                            Log in
                        </a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="px-6 py-3  text-black border hover:bg-gray-200 transition font-semibold text-lg">
                                Register
                            </a>
                        @endif
                    @endauth
                </div>
            @endif
        </main>

        <!-- Footer -->
        <footer class="mt-10 text-sm text-gray-500 dark:text-gray-400">
            Built with Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
        </footer>
    </div>

</body>

</html>