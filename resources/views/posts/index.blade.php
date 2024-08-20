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
                    <!-- Posts Table -->
                    <table class="min-w-full bg-white">
                        <thead>
                            <tr>
                                <th class="w-1/12 px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">#</th>
                                <th class="w-9/12 px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">Content</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $index = 1; @endphp
                            @foreach($posts as $post)
                            <tr>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300">
                                    {{ $index }}
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300">
                                    <a href="{{ url('posts/' . $post->id) }}" class="text-blue-500 hover:underline">
                                        {{ $post->content }}
                                    </a>
                                </td>
                            </tr>
                            @php $index++; @endphp
                            @endforeach
                        </tbody>
                    </table>

                    <!-- Button to Trigger the Modal -->
                    <div class="mt-4">
                        <a href="{{ url('/posts?show_modal=true') }}" class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-blue-600 active:bg-blue-700 focus:outline-none focus:border-blue-700 focus:ring focus:ring-blue-200 disabled:opacity-25 transition">
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
                                                <form action="{{ route('posts.store') }}" method="POST">
                                                    @csrf
                                                    <div class="mb-4">
                                                        <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
                                                        <input type="text" name="content" id="content" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                                                    </div>

                                                    <div class="mb-4">
                                                        <label for="image_path" class="block text-sm font-medium text-gray-700">Image Path</label>
                                                        <input type="text" name="image_path" id="image_path" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
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