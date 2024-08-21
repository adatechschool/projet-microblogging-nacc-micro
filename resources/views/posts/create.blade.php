<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create New Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if ($errors->any())
                        <div class="mb-4">
                            <ul class="list-disc list-inside text-sm text-red-600">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('posts.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
                            <input type="text" name="content" id="content" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('content') }}" required>
                        </div>

                                                    <div class="mb-4">
                                                        <label for="image_path" class="block text-sm font-medium text-gray-700">Upload Image</label>
                                                        <input type="file" name="image" id="image" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                                                    </div>
                        <div class="mb-4">
                            <label for="image_path" class="block text-sm font-medium text-gray-700">Image</label>
                            <input type="file" name="image_path" id="image_path" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
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
                                    <button onclick="document.getElementById('modal').style.display='none'" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Modal -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>