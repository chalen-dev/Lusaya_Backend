<div class="w-full border-b border-gray-800 bg-gray-900/50 backdrop-blur-sm sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo / Site Title -->
            <h1 class="text-xl sm:text-2xl font-bold gradient-text roboto-bold transition-all duration-300 group-hover:scale-105 group-hover:drop-shadow-[0_0_8px_rgba(255,115,0,0.5)]">
                @yield('title', config('app.name', 'Laravel'))
            </h1>

            <!-- Navigation Links with Active State -->
            <nav class="hidden md:flex items-center space-x-6">
                <a href="{{ route('posts.index') }}"
                   class="text-sm font-medium transition-colors relative
                          {{ request()->routeIs('posts.index')
                              ? 'text-purple-400 after:absolute after:bottom-[-4px] after:left-0 after:w-full after:h-0.5 after:bg-gradient-to-r after:from-purple-500 after:to-pink-500'
                              : 'text-gray-300 hover:text-purple-400' }}">
                    All Posts
                </a>
                <a href="{{ route('posts.create') }}"
                   class="text-sm font-medium transition-colors relative
                          {{ request()->routeIs('posts.create')
                              ? 'text-purple-400 after:absolute after:bottom-[-4px] after:left-0 after:w-full after:h-0.5 after:bg-gradient-to-r after:from-purple-500 after:to-pink-500'
                              : 'text-gray-300 hover:text-purple-400' }}">
                    Create Post
                </a>
            </nav>

            <!-- Right side: Login / User menu -->
            <div class="flex items-center gap-3">
                <!-- Login Button (with tooltip) -->
                <a href="#"
                   class="relative group inline-flex items-center px-4 py-2 bg-gradient-to-r from-purple-600 to-pink-600 text-white text-sm font-medium rounded-lg hover:from-purple-700 hover:to-pink-700 transition-all duration-200 shadow-lg hover:shadow-xl transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-gray-900"
                   title="Feature not yet implemented.">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                    </svg>
                    Login
                </a>
            </div>
        </div>
    </div>
</div>
