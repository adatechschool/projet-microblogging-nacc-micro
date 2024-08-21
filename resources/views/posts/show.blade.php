<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts Pictures') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                <div class="p-8 bg-white">
                    <h1 class="text-3xl font-bold mb-6 text-center text-gray-900">Posts Pictures</h1>
                    <ul class="space-y-8">
                        <li class="border-b border-gray-300 pb-8">
                            <h2 class="text-2xl font-semibold text-gray-800 mb-3">{{ $post->content }}</h2>
                            <p class="text-gray-600 leading-relaxed mb-6">{{ $post->body }}</p>
                            @if($post->image_path)
                                <div class="flex justify-center">
                                    <img src="{{ url($post->image_path) }}" alt="post image" class="max-w-xs w-full h-auto rounded-md shadow-md">
                                </div>
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>