<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Microblogging - Bienvenue</title>
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="antialiased bg-gradient-to-br from-gray-100 to-gray-200 dark:from-gray-900 dark:to-gray-800 min-h-screen flex flex-col">
    <div class="flex-grow">
        @if (Route::has('login'))
        <div class="absolute top-0 right-0 p-6 text-right">
            @auth
            <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline-none focus:ring-2 focus:ring-red-500 rounded-md transition-all">Dashboard</a>
            @else
            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline-none focus:ring-2 focus:ring-red-500 rounded-md transition-all">Log in</a>
            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline-none focus:ring-2 focus:ring-red-500 rounded-md transition-all">Register</a>
            @endif
            @endauth
        </div>
        @endif

        <main class="container mx-auto px-4 py-20 sm:py-32 lg:py-40">
            <div class="max-w-3xl mx-auto text-center">
                <img src="{{ asset('img/logo-bebo.jpg') }}" alt="Logo Bebo" class="mx-auto w-32 h-32 sm:w-40 sm:h-40 rounded-full shadow-lg mb-12">
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-gray-900 dark:text-white mb-6">Microblogging NACC</h1>
                <p class="text-lg sm:text-xl text-gray-700 dark:text-gray-300 leading-relaxed mb-8">Bienvenue sur notre plateforme de microblogging. Nous avons créé cet espace pour vous permettre de partager vos pensées, vos idées et vos découvertes avec le monde entier. Que vous soyez passionné par la technologie, l'art, la musique, ou tout autre sujet, notre plateforme vous offre un lieu pour vous exprimer librement. Rejoignez-nous et faites partie de notre communauté grandissante !</p>
                <a href="{{ url('/dashboard') }}" class="inline-block bg-red-500 hover:bg-red-600 text-white font-bold py-3 px-6 rounded-lg transition-all hover:-translate-y-1 hover:scale-110">Commencer à bloguer</a>
            </div>
        </main>
    </div>

    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-4 text-center">
            <p class="text-lg font-semibold mb-2">Équipe Bebo :</p>
            <p class="text-gray-400">Anaël - Carlos - Charlène - Naïma</p>
        </div>
    </footer>
</body>

</html>