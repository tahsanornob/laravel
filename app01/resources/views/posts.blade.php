<x-layout>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-black bg-opacity-50 backdrop-blur-lg rounded-xl shadow-lg">
            <thead>
                <tr class="border-b border-gray-700">
                    <th class="px-6 py-4 text-left text-blue-300 font-bold">Title</th>
                    <th class="px-6 py-4 text-left text-blue-300 font-bold">Content</th>
                    <th class="px-6 py-4 text-left text-blue-300 font-bold">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr class="border-b border-gray-700 hover:bg-gray-900 transition duration-300">
                        <td class="px-6 py-4 text-gray-300">{{ $post->title }}</td>
                        <td class="px-6 py-4 text-gray-300">{{ Str::limit($post->body, 100) }}</td>
                        <td class="px-6 py-4">
                            <div class="flex space-x-2">
                                <a href="/posts/{{$post->id}}" class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded transition duration-300">View</a>
                                <button class="border border-purple-500 text-purple-500 hover:bg-purple-500 hover:text-white px-3 py-1 rounded transition duration-300">Share</button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-8 text-center">
        <a href="/" class="inline-flex items-center bg-gradient-to-r from-purple-500 to-blue-500 hover:from-purple-600 hover:to-blue-600 text-white font-bold px-6 py-3 rounded-lg shadow-lg transform hover:scale-105 transition duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
            </svg>
            Back to Home
        </a>
    </div>
</x-layout>
