<x-layout>
<div class="flex justify-center px-4 sm:px-6 lg:px-8">
    <div class="max-w-5xl w-full space-y-8 backdrop-blur-lg bg-white/5 p-8 rounded-2xl shadow-2xl border border-white/10">
        <div class="text-center">
            <h2 class="text-4xl font-extrabold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-purple-500">Get Started</h2>
            <p class="text-gray-300 mb-8 text-lg">Welcome to our Laravel Project! Here's how to get started.</p>
        </div>

        <div class="space-y-6">
            <div class="bg-gray-800/50 p-6 rounded-xl border border-gray-700">
                <h3 class="text-2xl font-bold text-blue-400 mb-4">1. Installation</h3>
                <p class="text-gray-300">Clone the repository and install dependencies:</p>
                <pre class="bg-gray-900/50 p-4 rounded-lg mt-2 text-gray-300 overflow-x-auto">
git clone https://github.com/tahsanornob/project.git
cd project
composer install
php artisan serve</pre>
            </div>

            <div class="bg-gray-800/50 p-6 rounded-xl border border-gray-700">
                <h3 class="text-2xl font-bold text-purple-400 mb-4">2. Configuration</h3>
                <p class="text-gray-300">Set up your environment variables:</p>
                <pre class="bg-gray-900/50 p-4 rounded-lg mt-2 text-gray-300 overflow-x-auto">
cp .env.example .env
php artisan key:generate</pre>
            </div>

            <div class="bg-gray-800/50 p-6 rounded-xl border border-gray-700">
                <h3 class="text-2xl font-bold text-green-400 mb-4">3. Database Setup</h3>
                <p class="text-gray-300">Run migrations and seeders:</p>
                <pre class="bg-gray-900/50 p-4 rounded-lg mt-2 text-gray-300 overflow-x-auto">
php artisan migrate
php artisan db:seed</pre>
            </div>

            <div class="flex justify-between mt-8">
                <a href="/"
                    class="group relative inline-flex items-center px-8 py-3 overflow-hidden rounded-xl bg-gradient-to-r from-blue-500 to-blue-600 text-white font-semibold shadow-lg transition-all duration-300 hover:scale-105 hover:shadow-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    <span class="absolute right-0 w-8 h-32 -mt-12 transition-all duration-1000 transform translate-x-12 bg-white opacity-10 rotate-12 group-hover:-translate-x-40 ease"></span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                    </svg>
                    Back to Home
                </a>
                <a href="/posts"
                    class="group relative inline-flex items-center px-8 py-3 overflow-hidden rounded-xl bg-gradient-to-r from-purple-500 to-purple-600 text-white font-semibold shadow-lg transition-all duration-300 hover:scale-105 hover:shadow-xl focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2">
                    <span class="absolute right-0 w-8 h-32 -mt-12 transition-all duration-1000 transform translate-x-12 bg-white opacity-10 rotate-12 group-hover:-translate-x-40 ease"></span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z" />
                    </svg>
                    View Posts
                </a>
            </div>
        </div>
    </div>
</div>
</x-layout>
