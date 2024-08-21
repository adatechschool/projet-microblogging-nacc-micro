<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100 dark:bg-gray-900">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utilisateurs</title>
    @vite('resources/css/app.css')
</head>
<body class="h-full antialiased">
    <div class="min-h-full">
        <header class="bg-white dark:bg-gray-800 shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold text-gray-900 dark:text-white">Nos utilisateurs</h1>
            </div>
        </header>
        <main class="py-8 sm:py-12">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-lg rounded-lg">
                    <div class="p-6 sm:p-8">
                        <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-6">Liste des utilisateurs</h2>
                        <ul class="space-y-4">
                            @foreach($users as $user)
                                <li class="bg-gray-50 dark:bg-gray-700 rounded-md p-4 hover:bg-gray-100 dark:hover:bg-gray-600 transition duration-300 ease-in-out">
                                    <p class="text-lg font-medium text-gray-700 dark:text-gray-300">{{$user->name}}</p>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>

