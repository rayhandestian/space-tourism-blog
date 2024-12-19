<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Space Tourism Blog</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-background text-text">

    <!-- Navigation Bar -->
    <nav class="bg-background p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ route('home') }}" class="text-accent text-2xl font-bold">Space Tourism Blog</a>
            <div class="space-x-4">
                <a href="{{ route('home') }}" class="hover:text-accent">Home</a>
                <a href="{{ route('blog') }}" class="hover:text-accent">Blog</a>
                <a href="{{ route('about') }}" class="hover:text-accent">About</a>
                <a href="{{ route('contact') }}" class="hover:text-accent">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-6">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-background text-center py-4">
        <p class="text-gray-400">&copy; {{ date('Y') }} Space Tourism Blog. All rights reserved.</p>
    </footer>

</body>
</html>
