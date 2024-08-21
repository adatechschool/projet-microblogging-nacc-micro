<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- Posts Gallery -->
                    <div class="flex flex-wrap justify-center gap-6">
                        @foreach($posts as $post)
                            <div class="w-full sm:w-1/2 lg:w-1/4 p-2">
                                <div class="relative group bg-gray-700 rounded-lg overflow-hidden shadow-lg">
                                    <a href="{{ url('posts/' . $post->id) }}">
                                        <img src="{{ url($post->image_path) }}" alt="post image"
                                            class="w-full h-48 object-cover filter blur-sm transition duration-300 ease-in-out group-hover:blur-none group-hover:scale-105 transform">
                                        <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300 ease-in-out flex items-center justify-center">
                                            <h2 class="text-white text-lg font-bold">{{ $post->content }}</h2>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Pagination Links -->
                    <div class="mt-8">
                        {{ $posts->links() }}
                    </div>

                    <!-- Button to Trigger the Modal -->
                    <div class="mt-8 flex justify-center">
                        <a href="{{ url('/posts?show_modal=true') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-blue-700 active:bg-blue-800 focus:outline-none focus:border-blue-800 focus:ring focus:ring-blue-300 disabled:opacity-25 transition">
                            Add New Post
                        </a>
                    </div>

                    <!-- The Modal (conditionally shown based on $showModal) -->
                    @if($showModal)
                    <div class="fixed z-10 inset-0 overflow-y-auto">
                        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                            </div>

                            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

                            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                    <div class="sm:flex sm:items-start">
                                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                            <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                                                Add New Post
                                            </h3>
                                            <div class="mt-2">
                                            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-4">
        <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
        <input type="text" name="content" id="content" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
    </div>

    <div class="mb-4">
        <label for="image" class="block text-sm font-medium text-gray-700">Upload Image</label>
        <input type="file" name="image" id="image" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        <p class="text-sm text-gray-500 mt-2">Upload an image from your computer. The image will be saved in the `/app/public/img/` directory.</p>
    </div>

    <div class="flex items-center justify-end mt-4">
        <x-primary-button>
            {{ __('Create Post') }}
        </x-primary-button>
    </div>
</form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                    <a href="{{ url('/posts') }}" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                                        Close
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>