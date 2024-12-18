<x-layout>
    <div class="max-w-4xl mx-auto">
        <div class="bg-black bg-opacity-50 backdrop-blur-lg rounded-xl p-8 shadow-lg">
            <h1 class="text-4xl font-bold mb-6 text-blue-300">{{ $post->title }}</h1>
            <p class="text-gray-300 leading-relaxed text-xl mb-8">{{ $post->body }}</p>
            
            <div class="flex space-x-4">
                <a href="/posts" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-3 rounded-lg transition duration-300">
                    &larr; Back to Posts
                </a>
                <button class="border border-purple-500 text-purple-500 hover:bg-purple-500 hover:text-white px-6 py-3 rounded-lg transition duration-300">
                    Share Post
                </button>
            </div>
        </div>
    </div>
</x-layout>
