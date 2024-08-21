<x-app-layout>
    <x-slot name="header">
        <h1 class="text-3xl font-bold text-gray-800 dark:text-white">
            {{ __('Dashboard') }}
        </h1>
    </x-slot>


    <main class="py-8 sm:py-12">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-lg rounded-lg">
                <div class="p-6 sm:p-8">
                    <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">
                        {{ __('My Profile') }}
                    </h2>
                    <div class="bg-gray-100 dark:bg-gray-700 rounded-md p-4 mb-6">
                        <h3 class="text-lg font-medium text-gray-700 dark:text-gray-300 mb-2">Mood du moment :</h3>
                        <p class="text-gray-600 dark:text-gray-400">{{Auth::user()->biography}}</p>
                    </div>
                    <a href="{{ url('/profile') }}" class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-md transition-colors duration-300 ease-in-out">
                        {{ __('Edit Profile') }}
                    </a>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>