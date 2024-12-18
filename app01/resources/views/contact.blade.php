<x-layout>
<div class="flex justify-center px-4 sm:px-6 lg:px-8">
    <div class="max-w-5xl w-full space-y-8 backdrop-blur-lg bg-white/5 p-8 rounded-2xl shadow-2xl border border-white/10">
        <div class="text-center">
            <h2 class="text-4xl font-extrabold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-purple-500">Contact Us</h2>
            <p class="text-gray-300 mb-8 text-lg">We'd love to hear from you. Send us a message!</p>
        </div>

        <form action="/contact" method="POST" class="space-y-6">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="relative">
                    <label for="name" class="block text-sm font-medium text-gray-300 mb-2">Full Name</label>
                    <input type="text" name="name" id="name" required
                        class="w-full px-4 py-3 bg-gray-800/50 border border-gray-700 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200 placeholder-gray-500"
                        placeholder="John Doe">
                </div>
                <div class="relative">
                    <label for="email" class="block text-sm font-medium text-gray-300 mb-2">Email Address</label>
                    <input type="email" name="email" id="email" required
                        class="w-full px-4 py-3 bg-gray-800/50 border border-gray-700 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200 placeholder-gray-500"
                        placeholder="john@example.com">
                </div>
            </div>

            <div class="relative">
                <label for="subject" class="block text-sm font-medium text-gray-300 mb-2">Subject</label>
                <input type="text" name="subject" id="subject" required
                    class="w-full px-4 py-3 bg-gray-800/50 border border-gray-700 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200 placeholder-gray-500"
                    placeholder="What's this about?">
            </div>

            <div class="relative">
                <label for="message" class="block text-sm font-medium text-gray-300 mb-2">Message</label>
                <textarea name="message" id="message" rows="5" required
                    class="w-full px-4 py-3 bg-gray-800/50 border border-gray-700 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200 placeholder-gray-500 resize-none"
                    placeholder="Tell us what's on your mind..."></textarea>
            </div>

            <div class="flex justify-between">
                <a href="/"
                    class="group relative inline-flex items-center px-8 py-3 overflow-hidden rounded-xl bg-gradient-to-r from-green-500 to-green-600 text-white font-semibold shadow-lg transition-all duration-300 hover:scale-105 hover:shadow-xl focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
                    <span class="absolute right-0 w-8 h-32 -mt-12 transition-all duration-1000 transform translate-x-12 bg-white opacity-10 rotate-12 group-hover:-translate-x-40 ease"></span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                    </svg>
                    Home
                </a>
                <button type="submit"
                    class="group relative inline-flex items-center px-8 py-3 overflow-hidden rounded-xl bg-gradient-to-r from-blue-500 to-purple-600 text-white font-semibold shadow-lg transition-all duration-300 hover:scale-105 hover:shadow-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    <span class="absolute right-0 w-8 h-32 -mt-12 transition-all duration-1000 transform translate-x-12 bg-white opacity-10 rotate-12 group-hover:-translate-x-40 ease"></span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                    </svg>
                    Send Message
                </button>
            </div>
        </form>
    </div>
</div>
</x-layout>